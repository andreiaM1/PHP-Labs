<?php
include "Connection.php";

class User {
    public $db;

    public function __construct(){
        $this->db = new mysqli('localhost', 'root', '', 'student');
        if(mysqli_connect_errno()){
            echo "Error: Cannot connect to DB.";
            exit;
        }
    }
    
    public function reg_user($name, $username, $password, $email){
        $password = md5($password);
        $sql="SELECT * FROM users WHERE uname='$username' OR
        uemail='$email'";
        $check = $this->db->query($sql) ;

        $count_row = $check->num_rows;
        if($count_row == 0){
            $sql1="INSERT INTO users SET uname='$username', upass='$password',
            fullname='$name', uemail='$email'";
            $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Nu se poate insera");
            return $result;
        }
        else return false;
    }

    public function check_login($emailusername, $password){
        $password = md5($password);
        $sql2 = "SELECT uid FROM users WHERE (uemail='$emailusername' or uname='$emailusername') and
                upass='$password'";
        $result = mysqli_query($this->db,$sql2);
        $user_data = mysqli_fetch_array($result);
        $count_row = $result->num_rows;

        if($count_row == 0)
            return false;
        else{
            $_SESSION['login'] = true;
            $_SESSION['uid'] = $user_data['uid'];
            return true;
        }
      
    }

    public function get_fullname($uid){
        $sql3="SELECT fullname FROM users WHERE uid=$uid";
        $result=mysqli_query($this->db,$sql3);
        $user_data=mysqli_fetch_array($result);
        echo $user_data['fullname'];
    }

    public function get_session(){
        return $_SESSION['login'];
    }
    public function user_logout() {
        $_SESSION['login'] = FALSE;
        session_destroy();
        }
       
}
?>
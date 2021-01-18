<?php
require_once "DatabaseController.php";

class User extends DatabaseController {
    function getUser($email, $password){
        $query = "SELECT * FROM user
                  WHERE email = ? AND user_password = ?";
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "s",
                "param_value" => $password
            )
        );
        $user = $this->getResult($query,$params);
        return $user;
    }

    function addUser($user_name, $email, $password, $user_type){
        $encriptedPassword = md5($password);
        $query = "INSERT INTO user (username, email, user_password, user_type)
                  VALUES (?,?,?,?)";
        $params = array(
            array(
            "param_type" => "s",
            "param_value" => $user_name
            ),
            array(
            "param_type" => "s",
            "param_value" => $email
            ),
            array(
            "param_type" => "s",
            "param_value" => $encriptedPassword
            ),
            array(
            "param_type" => "s",
            "param_value" => $user_type
            )
            );
        $this->update($query, $params);     
    }
}
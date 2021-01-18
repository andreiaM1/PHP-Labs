<?php
    require_once("..\controllers\User.php");
    
    session_start();
    $userController = new User();
    $userController->getConnection();

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];
        $user_type = $_POST['user_types'];
        if(!(empty($username) or empty($email) or empty($password_1) or empty($password_2) or empty($user_type))){
            if($password_1 == $password_2){
                ?><div class="error">in if</div><?php
                $userController->addUser($username,$email,$password_1,$user_type);
                $loginUser = $userController->getUser($email, md5($password_1));
                $_SESSION['loggedin'] =  true;
                $_SESSION['email'] = $email;
                $_SESSION['userType'] = $user_type;
                $_SESSION['id'] = $loginUser[0]['id'];
                if($user_type == "Client"){
                    header("Location:home.php");
                }
                else if($user_type == "Admin"){
                    header("Location:home.php");
                }
            }
            else {
               ?> <div class="error">Password values dont't match</div><?php
            }
        }
        else {
            ?> <div class="error">All fields are mandatory</div><?php
        }
    }
?>

<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="..\styles\register-login-style.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="">
	<div class="input-group">
		<label>Name</label>
		<input type="text" name="username" value="">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
    </div>
    <div class="input-group">
        <label>Select user type</label>
        <select name="user_types">
            <option value="Client">Client</option>
            <option value="Admin">Admin</option>
        </select>
    </div>
	<div class="input-group">
		<button type="submit" class="btn" name="register">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Log in</a>
	</p>
</form>
</body>
</html>
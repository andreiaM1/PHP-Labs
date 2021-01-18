<?php
    session_start();
    require_once "..\controllers\User.php";
    $userController = new User();
    $userController->getConnection();
    if(!empty($_POST['submit'])){
    if(empty($_POST['email']) or empty( $_POST['password'])){
        exit("Fill in your info!");
    }
    $loginUsers = $userController->getUser($_POST['email'], md5($_POST['password']));
    if(!empty($loginUsers)){
        $loginUser = $loginUsers[0];
        if(md5(($_POST['password'])==$loginUser['user_password'])){
            session_regenerate_id();
            $_SESSION['loggedin'] =  true;
            $_SESSION['email'] = $loginUser['email'];
            $_SESSION['id'] = $loginUser['id'];
            $_SESSION['userType'] = $loginUser['user_type'];
            if($loginUser['user_type'] == "Client"){
                echo "Welcome ".$loginUser['username']."!";
                header("Location:home.php");
            }
            else if($loginUser['user_type'] == "Admin"){
                echo "Welcome ".$loginUser['username']."!";
                header("Location:home.php");
            }
        }
        else{
             ?> <div class="error">Provided email or password invalid</div><?php
        }
        
    }
    else {
        ?> <div class="error">Provided email or password invalid</div><?php
    }
}
?>

<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="..\styles\register-login-style.css">
</head>

<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form action="" method="post">
        <div class="input-group">
            <input type="text" name="email" placeholder="Email address" id="email" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" id="password" required>
        </div>
        <div class="input-group">
            <input type="submit" name="submit" value="Login">
        </div>
        <p class="register-from-login">
        <a href="register.php">New user</a>
        </p>
    </form>  
</body>

</html>
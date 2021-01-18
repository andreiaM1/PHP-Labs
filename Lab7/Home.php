<?php
session_start();
include_once 'C:\wamp64\www\Lab7\class.user.php';
$user = new User();
$uid = $_SESSION['uid'];
if (!$user->get_session()){
    header("location:Login.php");
}
if (isset($_GET['q'])){
    $user->user_logout();
    header("location:Login.php");
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
Home
<style>
body{
font-family:Arial, Helvetica, sans-serif;
}
h1{
font-family:'Georgia', Times New Roman, Times, serif;
}
</style>
<?php include 'index.html'; ?>
<div id="container">
<div id="header"><a href="Home.php?q=logout">LOGOUT</a></div>
<div id="main-body">
<h1>Salut, <?php $user->get_fullname($uid);?>!</h1>
</div>
<div id="footer"></div>
</div>

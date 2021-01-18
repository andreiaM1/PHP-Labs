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
<?php
 include('Conectare.php');
 if (isset($_GET['id']) && is_numeric($_GET['id'])) {

 $id = $_GET['id'];

 if ($stmt = $mysqli->prepare("DELETE FROM datepers WHERE idstudent = ? LIMIT 1")){
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
 }
 else{
    echo "ERROR: Nu se poare sterge.";
 }
 $mysqli->close();
 echo "<div>Inregistrarea a fost stearsa!</div>";
}
echo "<p><a href=\"Vizualizare.php\">Index</a></p>";
?>
<div id="header"><a href="Home.php?q=logout">LOGOUT</a></div>

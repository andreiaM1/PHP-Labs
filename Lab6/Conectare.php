<?php
    $hostname='localhost';
    $username='root';
    $password='';
    $db='student';
    $mysqli=new mysqli($hostname, $username, $password, $db);

    if(!mysqli_connect_errno()){
        echo 'Conectare la '.$db;
    }
    else{
        echo 'Nu se poate conecta.';
        exit();
    }
?>
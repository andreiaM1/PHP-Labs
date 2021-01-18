<?php
include("Conectare.php");
if(isset($_POST['submit'])){
    $nume=htmlentities($_POST['nume'], ENT_QUOTES);
    $prenume=htmlentities($_POST['prenume'], ENT_QUOTES);
    $an=htmlentities($_POST['an'], ENT_QUOTES);
    $grupa=htmlentities($_POST['grupa'], ENT_QUOTES);
    if($nume == '' || $prenume == '' || $an == '' || $grupa == ''){
        $error = 'ERROR: Campurile nu sunt completate!';
    }
    else{
        if($stmt =  $mysqli->prepare("INSERT INTO Datepers(nume, prenume, grupa, an) VALUES(?,?,?,?)")){
            $stmt->bind_param("ssss", $nume, $prenume, $grupa, $an);
            $stmt->execute();
            $stmt->close();
        }
        else{
            echo "ERROR: Nu se poate insera!";
        }
    }
}
$mysqli->close();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Inserare inregistrare</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
        <h1>Inserare inregistrare</h1>
        <?php
        if(!empty($error)){
            echo  "<div style='padding:4px; border:1px solid red; color:red'>" . $error. "</div>";} ?>
            <form action="" method="post">
             <div>
            <strong>Nume: </strong> <input type="text" name="nume" value=""/><br/>
            <strong>Prenume: </strong> <input type="text" name="prenume" value=""/><br/>
            <strong>An: </strong> <input type="text" name="an" value=""/><br/>
            <strong>Grupa: </strong> <input type="text" name="grupa" value=""/> <br/>
            <input type="submit" name="submit" value="Submit" />
            <a href="vizualizare.php">Index</a>
            </div></form>
    </body>
</html>
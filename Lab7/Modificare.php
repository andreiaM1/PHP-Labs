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

<?php    include("Conectare.php");
    if(!empty($_POST['id'])){
        if(isset($_POST['submit'])){
            if(is_numeric($_POST['id'])){
                $id=$_POST['id'];
                $nume=htmlentities($_POST['nume'], ENT_QUOTES);
                $prenume=htmlentities($_POST['prenume'], ENT_QUOTES);
                $grupa=htmlentities($_POST['grupa'], ENT_QUOTES);
                $an=htmlentities($_POST['an'], ENT_QUOTES);
                if($nume==''||$prenume==''||$an==''||$grupa==''){
                    echo "ERROR: Toate campurile sunt obligatorii!";
                }
                else {
                    if($stmt = $mysqli->prepare(
                        "UPDATE Datepers SET nume=?, prenume=?, grupa=?, an=?
                            WHERE idstudent='".$id."'")){

                        $stmt->bind_param("ssss",$nume,$prenume,$grupa,$an);
                        $stmt->execute();
                        $stmt->close();
                    }
                    else {
                        echo "ERROR: NU se poare face update!";
                    }
                }
            }
            else {
                echo "Id incorect!";
            }
        }
    }
?>
<html>
<html>
    <head>
        <title> <?php if ($_GET['id'] != '') { echo "Modificare inregistrare"; }?> </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
        <h1><?php if ($_GET['id'] != '') { echo "Modificare Inregistrare"; }?></h1>
        <?php if (!empty($error)) {
            echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error. "</div>";
        } ?>
        <form action="" method="post">
            <div>
            <?php if (!empty($_GET['id'])) { ?>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                <p>ID: <?php echo $_GET['id']; 
                if ($result = $mysqli->query("SELECT * FROM datepers where idstudent=".$_GET['id'])){
                    if ($result->num_rows > 0){ 
                        $row = $result->fetch_object();?></p>
                        <strong>Nume: </strong> <input type="text" name="nume" value="<?php echo $row->nume;?>"/><br/>
                         <strong>Prenume: </strong> <input type="text" name="prenume" value="<?php echo $row->prenume; ?>"/><br/>
                        <strong>An: </strong> <input type="text" name="an" value="<?php echo $row->an; ?>"/><br/>
                        <strong>Grupa: </strong> <input type="text" name="grupa" value="<?php echo $row->grupa;}}}?>"/><br/>
                        <input type="submit" name="submit" value="Submit" />
                        <a href="Vizualizare.php">Index</a>
            </div>
        </form>
                
    </body>
</html>
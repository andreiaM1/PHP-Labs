<?php
session_start();?>
<html>
    <head>
        <title>Exemplu de sesiune</title>
    </head>
    <?php
    $_SESSION["nume"]="Popovici";
    $_SESSION["prenume"]="Ionita";
    ?>
    <a href="sesiune2.php">Pagina catre care se trimit variabilele de sesiune</a>
</html>
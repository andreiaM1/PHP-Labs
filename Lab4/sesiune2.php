<html>
    <head>
        <title>Exemplu de sesiune</title>
    </head>
    <body>
        <?php
            session_start();
            $_SESSION["nume2"]="Abramovici";
            $_SESSION["prenume2"]="Mita";
            $_SESSION["varsta"]=39;
        ?>
        <a href="sesiune3.php">Pagina catre care se trimit variabilele de sesiune</a>
    </body>
</html>

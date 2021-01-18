<html>
    <head><title>Exemplu de sesiune</title>
    </head>
    <body>
        <?php
            session_start();
            echo $_SESSION["nume"]." ";
            echo $_SESSION["prenume"]."<br/>";
            echo $_SESSION["nume2"]." ";
            echo $_SESSION["prenume2"]."<br/>";
            echo $_SESSION["varsta"];
            echo "<br/>";
            echo $_SESSION["nume"]." ";
            echo $_SESSION["prenume"]."<br/>";
            echo $_SESSION["nume2"]." ";
            echo $_SESSION["prenume2"]."<br/>";
            echo $_SESSION["varsta"];
            session_destroy();

        ?>
    </body>
</html>
<html>
    <head>
        <title>Un formular cu select</title>
    </head>
    <body>
        <?php
            echo "<p>Bine ai venit <b> $_POST[user]</b></p>";
            echo "<p>Adresa introdusa este:<br><b>$_POST[adresa]</b></p>";
            echo "<p>Produsele alese:</p>";
            if(!empty($_POST["produs"])){
                echo "<ul>";
                foreach($_POST["produs"] as $value){
                    echo "<li>$value";
                }
                echo "</ul>";
            }
            ?>
    </body>
</html>
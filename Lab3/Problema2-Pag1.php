<html>
    <head>
        <title>Citirea datelor introduse intr-un formular</title>
    </head>
    <body>
        <?php
            echo "<p>Bine ai venit <b>$_POST[user]</b></p>";
            echo "<p> Adresa introdusa este:<br><b>$_POST[adresa]</b></p>";
        ?>
    </body>
</html>
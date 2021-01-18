<html>
    <header>
        <title>Exercitiul 4</title>
    </header>
    <body>
        <form action="Ex1.php" method="POST">
        N: <input type="text" name="N"/>
        <input type="Submit"/>
        </form>
        <?php
        if(!empty($_POST["N"])){
            if(is_numeric($_POST["N"])){
                $n=$_POST["N"];
                if($n%2==0)
                    echo "este par";
                else
                    echo "nu este par";
            }
            else
            echo "Introduce un numar";

        }
        else echo "Introduceti valoare lui n";
        ?>
    </body>
</html>
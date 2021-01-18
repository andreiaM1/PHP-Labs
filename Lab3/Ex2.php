<html>
    <header>
        <title>Exercitiul 2></title>
    </header>
    <body>
        <form action="Ex2.php" method="POST">
        N1: <input type="text" name="N1"/>
        N2: <input type="text" name="N2"/>
        <input type=submit value="Afisare minim"/>
        </form>
        <?php
        if(!empty($_POST["N1"]) && !empty($_POST["N2"])){
            $n1=$_POST["N1"];
            $n2=$_POST["N2"];
            if($n1<$n2)
                echo "Minimul este $n1";
            else
                echo "Minimul este $n2";
        }
        else
            echo "Completati cele doua campuri."
        ?>
    </body>
</html>
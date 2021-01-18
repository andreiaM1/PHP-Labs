<html>
    <header>
        <title>Exercitiul 6</title>
    </header>
    <body>
        <form action="Ex6.php" method="POST">
        N: <input type="text" name="N"/>
        <input type="Submit"/>
        </form>
        <?php
        if(!empty($_POST["N"])){
            if(is_numeric($_POST["N"])){
                $n=(integer)$_POST["N"];
                while($n>1){
                    $digit=$n%10;
                    echo $digit."*";
                    $n=(integer)$n/10;
                }
            }
            else echo "Valoarea introdusa trebuie sa fie numar.";
        }
        else { 
            if($_POST["N"]==='0')
                echo "0*";
            else
                echo "Introduceti valoare numerica"; 
        } 
        ?>
    </body>
</html>
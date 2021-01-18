<html>
    <head>
        <title>Exercitiull 3</title>
    </head>
    <body>
        <form action="Ex3.php" method="POST">
        X * 
        <input type="text" name="coef1"/>
        +
        <input type="text" name="coef2"/>
        = <input type="text" name="eq"/>
        <input type="submit" value="Rezolva"/>
        </form>
        <?php
        if(!(empty($_POST["coef1"]) && empty($_POST["coef2"]) && empty($_POST["eq"]))){
            $n1=$_POST["coef1"];
            $n2=$_POST["coef2"];
            $n3=$_POST["eq"];
            if(is_numeric($n1) && is_numeric($n2) && is_numeric($n3)){
                $result=($n3-$n2)/$n1;
                echo "Rezultat: $result";
            }
            else
                echo "IIntroduceti doar valori numerice.";
        }
        else
            echo "Adaugati coeficientii.";
        ?>
    </body>
</html>
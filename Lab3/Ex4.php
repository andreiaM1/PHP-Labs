<html>
    <header>
        <title>Exercitiul 4</title>
    </header>
    <body>
        <form action="Ex4.php" method="POST">
        N: <input type="text" name="N"/>
        <input type="Submit" value="Calculare N!"/>
        </form>
        <?php
        if(!empty($_POST["N"])){
            if(is_numeric($_POST["N"])){
                $n=$_POST["N"];
                $fact=1;
                while($n!=0){
                    $fact=$fact*$n;
                    $n--;
                }
                    echo $fact;
            }
        }
         
        elseif($_POST["N"]==='0'){
                echo "1";    
        }
        else { echo "Introduceti valoare numerica"; } 
        
        ?>
    </body>
</html>
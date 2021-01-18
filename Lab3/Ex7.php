<html>
    <header>
        <title>Exercitiul 7</title>
    </header>
    <body>
        <form action="Ex7.php" method="POST">
        Numar linii: <input type="text" name="rows"/>
        Numar coloane: <input type="text" name="cols"/>
        <input type="Submit"/>
        </form>
        <?php
        if(!(empty($_POST["rows"]) && empty($_POST["cols"]))){
            if(is_numeric($_POST["rows"]) && is_numeric($_POST["cols"])){
                $rows=$_POST["rows"];
                $columns=$_POST["cols"];
                echo "<table><thead>";
                echo "<tr>";
                for($i=1;$i<=$columns;$i++)
                    echo "<th>Column $i</th>";
                echo "</tr>";
                echo "</thead><tbody>";
                for($i=1;$i<=$rows;$i++){
                    echo "<tr>";
                    for($j=1;$j<=$columns;$j++)
                        echo "<td>Row $i Col $j</td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
            }
            else 
                echo "Introduceti valori numerice.";
        }
        else echo "Introduceti doua valori numerice.";
        ?>
    </body>
</html>
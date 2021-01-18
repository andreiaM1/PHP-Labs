<!DOCTYPE HTML PUBLIC  "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Inregistrari din tabela datepers</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
        <h1>Inregistrarile din tabela datepers:</h1>
        <p><b>Toate inregistrarile:</b></p>
        <?php
        include('Conectare.php');
        if($result=$mysqli->query("SELECT * FROM Datepers ORDER BY idstudent")){
            if($result->num_rows > 0){
                echo "<table border='1' cellpadding='10'>";
                "<tr><th>ID</th><th>Nume</th><th>Prenume</th><th>an</th><th>grupa</th><th></th><th></th></tr>";
                while($row=$result->fetch_object()){
                    echo "<tr>";
                    echo "<td>".$row->idstudent."</td>";
                    echo "<td>".$row->nume."</td>";
                    echo "<td>".$row->prenume."</td>";
                    echo "<td>".$row->grupa."</td>";
                    echo "<td>".$row->an."</td>";
                    echo "<td><a href='Modificare.php?id=".$row->idstudent."'>Modificare</a></td>";
                    echo "<td><a href='Stergere.php?id=".$row->idstudent."'>Stergere</a></td>";
                }
                echo "</table>";
            }
            else {
                echo "Nu sunt inregistrari in tabela!";
            }
        }
        else {
            echo "ERROR: ".$mysqli->error();
        }
        $mysqli->close();
        ?>
        <a href="Inserare.php">Adaugarea unei noi inregistrari</a>
        
    </body>
</html>
<html>
    <head>
        <title>Exemplu pentru toate tipurile de variabile PHP</title>
    </head>
    <body>
        <?php
        echo "Numar intreg:";
        $an=2020;
        echo "An curent:";
        echo $an; ?>
        <br/>
        <?php
        echo "Numar real:";
        $pi=3.1415926;
        echo "<em>PI</em> (&pi;) este:";
        echo $pi; ?>
        <br/>
        <?php
        echo "Sir de caractere si concatenare:";
        $sir="Buna, eu sunt:";
        $x="POP VIOREL";
        echo $sir." ".$x;
        $nume="Unchiul Vanea";
        $nascut=1961;
        $tara="Romania";
        echo "Buna ziua, numele meu esre: <b>";
        echo $nume;
        echo "</b>";
        echo "<p>";
        echo "Sunt un personaj de roman: <br/>";
        echo "<em>";
        echo $tara;
        echo "</em>";
        echo "</p>";
        echo "Eu am <b>";
        echo (2020-$nascut);
        echo "</b> de ani";?>
        <br />
        <?php
        $nume="Aici se memoreaza un text";
        $Nume="Aici se memoreaza un al text";
        echo $nume;
        echo "<p/>";
        echo $Nume;?>
        <br/>
        <?php
        $x=12;
        echo $x;
        echo "<p/>";
        $x="Buna ziua!";
        echo $x;
        $x=3.14;
        echo $x; ?>
    </body>
</html>
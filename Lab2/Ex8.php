<html>
    <head>
        <title>Schimbarea tipului prin casting</title>
    </head>
    <body>
        <?php
        $test=9.8;
        $casting=(double)$test;
        echo gettype($casting);
        echo " ";
        echo "este $casting <br/>";

        $casting=(string)$test;
        echo gettype($casting);
        echo " ";
        echo "este $casting <br/>";

        $casting=(integer)$test;
        echo gettype($casting);
        echo " ";
        echo "este $casting <br/>";

        $casting=(double)$test;
        echo gettype($casting);
        echo " ";
        echo "este $casting <br/>";

        $casting=(boolean)$test;
        echo gettype($casting);
        echo " ";
        echo "este $casting <br/>";

        ?>
    </body>
</html>
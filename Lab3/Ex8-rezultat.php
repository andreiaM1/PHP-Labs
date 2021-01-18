<?php
    include "Ex8-input.php";
    $n=5;
    $fact=1;
    while($n!=0){
        $fact=$fact*$n;
        $n--;
    }
    echo "Suma input.php: $sum<br/>";
    echo "n! $fact";
?>
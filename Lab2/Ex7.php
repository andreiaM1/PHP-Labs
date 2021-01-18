<?php /*Conversie EUR la DKK */
$rate=7.5;
$euro=100;
echo "Pentru <b>$euro</b> EUR, se primeste";
$moneda=($euro*$rate); 
echo "<b>$moneda</b> DKK";?>
<br/>
<?php /*Conversie DKK la EUR */
$rate=7.5;
$moneda=100;
echo "Pentru <b>$moneda</b> EUR, se primeste";
$euro=($moneda/$rate);
echo"<b>$euro</b> DKK";?>
<br/>
<?php /*Conversie DKK la EUR */
$rate=7.5;
$moneda=100;
echo "Pentru <b>$moneda</b> EUR, se primeste";
$euro=($moneda/$rate);
$rotunjire=round($euro);
echo "<b>$rotunjire</b> DKK"; ?>
<br/>
<?php
$x=2;
$y=5;
$rezultat=((1+(2-$x))*($y/2));
echo "Rezultatul: <b>$rezultat</b>"; ?>
<br/>
<?php
$x=7;
echo "'x' este <b>$x</b>";
echo "<p/>";
$x++;
echo "'x' este <b>$x</b>"; ?>
<br/>
<?php
$x=1;
$y=2;
$rezultat=($x>$y);
echo "Rezultatul: $rezultat"; ?>
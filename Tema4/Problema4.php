<?php
$stdin=fopen("php://stdin","r");
$count=0;
fscanf($stdin, "%d",$n);
$i=0;
do{
    fscanf($stdin, "%d",$el);
    $vector[]=$el;
    $n--;
}
while($n>0);
   
$max=0;
foreach($vector as $value){
    if($max<$value)
    $max=$value;
}
$vector[array_search($max,$vector)] = 1/$max;
foreach($vector as $value){
     echo $value." \n";
}

?>
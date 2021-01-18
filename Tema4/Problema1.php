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
    $sum=0;
    foreach($vector as $value){
        $elSum=0;
        echo "For $value ";
        while($value!=0){
            $elSum = $elSum + $value%10;
            $value=(int)($value/10);
        }
        if($elSum==10)
            $sum=$sum+$elSum;
        echo $elSum."\n";
    }
    echo "Suma elementelor cu suma cifrelor egala cu 10: $sum\n";

?>
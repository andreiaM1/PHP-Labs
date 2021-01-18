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
     $nr=0;
     foreach($vector as $value){
         $maxDigit=0;
         echo "For $value: ";
         while($value!=0){
             if($value%10>$maxDigit)
                $maxDigit = $value%10;
            $value=(int)($value/10);
         }
         if($maxDigit%2==1)
            $nr=$nr+1;
         echo $maxDigit." \n";
     }
     echo "Numarul elementelor cu cifra maxima impara $nr \n";
?>
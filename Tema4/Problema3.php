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
     $sum=0;
     foreach($vector as $value){
         $isPrime=true;
         if($value == 1|| $value==2)
            $isPrime=false;
        else{
            for($i=2;$i<$value;$i++){
                if($value%$i==0){ 
                    $isPrime=false;
                }
            }
        }
         if($isPrime==true){
            echo "$value este numar prim.\n";
            $nr++;
            $sum=$sum+$value;
         }
        else
            echo "$value nu este numar prim.\n";
     }
     if($nr>0){
        $average=(int)($sum/$nr);
        echo "Media aritmetica a numerelor prime: $average\n";
     }
     else
        echo "Vectorul nu contine valori prime.\n"
?>
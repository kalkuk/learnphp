<?php
$a=0;
$b=1;
while($b<4_000_000){
    $temp =$b;
    $b += $a;
    $a= $temp;
    //if($b%2 === 0)

    var_dump($b);
}



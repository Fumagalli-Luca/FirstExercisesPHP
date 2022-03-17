<?php
$a=10;
$b=20;
$c=30;

echo "<h1>IL NUMERO MINORE TRA $a,$b e $c è:</h1>";
if($a<$c){

    if($a<$b){
        echo $a;
    }
}

if($b<$c){

    if($b<$a){
        echo $b;
    }
}

if($c<$a){
    if($c<$b){

        echo $c;
    }
}

echo   "<h1>IL NUMERO MINORE TRA $a,$b e $c è:</h1>";
if($a>$c){

    if($a>$b){
        echo $a;
    }
}

if($b>$c){

    if($b>$a){
        echo $b;
    }
}

if($c>$a){
    if($c>$b){

        echo $c;
    }
}

?>
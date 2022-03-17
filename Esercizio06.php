<?php
$a=10;
$b=20;

echo "<h1>I NUMERI CONTENUTI TRA $a E $b SONO (while) : </h1>";
while($a!=$b){
    $a=$a+1;
    echo "$a</br>";
}

echo "<h1>I NUMERI CONTENUTI TRA $a E $b SONO (do while) : </h1>";
do{
    $a=$a+1;
    echo "$a</br>";
}while($a<$b);

echo "<h1>I NUMERI CONTENUTI TRA $a E $b SONO (for) : </h1>";
for($c=$a;$c<=$b;$c++){
echo "$c</br>";
}
?>
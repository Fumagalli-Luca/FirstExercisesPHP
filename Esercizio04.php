<?php
$tabellina=0;

if($tabellina<100){
    $i=1;
echo"<h1>TABELLINA DEL $i</h1>";
for($c=0;$c<=10;$c++){
  
$tabellina=$i*$c;
echo"$tabellina</br>";



}
$i++;
}
?>
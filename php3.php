<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$max = 10;
$teller = 0;

for($x = 0; $x <= $max; $x++){
    $result = ($x * 5);
    echo $x ." x 5 = ". $result. "<br>"  ;
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

while($teller <= 10){
    $result2 = ($teller * 5);
       echo $teller ." x 5 = ". $result2. "<br>"  ; 
       $teller++;
}
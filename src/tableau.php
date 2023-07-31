<?php
$ages = ['Mathilde' => 27, 'Pierre' => 29, 'Amandine' => 21];

$entiers = [];
for($i = 0; $i<64; $i++){
array_push($entiers,$i);
}

$decimaux = [];
foreach($entiers as $num){
    array_push($decimaux,$num/10);
}


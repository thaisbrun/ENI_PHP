<?php
include('header.html');
include('tableau.php');

$a = true;
$b = 1;
$c = "test";

echo "La variable a est : ", var_dump($a);
echo "<br>";
echo "La variable b est : " . $b;
echo "<br>";
echo "La variable c est : " . $c;
echo "<br>";

$d = true;
$e = 42;
$f = 12.34;
$g = 'Hello !';

echo "La variable d est : " . $d . " son type est : ", var_dump($d);
echo "<br>";
echo "La variable e est : " . $e . " son type est : ", var_dump($e);
echo "<br>";
echo "La variable f est : " . $f . " son type est : ", var_dump($f);
echo "<br>";
echo "La variable g est : " . $g . " son type est : ", var_dump($g);

define("Constante", "truc");
define("uneAutreConstante", "machin");

echo "La constante 1 est : " . Constante . " la constante 2 est " . uneAutreConstante ;
echo "<br>";
foreach ($_SERVER as $param => $value){
echo $param;
echo"<br>";
}

foreach($ages as $clef => $valeur){
 echo"<table><tr> 
    <th>age</th> <th>nom</th> </tr>
    <tr>
        <td> ".$clef." </td>
        <td>".$valeur."</td>
    </tr></table>";
}
foreach($entiers as $numero) {
    foreach ($decimaux as $decimal) {
        echo "<table><tr> 
    <th>entiers</th> <th>decimal</th> </tr>
    <tr>
        <td> " . $numero . " </td>

        <td>" . $decimal . "</td>
    </tr></table>";
    }
}
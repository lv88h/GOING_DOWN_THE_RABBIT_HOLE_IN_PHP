
<?php

$masivsx = array();
$masivsy = array();
$masivsxy = array();  //kopīgais masīvs kurā būtu visi piksēļi


$kollonas = 6;
$rindas = 7;

$kopaelementuskaits = $kollonas * $rindas;



//////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////
/////////////////////////  KRĀSU ĢENERĒTĀJS
$i = 0;
$input = array("Red", "Blue", "Green", "Yellow", "Purple", "Orange");



while($i < $kopaelementuskaits){
$rand_keys = array_rand($input, 2);
$svgx = '<svg width="10" height="10">
  <rect width="10" height="100" style="fill:'.$input[$rand_keys[0]].'; stroke-width:0;stroke:rgb(0,0,0)" />
</svg>';
//izveido 3 x vertibas
array_push($masivsxy, $svgx);
$i++;
}

//////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////
///////////////////////// KRĀSU ĢENERĒTĀJS

$i7 = 0;
while($i7 < $kopaelementuskaits){
if (($i7 + 1) % $kollonas == 0) {
echo '<br>';
} else {
echo $masivsxy[$i7];
}
$i7++;
}



?>


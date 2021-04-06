<?php


$masivsx = array();
$masivsy = array();

$XRANDOM = 3840;
$YRANDOM = 2160;

$i = 0;
$i2 = 0;

$input = array("Red", "Blue", "Green", "Yellow", "Purple", "Orange");
$input2 = array("Red", "Blue", "Green", "Yellow", "Purple", "Orange");

while($i < $XRANDOM){
	$rand_keys = array_rand($input, 2);

array_push($masivsx, $input[$rand_keys[0]]);

$i++;
}
while($i2 < $YRANDOM){
	$rand_keys2 = array_rand($input2, 2);

array_push($masivsy, $input2[$rand_keys2[0]]);

$i2++;
}


//for($i2 = 0; $YRANDOM < $i2; $i2++){
	//$input2 = array("Red", "Blue", "Green", "Yellow", "Purple", "Orange");
	//$rand_keys2 = array_rand($input2, 2);
	//echo $input2[$rand_keys2[0]];



	//array_push($masivsy, $input2[$rand_keys2[0]]);
//} 


$masivsxgarums = count($masivsx);
//echo $masivsxgarums;
$masivsygarums = count($masivsy);
//echo $masivsygarums;
$skaititlidzX = $masivsxgarums - $masivsygarums;
$skaititlidzX++;
$skaititlidzY = $masivsygarums - $masivsxgarums;
$skaititlidzY++;
$masivsxy = array();
if($masivsxgarums > $masivsygarums){
//echo 'Lielaka X ass<br>';  
for($skaititajs = 0; $skaititajs <= $skaititlidzX; $skaititajs++){    
    if(!empty($masivsx[$skaititajs])){
	$trukstx = 0;
	} else {
	$trukstx = 1;
	}
    if(!empty($masivsy[$skaititajs])){
	$truksty = 0;
	} else {
	$truksty = 1;
	}
	//JA Y NETRUKST TAD 0	
	if($truksty == 0){
	$yval = $masivsy[$skaititajs];
	$xval = $masivsx[$skaititajs];
	} else {
	$yval = $masivsy[$skaititajs];
	$xval = $masivsx[$skaititajs];
	}
    array_push($masivsxy, $skaititajs, $xval);
    array_push($masivsxy, $skaititajs, $yval);
}
}		
if($masivsxgarums < $masivsygarums){
for($skaititajs = 0; $skaititajs <= $skaititlidzY; $skaititajs++){
    if(!empty($masivsx[$skaititajs])){
	$trukstx = 0;
	} else {
	$trukstx = 1;
	}
    if(!empty($masivsy[$skaititajs])){
	$truksty = 0;
	} else {
	$truksty = 1;
	}
	if($trukstx == 0){
	$yval = $masivsy[$skaititajs];
	$xval = $masivsx[$skaititajs];
	} else {
	$xval = $masivsx[$skaititajs];
	$yval = $masivsy[$skaititajs];
	}
    array_push($masivsxy, $skaititajs, $xval);
    array_push($masivsxy, $skaititajs, $yval);
}
}
$keys = array_keys($masivsxy);
$arraySize = count($masivsxy); 
$all_colors_array = array();
for($i=1; $i < $arraySize; $i = $i + 2) {
$svgx = '<svg width="10" height="10">
  <rect width="10" height="10" style="fill:'.$masivsxy[$keys[$i]].'; stroke-width:0;stroke:rgb(0,0,0)" />
</svg>';
array_push($all_colors_array, $skaititajs, $svgx); 
}
$keys2 = array_keys($all_colors_array);
$arraySize2 = count($all_colors_array); 
for($i7=1; $i7 < $arraySize2; $i7 = $i7 + 4) {  

echo $all_colors_array[$i7];


}
echo '<br>';
for($i9=1; $i9 < $arraySize2; $i9 = $i9 + 4) {  

echo $all_colors_array[$i9 + 2];


}

?>

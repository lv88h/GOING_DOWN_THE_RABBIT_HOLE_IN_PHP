<?php

///IN WHOL CODE WE USE 2 ARRAYS TO DEFINE X Y values
//But values could be also in  $masivsxy
$masivsx = array();
$masivsy = array();



//Chooses image resolution we will populate
$XRANDOM = 3840;
$YRANDOM = 2160;

$i = 0;
$i2 = 0;

//defines all the colors that will be used randomly
$input = array("Red", "Blue", "Green", "Yellow", "Purple", "Orange");
$input2 = array("Red", "Blue", "Green", "Yellow", "Purple", "Orange");

//populates the arrays defined in beginning with random color values
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



//counts lenght of x y arrays that will be used in loop
$masivsxgarums = count($masivsx);
//echo $masivsxgarums;
$masivsygarums = count($masivsy);
//echo $masivsygarums;
$skaititlidzX = $masivsxgarums - $masivsygarums;
$skaititlidzX++;
$skaititlidzY = $masivsygarums - $masivsxgarums;
$skaititlidzY++;
//defines complete value array that will be used in final drawing
$masivsxy = array();


//checks which axis x or y is longer 
if($masivsxgarums > $masivsygarums){
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
	//IF Y pixel HAS X VALUE THEN 0
	if($truksty == 0){
	$yval = $masivsy[$skaititajs];
	$xval = $masivsx[$skaititajs];
	} else {
	$yval = $masivsy[$skaititajs];
	$xval = $masivsx[$skaititajs];
	}
	//pushes created values to complete defined array
    array_push($masivsxy, $skaititajs, $xval);
    array_push($masivsxy, $skaititajs, $yval);
}
}		
//checks which axis x or y is longer 

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
//checks which axis x or y is longer 

if($masivsxgarums === $masivsygarums){
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



//gets keys and lenght of complete value array
$keys = array_keys($masivsxy);
$arraySize = count($masivsxy); 

//creates array that will be populated with data + HTML
$all_colors_array = array();


for($i=1; $i < $arraySize; $i = $i + 2) {
$svgx = '<svg width="10" height="10">
  <rect width="10" height="10" style="fill:'.$masivsxy[$keys[$i]].'; stroke-width:0;stroke:rgb(0,0,0)" />
</svg>';
//pushes html + data to all_colors_array
array_push($all_colors_array, $skaititajs, $svgx); 
}

//gets keys and lenght of all_colors_array

$keys2 = array_keys($all_colors_array);
$arraySize2 = count($all_colors_array); 


//prints all_colors_array values that will be final image
for($i7=1; $i7 < $arraySize2; $i7 = $i7 + 4) {  
echo $all_colors_array[$i7];
}
echo '<br>';
for($i9=1; $i9 < $arraySize2; $i9 = $i9 + 4) {  

echo $all_colors_array[$i9 + 2];


}

?>

<?php

$fil = array();

if($fh = fopen("item12.txt", 'r')){

while (!feof($fh)){

$line = fgets($fh);

array_push($fil, $line); // them tung dong vao mang

}

fclose($fh);

}

$allItem = "";

foreach ($fil as $fl){

$arr = explode(",", $fl);

foreach ($arr as $ar){

if (strpos($allItem, trim($ar))===false){

$allItem = $allItem.trim($ar).",";

}

}

}

$allItem = substr_replace($allItem, "",-1);

//echo $allItem;

$arr1 = explode(",", $allItem);

echo "<br/>@relation "."haha";

foreach ($arr1 as $ar){

echo "<br/>@attribute ".$ar."{0,1}";

}

echo "<br/>@data ";

foreach ($fil as $fl){

echo "<br/>";

$record = "";

foreach ($arr1 as $ar){

if (strpos($fl, trim($ar))===false){

$record = $record."0,";

}else{

$record = $record."1,";

}

}

$record = substr_replace($record,"",-1);

echo $record;

}
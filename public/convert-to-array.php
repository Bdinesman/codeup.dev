<?php
$filepath="txt/parks.txt";
$handle=fopen($filepath,'r');
$contents=fread($handle,filesize($filepath));
$array = explode('<tr>',$contents);
var_dump($array[2]);
$rowStart = stripos($array[2],'title="');
$beginingOfWord=stripos($array[2],'">',$rowStart)+2;
$wordEnd=stripos($array[2],'<',$beginingOfWord);
echo substr($array[2],$beginingOfWord,($wordEnd-$beginingOfWord)) . PHP_EOL;
$toAdd="";
$parks=[];
foreach ($array as $key => $value) {
	$rowStart = stripos($value,'title="');
	$beginingOfWord=stripos($value,'">',$rowStart)+2;
	$wordEnd=stripos($value,'<',$beginingOfWord);
	$parkName =substr($value,$beginingOfWord,($wordEnd-$beginingOfWord));
	$firstColumn=stripos($value,'</td>');
	$secondColumn=stripos($value,'</td>',$firstColumn);
	$beginingOfLocation=stripos($value,'">',$secondColumn)+2;
	$endOfFirtColumn=stripos($value,'</a>',$beginingOfLocation);
	$parks[$parkName]['location']=substr($value,$beginingOfLocation,($endOfFirtColumn-$beginingOfLocation));
	$thirdColumn=stripos($value,'</td>',$secondColumn);
	$beginingOfDate=stripos($value,'nowrap">',$thirdColumn)+8;
	$endOfDate=stripos($value,'</',$beginingOfDate);
	$parks[$parkName]['date_established']=substr($value,$beginingOfDate,($endOfDate-$beginingOfDate));
	$fourthColumn=stripos($value,'</td>'.$endOfDate)+5;
	$beginingOfSize=$endOfDate+89;
	$endOfSize=stripos($value,' acres',$beginingOfSize);
	$parks[$parkName]['area_in_acres']=substr($value,$beginingOfSize,($endOfSize-$beginingOfSize));
}
var_dump($parks);
convertToDouble('146,597.60');
fclose($handle);

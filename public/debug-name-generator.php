<?php
	$file="txt/adjectives.txt";
	$adjectives= fopen($file,"r");
	$adjectivesList=fread($adjectives,filesize($file));
	$adjectiveArray=explode("\n",$adjectivesList);
	$serverAdjective=trim($adjectiveArray[mt_rand(0,(sizeof($adjectiveArray)-1))]);
	fclose($adjectives);
	$file="txt/nouns.txt";
	$nouns= fopen($file,"r");
	$nounsList=fread($nouns,filesize($file));
	$nounArray=explode("\n",$nounsList);
	$serverNoun=trim($nounArray[mt_rand(0,(sizeof($nounArray)-1))]);
	fclose($nouns);
	function pageController($serverNoun,$serverAdjective){
		$data=array();
		$data['noun']=$serverNoun;
		$data['adjective']=$serverAdjective;
		return $data;
	}
	extract(pageController($serverNoun,$serverAdjective));
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Your server name is: </h1>
	<h1><?php echo $serverAdjective . $serverNoun; ?><h1>
</body>
</html>
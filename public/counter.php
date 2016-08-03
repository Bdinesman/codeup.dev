<?php
	function pageController(){
		$data=array();
		//$counter = $_GET('counter');
		$counter=0;
		$data['counter']=&$counter;
		return $data;
	}
	extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Current counter:</h1>
	<h1><?php if(empty($_GET)){
			echo '0';
		}elseif(empty($_GET)==false){
			echo $_GET["counter"];
		};?></h1>
	<a <?php 
		if(empty($_GET)){
			$html='/counter.php?counter=0';
		}else{
		$html='/counter.php?counter=' . (intval($_GET["counter"])+1);
		}
		?> href=<?php echo $html?>>Counter Up</a>
			<a <?php 
		if(empty($_GET)){
			$html='/counter.php?counter=0';
		}else{
		$html='/counter.php?counter=' . (intval($_GET["counter"])-1);
		}
		?> href=<?php echo $html?>>Counter Down</a>

	</body>
</html>
<?php
	function pageController(){
		if(empty($_GET["hits"]){
			$data=array();
			$data['hits']=0;
		}else{
			$data=array();
			$data['hits']=$_GET["hits"];
		}
		return $data;
	}
	extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>PING</title>
</head>
<body>
	<h1>PING</h1>
	<a>HIT</a>
	<a>MISS</a>
</body>
</html>
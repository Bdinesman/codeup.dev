<?php
	function pageController(){
		if(empty($_GET)){
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
	<title>PONG</title>
</head>
<body>
	<h1>PONG</h1>
	<a <?php 
		$url='/ping.php?hits=' . (intval($hits)+1);
		?> href=<?php echo $url?>>HIT</a>
	<a href="/pong.php" id='miss'>MISS</a>
	<script>
		var miss = document.getElementById('miss');
		miss.addEventListener('click',function(){alert('GAME OVER');})
	</script>
</body>
</html>
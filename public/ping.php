<?php
	function pageController(){
		$data=array();
		if(empty($_GET)){
			$data['hits']=0;
		}else{
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
	<a <?php 
		$url='/pong.php?hits=' . (intval($hits)+1);
		?> href=<?php echo $url?>>HIT</a>
	<a href="/ping.php?" id='miss'>MISS</a>
	<script>
		var miss = document.getElementById('miss');
		miss.addEventListener('click',function(){alert('GAME OVER');})
	</script>
</body>
</html>
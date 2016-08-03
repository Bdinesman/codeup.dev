<?php
$goForward='http://codeup.dev/national_parks.php?page=' . (offset()+1);
$goBackward='http://codeup.dev/national_parks.php?page=' . (offset()-1);
function offset(){
if(isset($_GET['page'])==false or $_GET['page']<0){
	$offset=0;
}else if($_GET['page'] <15){
	$offset=$_GET['page'];
}else{
	$offset=14;
}
return $offset;
}
function createQuery(){
	require __DIR__ . "/../php/parks_migration.php";
require __DIR__ . "/../php/parks_seeder.php";
	$offset=offset() * 4;
	$query="SELECT * FROM national_parks LIMIT 4 OFFSET $offset;";
	$parksTable= $dbc->query($query);
	$rows=[];
	while($row=$parksTable->fetch(PDO::FETCH_ASSOC)){
		$rows[]=$row;
	}
	return $rows;
}
function pageController(){
	$data=createQuery();
	return ['data'=>$data];
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>National Park Data Page<?=$offset?></title>
	<style>
	body{
		background-image:url("img/branches.png");
	}
	table{
		position:relative;
		border:1px solid black;
		border-collapse:collapse;
	}
	td{
		border-bottom:1px solid black;
		text-align: center;
	}
	th{
		background-color:forestgreen;
		color:white;
	}
	tr:nth-child(even){
		background-color:rgba(211,211,211,.8);
	}
	tr:nth-child(odd){
		background-color:rgba(256,256,256,.8);
	}
	#table-div{
		position: absolute;
		width:100%;
		border-top:1px solid black;
		border-bottom:1px solid black;
		padding:15px;
	}
	.description{
		text-align: left;
	}
	</style>
</head>
<body>
<div id="table-div">
<h1>National Parks Database</h1>
<table>
	<th>Name</th>
	<th>Location</th>
	<th>Date Established</th>
	<th>Area(Acres)</th>
	<th>Description</th>
	<?php foreach($data as $key=>$value):?>
		<tr>
		<td><?=$data[$key]['name']?></td>
		<td><?=$data[$key]['location']?></td>
		<td><?=$data[$key]['date_established']?></td>
		<td><?=$data[$key]['area_in_acres']?></td>
		<td class="description"><?=$data[$key]['description']?></td>
		</tr>
	<?php endforeach;?> 
	</table>
	<a href=<?=$goBackward?>>Last 4 Results</a>
	<a href=<?=$goForward?>>Next 4 Results</a>
</div>
<div>
</body>
</html>
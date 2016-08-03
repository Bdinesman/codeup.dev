<?php
function connectToDB($DB_HOST,$DB_NAME,$DB_USER,$DB_PASS,$echo=false){
	//IP to connect to
	define('DB_HOST',$DB_HOST);
	//Database being connected to
	define('DB_NAME',$DB_NAME);
	//MySQL user
	define('DB_USER',$DB_USER);
	//MySQL Password
	define('DB_PASS',$DB_PASS);
	$dbc=NEW PDO('mysql:host=' . DB_HOST . ';dbname=' .DB_NAME,DB_USER,DB_PASS);
	$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if($echo==true){
	echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
	}
	return $dbc;
}
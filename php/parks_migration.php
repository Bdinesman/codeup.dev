<?php
require_once "db_connect.php";
function migrate_table(){
	$dbc=connectToDB('127.0.0.1','parks_db','parks_user','password');
	$query = 'DROP TABLE IF EXISTS national_parks';
	$dbc->exec($query);
	$createTable="CREATE TABLE national_parks(
	    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	    name VARCHAR(50) NOT NULL,
	    location VARCHAR(50) NOT NULL,
	    date_established VARCHAR(50) NOT NULL,
	    area_in_acres DOUBLE NOT NULL,
	    description VARCHAR(1000) NOT NULL,
	    PRIMARY KEY(id)
	)";
	$dbc->exec($createTable);
	return $dbc;	
}
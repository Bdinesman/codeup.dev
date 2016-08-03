<?php
FWRITE(STDOUT,'ENTER DB HOST:');
$DB_HOST=trim(fgets(STDIN));
FWRITE(STDOUT,'ENTER DB NAME:');
$DB_NAME=trim(fgets(STDIN));
FWRITE(STDOUT,'ENTER DB USER:');
$DB_USER=trim(fgets(STDIN));
FWRITE(STDOUT,'ENTER DB PASSWORD:');
$DB_PASS=trim(fgets(STDIN));
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
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

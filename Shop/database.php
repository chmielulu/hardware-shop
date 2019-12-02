<?php

$configPDO = [
	'host' => 'localhost', 
	'user' => 'root',
	'password' => '',
	'database' => 'hardware.pl'
];

try {
	
	$db = new PDO("mysql:host={$configPDO['host']};dbname={$configPDO['database']};charset=utf8", $configPDO['user'], $configPDO['password'], [
		PDO::ATTR_EMULATE_PREPARES => false, 
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	]);
	
} catch (PDOException $error) {
	
	echo $error->getMessage();
	exit('Database error');
	
}

?>
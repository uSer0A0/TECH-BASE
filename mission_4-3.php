﻿<?php
	//データベース接続
	$dname = 'mysql:dbname=tb210407db;host=localhost';
	$user = 'tb-210407';
	$password = 'ZnMkmJhwU7';
	$pdo = new PDO($dname,$user,$password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	
	$sql = 'SHOW TABLES';
	$result = $pdo -> query($sql);
	foreach ($result as $row) {
		echo $row[0]."<br>";
	}
	echo "<hr>";
?>
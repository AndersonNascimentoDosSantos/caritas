<?php


header_remove('set-cookie');
header("Cache-Control: public, max-age=120");

function conectaDb(){
	//seta as configuracoes

  $dbHost = 'mysql';
  $dbUsername = 'root';
  $dbPassowrd = '310192';
  $dbName = 'caritas_db';

	$mysqli = new mysqli($dbHost, $dbUsername, $dbPassowrd, $dbName);
	if ($mysqli->connect_errno) {
	    echo "Em manutenção...";
	    exit;
	}
	
	$mysqli->query("SET character_set_results=utf8mb4");
	$mysqli->query("SET names 'utf8mb4'");
	
	return $mysqli;
}
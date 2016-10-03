<?php
	error_reporting(0);
	header('Access-Control-Allow-Origin: *');
	session_start();
	$actual_link = "http://$_SERVER[HTTP_HOST]/json.pe.hu/";
	define('BASE_URL', $actual_link);
	define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/json.pe.hu");

	try {

	//setting PDO mysql
	    $dbname = "unpam_db";
	    $user = "root";
	    $pass = "";
	    $host = "localhost";
	    $DBH = new PDO("mysql:host=$host;dbname=$dbname", "$user", $pass);
            //$con = mysql_connect($host, $user, $pass);


	} 

	catch (PDOException $e){
		echo $e->getMessage();
		
	} 	

?>			
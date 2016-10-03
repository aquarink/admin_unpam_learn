<?php

	include'controller.php';
	include'model.php';
	$control = new Controller(); 

	if(isset($_GET['mod'])) {
		$modul = $_GET['mod'];
	} 

	// cek modul and return
	if($modul) {
		
		if (method_exists($control, $modul)) {
			$control->$modul();
		} else {
			$control->error(); 
		}

	} else {
		// default controller
		$control->handles(); 

	}

?>
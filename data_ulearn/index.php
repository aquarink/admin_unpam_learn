<?php
	
	include'connect.php';
	$page = $_GET['page'];

	if(isset($page)) {

		if($page == 'read') {
			include 'read/page.php';
		}

		if($page == 'update') {
			include'update/page.php';
		}

		if($page == 'add') {
			include'add/page.php';
		}

	} else {

		include'selamat_datang.php';

	}

?>
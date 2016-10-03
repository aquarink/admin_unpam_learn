<?php
	//header('Access-Control-Allow-Origin: *');
    session_start();
    include 'connect.php';
    $id_user = $_GET['idUser'];
    $query = $DBH->query(" update latihan set read_by_user = '1' where id_mahasiswa = '$id_user' "); 

    if($query) {
    	echo "berhasil";
    }

?>
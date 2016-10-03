<?php
    //header('Access-Control-Allow-Origin: *');
	// session_start();

    include 'connect.php'; 
	$nim = $_GET['nim'];
	$pass = md5($_GET['pass']);
	$cut_password=substr($pass, 0, 25);
    $query = $DBH->query(" select * from user where NIM='".$nim."' and password='".$cut_password."' ");
	$find = $query->rowCount();
	if($find){
		
		while ($row = $query->fetch()) {

			$id_mhs = $row['id_user'];
			$nim = $row['NIM'];
			$nama_mhs = $row['nama_user'];
			$email = $row['email'];
			$alamat = $row['alamat'];
			$tgl_lahir = $row['tgl_lahir'];
			$status = 1;
		}
	} else {
		$status = 0;
	}
    //for($i=1; $i<2; $i++) {
		$result[] = array ( 
            "id"            => 1,
			"id_user"       => $id_mhs,
			"nim"            => $nim,
            "status"         	=> $status,
            "nama"    	=> $nama_mhs,
			"email"    	=> $email,
			"alamat"    	=> $alamat,
			"tgl_lahir"    	=> $tgl_lahir
        );
	//}
    echo json_encode($result);

?>
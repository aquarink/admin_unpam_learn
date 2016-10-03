<?php
    header('Access-Control-Allow-Origin: *');
	$nim = $_GET['nim'];
    for($i=1; $i<2; $i++) {
		$result[] = array ( 
            "id"            => $i,
            "nama"         	=> "nama $i $nim",
            "alamat"    	=> "alamat $i"
        );
	}
    echo json_encode($result);

?>
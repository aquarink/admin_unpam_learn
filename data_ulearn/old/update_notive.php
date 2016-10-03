<?php
	//header('Access-Control-Allow-Origin: *');
    session_start();

    // $_SESSION[nama] = 'riky';
    
    include 'connect.php';
    $query = $DBH->query("SELECT * FROM latihan");

    while ($row = $query->fetch()) {
        // $time = strtotime($row['create_date']);

        $result[] = array (
            "read_dosen"    => $row['read_by_dosen'],
            "read_user"     => $row['read_by_user']
        );

    }

    echo json_encode($result);

?>
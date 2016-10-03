<?php
    session_start();

    include 'connect.php';
    $query = $DBH->query("   
        SELECT * FROM USER 
        JOIN STATUS ON user.`id_status` = status.`id_status`  
        WHERE status.`id_status` = '3'  ");

    while ($row = $query->fetch()) {

        $result[] = array (
            "id_user"       => $row['id_user'],
            "nim"           => $row['NIM'],
            "nama_user"     => $row['nama_user'],
            "gender"        => $row['gender'],
            "agama"         => $row['agama'],
            "hanphone"      => $row['no_tlpn'],
            "email"         => $row['email'],
            "alamat"        => $row['alamat'],
            "status"      	=> $row['status']
            );

    }

    echo json_encode($result);

?>
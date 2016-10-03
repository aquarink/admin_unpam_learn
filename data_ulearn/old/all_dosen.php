<?php
    session_start();

    include 'connect.php';
    $query = $DBH->query("   
        SELECT * FROM USER 
        JOIN STATUS ON user.`id_status` = status.`id_status` 
        JOIN matakuliah ON user.`id_matakuliah` = matakuliah.`id_matakuliah` 
        WHERE status.`id_status` = '2'  ");

    while ($row = $query->fetch()) {

        $result[] = array (
            "id_user"       => $row['id_user'],
            "nim"           => $row['NIM'],
            "nama_user"     => $row['nama_user'],
            "gender"        => $row['gender'],
            "agama"         => $row['agama'],
            "matakuliah"    => $row['nama_matkul'],
            "hanphone"      => $row['no_tlpn'],
            "email"         => $row['email'],
            "alamat"      	=> $row['alamat']
            );

    }

    echo json_encode($result);

?>
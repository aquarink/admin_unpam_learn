<?php
    session_start();

    include 'connect.php';
    $query = $DBH->query("   
        SELECT * FROM dosen d
        JOIN matakuliah m ON d.`id_matakuliah` = m.`id_matakuliah`  ");

    while ($row = $query->fetch()) {

        $result[] = array (
            "id_dosen"       => $row['id_dosen'],
            "nim"           => $row['NIM_dosen'],
            "nama_dosen"     => $row['nama_dosen'],
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
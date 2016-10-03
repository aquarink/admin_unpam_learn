<?php
    session_start();

    include 'connect.php';
    $query = $DBH->query(" SELECT * FROM tbl_dosen LEFT JOIN
    tbl_matakuliah ON tbl_dosen.id_matakuliah = tbl_matakuliah.id_matakuliah
    ");

    while ($row = $query->fetch()) {
        $time = strtotime($row['create_date']);

        $result[] = array ( 
            "id"            => $row['id_dosen'],
            "nama"         	=> $row['nama_dosen'],
            "matakuliah"    => $row['nama_matkul'],
            "hanphone"      => $row['hanphone'],
            "email"         => $row['email'],
            "alamat"      	=> $row['alamat'] 
            );

    }

    echo json_encode($result);

?>
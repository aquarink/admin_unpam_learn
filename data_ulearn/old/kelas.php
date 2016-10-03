<?php
    session_start();

    include 'connect.php';
    $query = $DBH->query("   
        SELECT *
        FROM krs_mahasiswa  krs 
        JOIN dosen dsn ON krs.`id_dosen` = dsn.`id_dosen`
        JOIN matakuliah mkt ON krs.`id_matakuliah` = mkt.`id_matakuliah`
        WHERE krs.`id_mahasiswa` = '8'  ");

    while ($row = $query->fetch()) {

        $result[] = array (
            "id_dosen"      => $row['id_dosen'],
            "nim_dosen"     => $row['NIM_dosen'],
            "nama_dosen"    => $row['nama_dosen'],
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
<?php
	//header('Access-Control-Allow-Origin: *');
    session_start();
    error_reporting(0);
    // $_SESSION[nama] = 'riky';
    $id_user = $_SESSION['id_user'];
    // echo $id_user;
    include 'connect.php';
    $query = $DBH->query("SELECT * FROM posting p
    JOIN dosen d ON p.`id_dosen` = d.`id_dosen`  
    JOIN matakuliah m ON d.`id_matakuliah` = m.`id_matakuliah`
    WHERE p.`enable` = '1' ORDER BY p.`id_posting` DESC");

    while ($row = $query->fetch()) {
        $time = strtotime($row['create_date']);

        $result[] = array (
            "id"            => $row['id_posting'],
            "img"           => "java.png",
            "title"         => $row['title'],
            "intro"         => $row['intro'],
            "isi"           => $row['isi'],
            "kategori"      => $row['nama_matkul'],
            "id_dosen"      => $row['id_dosen'],
            "nama_dosen"    => $row['nama_dosen'],
            "latihan"       => $row['latihan'],
            "tanggal"       => $myFormatForView = date("d-m-y", $time)
            );

    }

    echo json_encode($result);

?>
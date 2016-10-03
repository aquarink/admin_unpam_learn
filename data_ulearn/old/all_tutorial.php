<?php
	//header('Access-Control-Allow-Origin: *');
    session_start();
    error_reporting(0);
    // $_SESSION[nama] = 'riky';
    $id_user = $_SESSION['id_user'];
    // echo $id_user;
    include 'connect.php';
    $query = $DBH->query("SELECT * FROM posting  
    LEFT JOIN user ON posting.`id_user` = user.`id_user` 
    LEFT JOIN matakuliah ON user.`id_matakuliah` = matakuliah.`id_matakuliah`   
    WHERE posting.`enable` = '1' ORDER BY posting.`id_posting` DESC");

    while ($row = $query->fetch()) {
        $time = strtotime($row['create_date']);

        $result[] = array (
            "id"            => $row['id_posting'],
            "img"           => "java.png",
            "title"         => $row['title'],
            "intro"         => $row['intro'],
            "isi"           => $row['isi'],
            "kategori"      => $row['nama_matkul'],
            "id_dosen"      => $row['id_user'],
            "nama_dosen"    => $row['nama_user'],
            "latihan"       => $row['latihan'],
            "jawaban"       => $row['jawaban'],
            "koreksi"       => $row['koreksi'],
            "tanggal"       => $myFormatForView = date("d-m-y", $time)
            );

    }

    echo json_encode($result);

?>
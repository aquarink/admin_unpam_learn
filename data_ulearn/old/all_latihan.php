<?php
	//header('Access-Control-Allow-Origin: *');
    session_start();
    include 'connect.php';
    $id_user = $_GET['idUser'];
    $query = $DBH->query("
        SELECT p.`id_user` AS id_dosen, p.`title`, p.`intro`, p.`isi`, l.`koreksi`, p.`create_date`, p.`id_posting`, p.`latihan`,l.`read_by_user`, l.`id_latihan`, l.`jawaban`,  l.`id_mahasiswa` as id_mahasiswa
        FROM posting AS p 
        JOIN latihan AS l ON p.`id_posting` = l.`id_posting` where l.`id_mahasiswa` = '$id_user' "); 

    while ($row = $query->fetch()) {
        $time = strtotime($row['create_date']);

        $result[] = array (
            "id_latihan"    => $row['id_latihan'],
            "id_posting"    => $row['id_posting'],
            "id_dosen"      => $row['id_dosen'],
            "id_mahasiswa"  => $row['id_mahasiswa'],
            "intro"         => $row['intro'],
            "isi"           => $row['isi'],
            "jawaban"       => $row['jawaban'],
            "koreksi"       => $row['koreksi'],
            "latihan"       => $row['latihan'],
            "read_by_user"  => $row['read_by_user'],
            "tanggal"       => $myFormatForView = date("d-m-y", $time)
            );

    }

    echo json_encode($result);

?>
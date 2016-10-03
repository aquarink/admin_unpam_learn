<?php
    include 'connect.php';
    $id = $_GET['id'];
    
    $query = $DBH->query(" SELECT * FROM tbl_posting  LEFT JOIN
    tbl_dosen ON tbl_posting.`id_dosen` = tbl_dosen.`id_dosen` LEFT JOIN
    tbl_matakuliah ON tbl_dosen.`id_matakuliah` = tbl_matakuliah.`id_matakuliah` 
    WHERE tbl_posting.`status` = '1' AND id_posting = '$id'
    ");

    while ($row = $query->fetch()) {
        $result[] = array (
            "id"        => $row['id_posting'],
            "img"       => "java.png",
            "title"     => $row['title'],
            "intro"     => $row['intro'],
            "isi"       => $row['isi'],
            "kategori"  => $row['nama_matkul'],
            "nama_dosen"=> $row['nama_dosen'],
            "tanggal"   => $row['create_date'],
            "view"      => $row['view']
            );

    }

    echo json_encode($result);

?>
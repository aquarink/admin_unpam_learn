<?php
	//header('Access-Control-Allow-Origin: *');
    include 'connect.php';
    // $_SESSION[nama] = 'riky';
    // $id_user = $_SESSION['id_user'];
    // echo $id_user;
    $jawab      = $_GET['jawab'];
    $id_dosen   = $_GET['id_dosen'];
    $id_user    = $_GET['id_user'];
    $id_posting = $_GET['id_posting'];
    $status = 0;
    if($jawab != '') {

        $cek_data      = $DBH->query(" select * from latihan where id_posting = '$id_posting' and id_mahasiswa = '$id_user' and id_dosen = '$id_dosen'");
        $row = $cek_data->fetch();
        // echo ;
        if(($row['id_posting'] == $id_posting) and ($row['id_posting'] == $id_posting) and ($row['id_posting'] == $id_posting)) {
            $status = 1;
        } else {
            $query      = $DBH->query("
            INSERT INTO latihan
                (`id_posting`, `id_mahasiswa`, `id_dosen`, `jawaban`, `date`)
            VALUES ('$id_posting', '$id_user', '$id_dosen', '$jawab', now()) ");
        }
    // 
    }
    if($status == 0) {
        if($query) {
            $result[] = array( "status" => "Jawaban berhasil dikirim, refresh halaman dengan menarik scroll kebawah.");
        } else {
            $result[] = array( "status" => "Harap Ulangi Inputan, Jawaban gagal dikirim");
        }
    } 
    if($status == 1) {
         $result[] = array( "status" => "data tidak dapat di proses, silahkan refresh halaman dengan menarik scroll kebawah.");
    }

    echo json_encode($result);

?>
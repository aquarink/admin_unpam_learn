<?php
	
class Model {
	
	function mod_AddDosen()
	{
		global $DBH;
        $id_matkul  = $_POST['id_matkul'];
        $nik        = $_POST['nik'];
        $nama       = $_POST['nama'];
        $pass       = md5($_POST['password']);
        $gender     = $_POST['gender'];
        $agama      = $_POST['agama'];
        $no_tlpn    = $_POST['no_tlpn'];
        $email      = $_POST['email'];
        $alamat     = $_POST['alamat'];
        $tgl_lahir  = $_POST['tgl_lahir'];        

        $query = $DBH->query(" 
            insert into dosen(id_matakuliah, NIK, password, nama_dosen, gender, agama, no_tlpn, email, alamat, tgl_lahir)
            values('$id_matkul','$nik','$pass','$nama','$gender','$agama','$no_tlpn','$email','$alamat','$tgl_lahir')
        ");

        if($query) {
            $status = array(
                'info'  => 1
            );
        } else {
            $status = array(
                'info'  => 2
            );
        }
        return $status;
	}

    function mod_ListMahasiswa()
    {
        global $DBH;
        $query = $DBH->query("select * from mahasiswa");
        while ($row = $query->fetch()) {
            $result[] = array(
                'id_mahasiswa'  => $row['id_mahasiswa'],
                'NIM'           => $row['NIM'],
                'Nama_mahasiswa'=> $row['nama_mahasiswa'],
                'Gender'        => $row['gender'],
                'no_tlpn'       => $row['no_tlpn'],
                'email'         => $row['email'],
                'alamat'        => $row['alamat'],
                'tgl_lahir'     => $row['tgl_lahir']
            );
            
        }
        return $result;
    }

    function mod_ListMatakuliah() 
    {
        global $DBH;
        $query = $DBH->query("select * from matakuliah");
        while ($row = $query->fetch()) {
            $result[] = array(
                'id_matakuliah'     => $row['id_matakuliah'],
                'nama_matakuliah'   => $row['nama_matkul']
            );
            
        }
        return $result;
    }

    function mod_ListKrs()
    {

    }

    function mod_ListTutorial()
    {

    }

    function mod_ListKelas()
    {
        global $DBH;
        $query = $DBH->query("select * from kelas");
        while ($row = $query->fetch()) {
            $result[] = array(
                'id_kelas'     => $row['id_kelas'],
                'kode_kelas'   => $row['kode_kelas']
            );
            
        }
        return $result;
    }


}

?>
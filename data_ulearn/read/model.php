<?php
	
class Model {
	
	function mod_ListDosen() 
	{
		global $DBH;
        $query = $DBH->query("select * from dosen");
        while ($row = $query->fetch()) {
            $result[] = array(
                'id_dosen'      => $row['id_dosen'],
                'id_matkul'     => $row['id_matakuliah'],
                'NIK'           => $row['NIK'],
                'Nama_dosen'    => $row['nama_dosen'],
                'Gender'        => $row['gender'],
                'no_tlpn'       => $row['no_tlpn'],
                'email'         => $row['email'],
                'alamat'        => $row['alamat'],
                'tgl_lahir'     => $row['tgl_lahir']
            );
            
        }
        return $result;
	}

    function mod_Dosen($id) 
    {
        global $DBH;
        $query = $DBH->query("select * from dosen where id_dosen = '$id'");
        while ($row = $query->fetch()) {
            $result = array(
                'id_dosen'      => $row['id_dosen'],
                'id_matkul'     => $row['id_matakuliah'],
                'NIK'           => $row['NIK'],
                'Nama_dosen'    => $row['nama_dosen'],
                'Gender'        => $row['gender'],
                'no_tlpn'       => $row['no_tlpn'],
                'email'         => $row['email'],
                'alamat'        => $row['alamat'],
                'tgl_lahir'     => $row['tgl_lahir']
            );
            
        }
        return $result;
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

    function mod_Mahasiswa($id)
    {
        global $DBH;
        $query = $DBH->query("select * from mahasiswa where id_mahasiswa = '$id' ");
        while ($row = $query->fetch()) {
            $result = array(
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
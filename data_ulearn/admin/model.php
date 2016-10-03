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




}

?>
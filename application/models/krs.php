<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Krs extends CI_Model {

  public function get_list_krs()
  {
      $query = $this->db->query('SELECT * FROM krs_mahasiswa AS krs 
              JOIN mahasiswa AS siswa 
              ON krs.`id_mahasiswa` = siswa.`id_mahasiswa` 
              JOIN dosen 
              ON krs.`id_dosen` = dosen.`id_dosen`
              JOIN kelas
              ON krs.`id_kelas` = kelas.`id_kelas`
              JOIN matakuliah AS matkul
              ON krs.`id_matakuliah` = matkul.`id_matakuliah`');

      foreach ($query->result() as $row) {
        $result[] = array(
          'id_krs'          => $row->id_krs_mahasiswa,
          'id_siswa'        => $row->id_mahasiswa,
          'id_kelas'        => $row->id_kelas,
          'id_dosen'        => $row->id_dosen,
          'id_matakuliah'   => $row->id_matakuliah,
          'nama_matakuliah' => $row->nama_matkul,
          'nama_mahasiswa'  => $row->nama_mahasiswa,
          'nama_dosen'      => $row->nama_dosen,
          'NIM'             => $row->NIM,
          'kode_kelas'      => $row->kode_kelas,
          'nama_matkul'     => $row->nama_matkul
        );
      }

      return $result;
  }

  public function get_kelas_by($id)
  {
      $query = $this->db->query("select * from kelas where id_kelas = '$id'");

      foreach ($query->result() as $row) {
        $result = array(
          'id_kelas'   => $row->id_kelas,
          'kode_kelas' => $row->kode_kelas
        );
      }

      return $result;
  }

  public function insertKrs()
  { 
      $postdata = file_get_contents("php://input");
      $request = json_decode($postdata);
      $id_mahasiswa   = $request->id_mahasiswa;
      $id_matakuliah  = $request->id_matakuliah;

      $val = array(
        'id_mahasiswa'    => $request->id_mahasiswa,
        'id_kelas'        => $request->id_kelas,
        'id_dosen'        => $request->id_dosen,
        'id_matakuliah'   => $request->id_matakuliah
      );

      $query = $this->db->query("select * from krs_mahasiswa where id_matakuliah = '$id_matakuliah' and id_mahasiswa = '$id_mahasiswa' ");

      if($query->num_rows() < 1) {
          $insert = $this->db->insert('krs_mahasiswa', $val);
          $result = 1;
      } else {
          $result = 2;
      }
      
      return $result;
  } 

  public function updateKrs()
  {
      $postdata = file_get_contents("php://input");
      $request = json_decode($postdata);
      $id   = $request->id_krs;

      $val = array(
        'id_mahasiswa'    => $request->id_mahasiswa,
        'id_kelas'        => $request->id_kelas,
        'id_dosen'        => $request->id_dosen,
        'id_matakuliah'   => $request->id_matakuliah
      );

      $this->db->where('id_krs_mahasiswa', $id);
      $this->db->update('krs_mahasiswa', $val);
      $result = 1;

      return $result;

  }

  public function deleteKrs($id)
  {
    $delete = $this->db->query("delete from krs_mahasiswa where id_krs_mahasiswa = '$id'");

    if($delete) {
        $result = 1;
    } else {
        $result = 2;
    }

    return $result;
  }

}
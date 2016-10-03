<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matakuliah extends CI_Model {

  public function get_list_matakuliah()
  {
      $query = $this->db->query('select * from matakuliah join kelas on matakuliah.`id_kelas` = kelas.`id_kelas`');

      foreach ($query->result() as $row) {
        $result[] = array(
          'id_matakuliah'   => $row->id_matakuliah,
          'nama_matakuliah' => $row->nama_matkul,
          'id_kelas'        => $row->id_kelas,
          'kode_kelas'      => $row->kode_kelas
        );
      }

      return $result;
  }

  public function get_matakuliah_by($id)
  {
      $query = $this->db->query("select * from matakuliah where id_matakuliah = '$id'");

      foreach ($query->result() as $row) {
        $result = array(
          'id_matakuliah'   => $row->id_matakuliah,
          'nama_matakuliah' => $row->nama_matkul
        );
      }

      return $result;
  }

  public function insertMatakuliah()
  { 
      $postdata     = file_get_contents("php://input");
      $request      = json_decode($postdata);
      $nama_matkul  = $request->nama_matakuliah;

      $val = array(
        'id_kelas'    => $request->kode_kelas,
        'nama_matkul' => $nama_matkul
      );

      $query = $this->db->query("select * from matakuliah where nama_matkul = '$nama_matkul'");

      if($query->num_rows() < 1) {
          $insert = $this->db->insert('matakuliah', $val);
          $result = 1;
      } else {
          $result = 2;
      }
      
      return $result;
  } 

  public function updateMatakuliah()
  {
      $postdata = file_get_contents("php://input");
      $request  = json_decode($postdata);
      $id       = $request->id;

      $val = array(
        'id_kelas'      => $request->kode_kelas,
        'nama_matkul'   => $request->nama_matakuliah
      );

      $this->db->where('id_matakuliah', $id);
      $this->db->update('matakuliah', $val);
      $result = 1;

      return $result;

  }

  public function deleteMatakuliah($id)
  {
    $delete = $this->db->query("delete from matakuliah where id_matakuliah = '$id'");

    if($delete) {
        $result = 1;
    } else {
        $result = 2;
    }

    return $result;
  }

}
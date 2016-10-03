<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelas extends CI_Model {

  public function get_list_kelas()
  {
      $query = $this->db->query('select * from kelas');

      foreach ($query->result() as $row) {
        $result[] = array(
          'id_kelas'   => $row->id_kelas,
          'kode_kelas' => $row->kode_kelas
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

  public function insertKelas()
  { 
      $postdata = file_get_contents("php://input");
      $request = json_decode($postdata);
      $kode_kelas = $request->kode_kelas;

      $val = array(
        'kode_kelas'    => $request->kode_kelas
      );

      $query = $this->db->query("select * from kelas where kode_kelas = '$kode_kelas'");

      if($query->num_rows() < 1) {
          $insert = $this->db->insert('kelas', $val);
          $result = 1;
      } else {
          $result = 2;
      }
      
      return $result;
  } 

  public function updateKelas()
  {
      $postdata = file_get_contents("php://input");
      $request = json_decode($postdata);
      $id = $request->id_kelas;

      $val = array(
        'kode_kelas'    => $request->kode_kelas
      );

      $this->db->where('id_kelas', $id);
      $this->db->update('kelas', $val);
      $result = 1;

      return $result;

  }

  public function deleteKelas($id)
  {
    $delete = $this->db->query("delete from kelas where id_kelas = '$id'");

    if($delete) {
        $result = 1;
    } else {
        $result = 2;
    }

    return $result;
  }

}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_anggota extends CI_Model {

  public function get_list_anggota()
  {
      $query = $this->db->query('select * from tbl_anggota');

      foreach ($query->result() as $row) {
        $result[] = array(
          'id_anggota'  => $row->id_anggota,
          'nama'        => $row->nama
        );
      }

      return $result;
  }

  

}
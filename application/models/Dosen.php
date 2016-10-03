<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Model {

  public function get_list_dosen()
  {
      $query = $this->db->query('select * from dosen');

      foreach ($query->result() as $row) {
        $result[] = array(
          'id_dosen'      => $row->id_dosen,
          'id_matkul'     => $row->id_matakuliah,
          'NIK'           => $row->NIK,
          'Nama_dosen'    => $row->nama_dosen,
          'Gender'        => $row->gender,
          'no_tlpn'       => $row->no_tlpn,
          'email'         => $row->email,
          'alamat'        => $row->alamat,
          'tgl_lahir'     => $row->tgl_lahir,
          'agama'         => $row->agama
        );
      }

      return $result;
  }

  public function get_dosen_by($id)
  {
      $query = $this->db->query("select * from dosen where id_dosen = '$id'");

      foreach ($query->result() as $row) {
        $result = array(
          'id_dosen'      => $row->id_dosen,
          'id_matkul'     => $row->id_matakuliah,
          'NIK'           => $row->NIK,
          'Nama_dosen'    => $row->nama_dosen,
          'Gender'        => $row->gender,
          'no_tlpn'       => $row->no_tlpn,
          'email'         => $row->email,
          'alamat'        => $row->alamat,
          'tgl_lahir'     => $row->tgl_lahir,
          'agama'         => $row->agama
        );
      }

      return $result;
  }

  public function insertDosen()
  { 
      $postdata = file_get_contents("php://input");
      $request = json_decode($postdata);
      $nik = $request->nik;

      $val = array(
        'id_matakuliah' => $request->id_matkul,
        'NIK'           => $request->nik,
        'password'      => md5($request->password),
        'nama_dosen'    => $request->nama,
        'gender'        => $request->gender,
        'agama'         => $request->agama,
        'no_tlpn'       => $request->no_tlpn,
        'email'         => $request->email,
        'alamat'        => $request->alamat,
        'tgl_lahir'     => $request->tgl_lahir
      );

      $query = $this->db->query("select * from dosen where NIK = '$nik'");

      if($query->num_rows() < 1) {

          $insert = $this->db->insert('dosen', $val);
          $result = 1;

      } else {

          $result = 2;

      }
      
      return $result;
  } 

  public function updateDosen()
  {
      $postdata = file_get_contents("php://input");
      $request = json_decode($postdata);
      $nik = $request->nik;

      $val = array(
        'id_matakuliah' => $request->matkul,
        'NIK'           => $request->nik,
        'password'      => md5($request->password),
        'nama_dosen'    => $request->nama,
        'gender'        => $request->gender,
        'agama'         => $request->agama,
        'no_tlpn'       => $request->no_tlpn,
        'email'         => $request->email,
        'alamat'        => $request->alamat,
        'tgl_lahir'     => $request->tgl_lahir
      );

      $this->db->where('nik', $nik);
      $this->db->update('dosen', $val);
      $result = 1;

      return $result;

  }

  public function deleteDosen($id)
  {
    $delete = $this->db->query("delete from dosen where id_dosen = '$id'");

    if($delete) {
        $result = 1;
    } else {
        $result = 2;
    }

    return $result;
  }

}
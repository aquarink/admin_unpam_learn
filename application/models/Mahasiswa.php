<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Model {

  public function get_list_mahasiswa()
  {
      $query = $this->db->query('select * from mahasiswa');

      foreach ($query->result() as $row) {
        $result[] = array(
          'id_mahasiswa'  => $row->id_mahasiswa,
          'NIM'           => $row->NIM,
          'Nama_mahasiswa'=> $row->nama_mahasiswa,
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

  public function get_mahasiswa_by($id)
  {
      $query = $this->db->query("select * from mahasiswa where id_mahasiswa = '$id'");

      foreach ($query->result() as $row) {
        $result = array(
          'id_mahasiswa'  => $row->id_mahasiswa,
          'NIM'           => $row->NIM,
          'Nama_mahasiswa'=> $row->nama_mahasiswa,
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

  public function insertMahasiswa()
  { 
      $postdata = file_get_contents("php://input");
      $request = json_decode($postdata);
      $nim = $request->nim;

      $val = array(
        'NIM'           => $request->nim,
        'password'      => md5($request->password),
        'nama_mahasiswa'=> $request->nama,
        'gender'        => $request->gender,
        'agama'         => $request->agama,
        'no_tlpn'       => $request->no_tlpn,
        'email'         => $request->email,
        'alamat'        => $request->alamat,
        'tgl_lahir'     => $request->tgl_lahir
      );

      $query = $this->db->query("select * from mahasiswa where NIM = '$nim'");

      if($query->num_rows() < 1) {

          $insert = $this->db->insert('mahasiswa', $val);
          $result = 1;

      } else {

          $result = 2;

      }
      
      return $result;
  } 

  public function updateMahasiswa()
  {
      $postdata = file_get_contents("php://input");
      $request = json_decode($postdata);
      $nim = $request->nim;

      $val = array(
        'NIM'           => $request->nim,
        'password'      => md5($request->password),
        'nama_mahasiswa'=> $request->nama,
        'gender'        => $request->gender,
        'agama'         => $request->agama,
        'no_tlpn'       => $request->no_tlpn,
        'email'         => $request->email,
        'alamat'        => $request->alamat,
        'tgl_lahir'     => $request->tgl_lahir
      );

      $this->db->where('NIM', $nim);
      $this->db->update('mahasiswa', $val);
      $result = 1;

      return $result;

  }

  public function deleteMahasiswa($id)
  {
    $delete = $this->db->query("delete from mahasiswa where id_mahasiswa = '$id'");

    if($delete) {
        $result = 1;
    } else {
        $result = 2;
    }

    return $result;
  }

}
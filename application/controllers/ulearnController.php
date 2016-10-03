<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UlearnController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa');
    $this->load->model('dosen');
    $this->load->model('matakuliah');
    $this->load->model('kelas');
    $this->load->model('krs');
  }

  //////////////////////////////
  // mahasiswa

  public function getMahasiswa()
  {
    $response = $this->Mahasiswa->get_list_mahasiswa();

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function getMahasiswaBy($id)
  {
    $response = $this->Mahasiswa->get_mahasiswa_by($id);

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function insertMahasiswa()
  {
      $insert = $this->Mahasiswa->insertMahasiswa();

      $response = array(
      'info' => $insert);
      
      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

  public function updateMahasiswa()
  {
    $update = $this->Mahasiswa->updateMahasiswa();

    $response = array(
      'info' => $update);

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function deleteMahasiswa($npm)
  {
    $this->Mahasiswa->deleteMahasiswa($npm);

    $response = array(
      'Success' => true,
      'Info' => 'Data Berhasil di hapus');

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  // end mahasiswa
  //////////////////////////////

  //////////////////////////////
  // dosen

  public function getDosen()
  {
    $response = $this->dosen->get_list_dosen();

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function getDosenBy($id)
  {
    $response = $this->dosen->get_dosen_by($id);

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function insertDosen()
  {
      $insert = $this->dosen->insertDosen();

      $response = array(
      'info' => $insert);
      
      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

  public function updateDosen()
  {
      $update = $this->dosen->updateDosen();

      $response = array(
      'info' => $update);
      
      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

  public function deleteDosen($id)
  {
      $delete = $this->dosen->deleteDosen($id);

      $response = array(
      'info' => $delete);
      
      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

  // end dosen
  //////////////////////////////

  //////////////////////////////
  // matakuliah

  public function getMatakuliah()
  {
    $response = $this->matakuliah->get_list_matakuliah();

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function getMatakuliahBy($id)
  {
    $response = $this->matakuliah->get_matakuliah_by($id);

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function insertMatakuliah()
  {
      $insert = $this->matakuliah->insertMatakuliah();

      $response = array(
      'info' => $insert);
      
      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

  public function updateMatakuliah()
  {
      $update = $this->matakuliah->updateMatakuliah();

      $response = array(
      'info' => $update);
      
      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

  public function deleteMatakuliah($id)
  {
      $delete = $this->matakuliah->deleteMatakuliah($id);

      $response = array(
      'info' => $delete);
      
      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

  // end matakuliah
  //////////////////////////////

  //////////////////////////////
  // kelas

  public function getKelas()
  {
    $response = $this->kelas->get_list_kelas();

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function insertKelas()
  {
      $insert = $this->kelas->insertKelas();

      $response = array(
      'info' => $insert);
      
      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

  public function updateKelas()
  {
      $update = $this->kelas->updateKelas();

      $response = array(
      'info' => $update);
      
      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

  public function deleteKelas($id)
  {
      $delete = $this->kelas->deleteKelas($id);

      $response = array(
      'info' => $delete);
      
      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

  // end kelas
  //////////////////////////////

  //////////////////////////////
  // tutorial

  // end tutorial
  //////////////////////////////


  //////////////////////////////
  // krs mahasiswa

   public function getKrs()
  {
    $response = $this->krs->get_list_krs();

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function insertKrs()
  {
      $insert = $this->krs->insertKrs();

      $response = array(
      'info' => $insert);
      
      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

  public function updateKrs()
  {
    $update = $this->krs->updateKrs();

    $response = array(
      'info' => $update);

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function deleteKrs($id)
  {
      $delete = $this->krs->deleteKrs($id);

      $response = array(
      'info' => $delete);
      
      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }
  // end krs mahasiswa
  //////////////////////////////


  public function saveMahasiswa()
  {
      $data = (array)json_decode(file_get_contents('php://input'));
      $this->Mahasiswa->insertMahasiswa($data);

      $response = array(
        'Success' => true,
        'Info' => 'Data Tersimpan');

      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

}
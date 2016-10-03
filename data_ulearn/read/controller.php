<?php
	
class Controller {
	public $model;

	public function __construct()
	{
		$this->model = new Model();
	}

	function handles()
	{	
		include 'default.php'; // default page
	}

	function error()
	{
		include 'error.php';
	}

	function list_dosen()
	{
		$list = $this->model->mod_ListDosen();

		echo json_encode($list);
	}

	function dosen_id()
	{
		$id = $_GET['id'];
		$list = $this->model->mod_Dosen($id);

		echo json_encode($list);
	}

	function list_mahasiswa()
	{
		$list = $this->model->mod_ListMahasiswa();
		
		echo json_encode($list);
	}

	function mahasiswa_id()
	{
		$id = $_GET['id'];
		$list = $this->model->mod_Mahasiswa($id);
		
		echo json_encode($list);
	}

	function list_matakuliah()
	{
		$list = $this->model->mod_ListMatakuliah();
		
		echo json_encode($list);
	}


}

?>
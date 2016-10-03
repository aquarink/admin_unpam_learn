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

	function add_dosen()
	{
		$add = $this->model->mod_AddDosen();

		echo json_encode($add);
	}

	function add_mahasiswa()
	{
		$add = $this->model->mod_AddMahasiswa();
		
		echo json_encode($add);
	}

	function add_matakuliah()
	{
		$add = $this->model->mod_AddMatakuliah();
		
		echo json_encode($add);
	}


}

?>
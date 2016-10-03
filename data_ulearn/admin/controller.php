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

		// echo $list;
		// print_r($list);
		echo json_encode($list);
	}

}

?>
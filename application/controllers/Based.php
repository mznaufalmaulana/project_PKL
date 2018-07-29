<?php 

class Based extends CI_Controller {

	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('layout/blank.php');
	}
}

?>
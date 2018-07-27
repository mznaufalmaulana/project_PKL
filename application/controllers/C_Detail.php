<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Detail');
	}
	public function index()
	{
		$this->load->view('detail/content');
	}

}

/* End of file C_Detail.php */
/* Location: ./application/controllers/C_Detail.php */
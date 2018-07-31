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
	public function get_detail()
	{
		$id['id'] = $this->input->get('idDokter');
		$this->load->model('M_Detail');
		$data['data'] = $this->M_Detail->get_detail($id);
		$this->load->view('detail/content', $data);
	}

}

/* End of file C_Detail.php */
/* Location: ./application/controllers/C_Detail.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Antrian extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_antrian');
	}

	public function index()
	{
		$id = $this->session->userdata('intIDPartner');
		$dt['idUser'] = '1';
		$retVal['data_antrian'] = $this->m_antrian->get_antrian($dt);
		$this->load->view('antrian/content', $retVal);
	}

}

/* End of file C_Antrian.php */
/* Location: ./application/controllers/C_Antrian.php */
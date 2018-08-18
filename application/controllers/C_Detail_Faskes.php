<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Detail_Faskes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_detail');
	}

	public function index()
	{
		$dateSelection = date('Y-m-d');
		$date_input = $this->input->post("txtDate");

		$dt['intIDFaskes'] = $this->input->get('idFaskes');
		$dt['intDay'] = date('w', strtotime($dateSelection)) + 1;
		$dt['dtAntrian'] = $date_input ."00:00:00";

		$id['id'] = $this->input->get('idFaskes');
		$retVal['id'] = $this->input->get('idFaskes');
		$retVal['data'] = $this->m_detail->get_detail_faskes($id);
		$retVal['jadwal'] = $this->m_detail->get_detail_jadwal_faskes($dt);
		// $retVal['loket'] = $this->m_detail->get_data_loket($id);
		$this->load->view('detail/Detail_Faskes', $retVal);
	}

}

/* End of file C_Detail_Faskes.php */
/* Location: ./application/controllers/C_Detail_Faskes.php */
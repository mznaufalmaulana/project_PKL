<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class C_Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_doctor');
	}
	function index()
	{
		$dt = array(
				"txtKeyword" => "0",
				"intIDKota" => $this->input->post("kota"),
				"intIDSpesialisDokter" => $this->input->post("spesialis"),
				"intIDJenisKelamin" => $this->input->post("jk_group")
			);
		$retVal ['data_dokter'] = $this->m_doctor->show_doctor($dt);
		$retVal ['data_kota']= $this->m_doctor->getCategory_City();
		$retVal ['data_spesialis']= $this->m_doctor->getCategory_Spesialis();

		// if (is_null($retVal['data_dokter']['imgAvatar']))
		// {
		// 	$retVal['data_dokter']['imgAvatar'] = '<img src="echo base_url("/theme/img/user_default.png")"';
		// }
		$this->load->view('Dashboard/content', $retVal);
	}
	function viewDokter()
	{
		$dt = array(
				"txtKeyword" => "0",
				"intIDKota" => $this->input->post("kota"),
				"intIDSpesialisDokter" => $this->input->post("spesialis"),
				"intIDJenisKelamin" => $this->input->post("jk_group")
			);
		$data = $this->m_doctor->show_doctor($dt)->result();
		echo json_encode($data);
	}
}
 ?>
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
		// if (isset($_SESSION)) {
			$dt = array(
					"txtKeyword" => "0",
					"intIDKota" => $this->input->post("kota"),
					"intIDSpesialisDokter" => $this->input->post("spesialis"),
					"intIDJenisKelamin" => $this->input->post("jk_group")
				);
			$retVal ['data_dokter'] = $this->m_doctor->show_doctor($dt);
			$retVal ['data_kota']= $this->m_doctor->getCategory_City();
			$retVal ['data_spesialis']= $this->m_doctor->getCategory_Spesialis();
			// $retVal ['data_kota']= $this->getCategory_City();
			// $retVal ['data_spesialis']= $this->getCategory_Spesialis();
			$this->load->view('Dashboard/V_Dashboard', $retVal);
		// }
		// else {
		// }


		// echopre($retVal);die;
		// return $retVal;
	}

	function getCategory_City()
	{
		$city = array();
		$city = $this->m_doctor->getCategory_City();
		return $city;	
	}

	function getCategory_Spesialis()
	{
		$spesialis = $this->m_doctor->getCategory_Spesialis();
		return $spesialis;	
	}
}
 ?>
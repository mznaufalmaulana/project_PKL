<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class C_Dashboard extends CI_Controller
{
	
	function index()
	{
		$dt = array(
				"txtKeyword" => "0",
				"intIDKota" => $this->input->post("kota"),
				"intIDSpesialisDokter" => $this->input->post("spesialis"),
				"intIDJenisKelamin" => $this->input->post("jk_group")
			);
		$this->load->model('m_doctor');
		$retVal ['data_dokter'] = $this->m_doctor->show_doctor($dt);
		$retVal ['data_kota']= $this->getCategory_City();
		$retVal ['data_spesialis']= $this->getCategory_Spesialis();
		$this->load->view('Dashboard/V_Dashboard', $retVal);


		// echopre($retVal);die;
		// return $retVal;
	}

	function getCategory_City()
	{
		$this->load->model('m_doctor');
		// $city = $this->input->get('txtKota');
		$city = $this->m_doctor->getCategory_City();
		// echopre($city);die;
		// $this->load->view('Dashboard/V_Dashboard', $city);
		return $city;
		
	}

	function getCategory_Spesialis()
	{
		$this->load->model('m_doctor');
		$spesialis = $this->m_doctor->getCategory_Spesialis();
		return $spesialis;
		
	}
}
 ?>
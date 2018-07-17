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
				"intIDKota" => "0",
				"intIDSpesialisDokter" => "0",
				"intIDJenisKelamin" => "0"
			);
		$this->load->model('m_doctor');
		$retVal ['data_dokter'] = $this->m_doctor->show_doctor($dt);
		// $retVal ['data_kota']= $this->getCategory();
		$this->load->view('Dashboard/V_Dashboard', $retVal);


		// echopre($retVal);die;
		// return $retVal;
	}

	function getCategory()
	{
		$this->load->model('m_doctor');
		// $city = $this->input->get('txtKota');
		$city = $this->m_doctor->getCategory();
		// echopre($city);die;
		// $this->load->view('Dashboard/V_Dashboard', $city);
		return $city;
		
	}
}
 ?>
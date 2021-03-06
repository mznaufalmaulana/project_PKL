<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Detail extends MY_Model {

	function get_detail_dokter($id)
	{
		$sp_name = "User_DetailDokter";
 		$retParameter = $this->soap_library->set_parameter($sp_name , $id);
		$retVal = $this->retrieveData($retParameter , "CallSpExcecution");
		// echopre($retVal);die;
		return $retVal;
	}
	function get_detail_jadwal_dokter($dt)
	{
		$sp_name = "User_DokterGetJadwalPraktek";
 		$retParameter = $this->soap_library->set_parameter($sp_name , $dt);
		$retVal = $this->retrieveData($retParameter , "CallSpExcecution");
		// echopre($retVal);die;
		return $retVal;
	}
	function get_detail_faskes($id)
	{
		$sp_name = "User_DetailFaskes";
 		$retParameter = $this->soap_library->set_parameter($sp_name , $id);
		$retVal = $this->retrieveData($retParameter , "CallSpExcecution");
		// echopre($retVal);die;
		return $retVal;
	}
	function get_detail_jadwal_faskes($dt)
	{
		$sp_name = "User_FaskesGetJadwalPraktek";
 		$retParameter = $this->soap_library->set_parameter($sp_name , $dt);
		$retVal = $this->retrieveData($retParameter , "CallSpExcecution");
		// echopre($retVal);die;
		return $retVal;
	}
	function get_data_loket($dt)
	{
		$sp_name = "User_GetJenisLoketPelayanan";
 		$retParameter = $this->soap_library->set_parameter($sp_name , $dt);
		$retVal = $this->retrieveData($retParameter , "CallSpExcecution");
		// echopre($retVal);die;
		return $retVal;
	}
	function booking_dokter($dt)
	{
		$sp_name = "User_GenerateNoAntrianFromApp";
 		$retParameter = $this->soap_library->set_parameter($sp_name , $dt);
		$retVal = $this->retrieveData($retParameter , "CallSpExcecution");
		// echopre($retVal);die;
		return $retVal;
	}

}

/* End of file M_Detail.php */
/* Location: ./application/models/M_Detail.php */
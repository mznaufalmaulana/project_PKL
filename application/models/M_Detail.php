<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Detail extends MY_Model {

	function get_detail()
	{
		$sp_name = "User_DetailDokter";
 		$retParameter = $this->soap_library->set_parameter($sp_name , $dt);
		$retVal = $this->retrieveData($retParameter , "CallSpExcecution");
		// echopre($retVal);die;
		return $retVal;
	}

}

/* End of file M_Detail.php */
/* Location: ./application/models/M_Detail.php */
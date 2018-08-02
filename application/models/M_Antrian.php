<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Antrian extends MY_Model {

	function get_antrian($id)
	{
		$sp_name = "User_GetRiwayatAntrian";
 		$retParameter = $this->soap_library->set_parameter($sp_name , $id);
		$retVal = $this->retrieveData($retParameter , "CallSpExcecution");
		// echopre($retVal);die;
		return $retVal;
	}

}

/* End of file M_Antrian.php */
/* Location: ./application/models/M_Antrian.php */
<?php 
/**
 * 
 */
 class M_Doctor extends MY_Model
 {
 	
 	function show_doctor($dt)
 	{
 		$sp_name = "User_SearchDokter";
 		$retParameter = $this->soap_library->set_parameter($sp_name , $dt);
		$retVal = $this->retrieveData($retParameter , "CallSpExcecution");
		// echopre($retVal);die;
		return $retVal;
 	}
 } ?>
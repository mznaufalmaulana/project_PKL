<?php 
/**
* 
*/
class M_User extends MY_Model
{

	function get_data_user($uname, $pass)
	{
		$sp_name = "User_Login";
		$arrParams['txtUsername'] = $uname;
		$arrParams['txtPassword'] = $pass;
		// membuat parameter pada API
		$retParameter = $this->soap_library->set_parameter($sp_name , $arrParams);
		// memanggil API
        $retVal = $this->retrieveData($retParameter , "CallSpExcecution");
        // echopre($retVal);die;
        return $retVal;
	}
	function insert_user($arrPost)
	{
		$sp_name = "User_RegisterApp";
		$retParameter = $this->soap_library->set_parameter($sp_name , $arrPost);
		$retVal = $this->retrieveData($retParameter , "CallSpExcecution");
		// echopre($retVal);die;
		return $retVal;
	}
	function get_data_profil($id)
	{
		$sp_name = "User_getDataProfile";
		$retParameter = $this->soap_library->set_parameter($sp_name , $id);
		$retVal = $this->retrieveData($retParameter , "CallSpExcecution");
		// echopre($retVal);die;
		return $retVal;
	}
	function get_jamkes($id)
	{
		$sp_name = "User_getJamkes";
		$retParameter = $this->soap_library->set_parameter($sp_name , $id);
		$retVal = $this->retrieveData($retParameter , "CallSpExcecution");
		// echopre($retVal);die;
		return $retVal;
	}
	function insert_data_update($dt)
	{
		$sp_name = "User_UpdDataProfile";
		$retParameter = $this->soap_library->set_parameter($sp_name , $dt);
		$retVal = $this->retrieveData($retParameter , "CallSpExcecution");
		// echopre($retVal);die;
		return $retVal;
	}
}

 ?>
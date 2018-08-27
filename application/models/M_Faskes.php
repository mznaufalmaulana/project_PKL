<?php
/**
*
*/
class M_Faskes extends MY_Model
{
	function ambilData($sp_name,$arrParams)
	{
		$retParameter = $this->soap_library->set_parameter($sp_name , $arrParams);
    $retVal = $this->retrieveData($retParameter , "CallSpExcecution");
    return $retVal;
	}
	function get_filter_kota($idkota = 0,$txtkota = '')
	{
		$arrParams = array(
			"intIDKota" => $idkota,
			"txtKota" => $txtkota
		);
		$sp_name = "User_getKota";
		return $this->ambilData($sp_name,$arrParams);
	}
	function get_filter_klinik($idpel = 0,$txtpel = '',$txtsing = '')
	{
		$arrParams = array(
			"intIDJenisPelayanan" => $idpel,
			"txtJenisPelayanan" => $txtpel,
			"txtSingkat" => $txtsing
		);
		$sp_name = "User_getKlinik";
		return $this->ambilData($sp_name,$arrParams);
	}
	function get_data_faskes($data)
	{
    $sp_name = "User_SearchFaskes";
		return $this->ambilData($sp_name,$data);
	}
	function get_list_layanan($id)
	{
		$arrParams = array(
			"intIDPartner" => $id
		);
		$sp_name = "User_getListPelayananInPartner";
		return $this->ambilData($sp_name,$arrParams);
	}
	function get_list_jamkes($id)
	{
		$arrParams = array(
			"intIDPartner" => $id
		);
		$sp_name = "User_getListAvailableJamkesInPartner";
		return $this->ambilData($sp_name,$arrParams);
	}
	function get_filter_jamkes()
	{
		$sp_name = "User_getJamkes";
  	$arrParams = array();
		return $this->ambilData($sp_name,$arrParams);
	}
}
 ?>

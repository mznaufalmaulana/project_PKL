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
		$arrParams['intIDKota'] = $idkota;
		$arrParams['txtKota'] = $txtkota;
		$sp_name = "User_getKota";
		return $this->ambilData($sp_name,$arrParams);
	}
	function get_filter_klinik($idpel = 0,$txtpel = '',$txtsing = '')
	{
		$arrParams['intIDJenisPelayanan'] = $idpel;
		$arrParams['txtJenisPelayanan'] = $txtpel;
		$arrParams['txtSingkat'] = $txtsing;
		$sp_name = "User_getKlinik";
		return $this->ambilData($sp_name,$arrParams);
	}
	function get_data_faskes($keywords = '',$kota = 0,$klinik = 0,$jenis1 = 0,$jenis2 = 0,$jenis3 = 0,$jenis4 = 0,$jenis5 = 0,$jenis6 = 0,$jenis7 = 0,$jenis8 = 0,$jenis9 = 0,$jenis10 = 0)
	{
		$arrParams['txtKeywords'] = $keywords;
    $arrParams['intIDKota'] = $kota;
    $arrParams['intIDJenisPelayanan'] = $klinik;
    $arrParams['intIDJenisJamKes1'] = $jenis1;
		$arrParams['intIDJenisJamKes2'] = $jenis2;
		$arrParams['intIDJenisJamKes3'] = $jenis3;
		$arrParams['intIDJenisJamKes4'] = $jenis4;
		$arrParams['intIDJenisJamKes5'] = $jenis5;
		$arrParams['intIDJenisJamKes6'] = $jenis6;
		$arrParams['intIDJenisJamKes7'] = $jenis7;
		$arrParams['intIDJenisJamKes8'] = $jenis8;
		$arrParams['intIDJenisJamKes9'] = $jenis9;
		$arrParams['intIDJenisJamKes10'] = $jenis10;
    $sp_name = "User_SearchFaskes";
		return $this->ambilData($sp_name,$arrParams);
	}
	function get_list_layanan($id)
	{
		$arrParams['intIDPartner'] = $id;
		$sp_name = "User_getListPelayananInPartner";
		return $this->ambilData($sp_name,$arrParams);
	}
	function get_list_jamkes($id)
	{
		$arrParams['intIDPartner'] = $id;
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

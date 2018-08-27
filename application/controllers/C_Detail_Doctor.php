<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class C_Detail_Doctor extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_doctor');
	}
	function index()
	{
    date_default_timezone_set('Indonesia/Jakarta');
		$dt = array(
				"intIDDokter" => "0",
				"intDay" => "0",
				"dtAntrian" => date("YYYY-MM-DD"),
			);
    $retVal ['detail_dokter'] = $this->m_doctor->getDetail("1");
    $this->load->view('Detail/v_doctor', $retVal);
  }
}
?>

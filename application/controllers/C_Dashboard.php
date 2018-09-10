<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class C_Dashboard extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_doctor');
		$this->load->model('m_faskes');
	}
	function index()
	{
		$dt = array(
				"txtKeyword" => "0",
				"intIDKota" => $this->input->post("kota"),
				"intIDSpesialisDokter" => $this->input->post("spesialis"),
				"intIDJenisKelamin" => $this->input->post("jk_group")
			);
		$pilihjk = $this->input->post("jamkes");
		$chosen = array();
		for($i = 0; $i < 10; $i++) {
			if(empty($pilihjk[$i])) {
				$chosen[$i] = 0;
			} else {
				$chosen[$i] = $pilihjk[$i];
			}
		} $pilihjk = $chosen;
		$jenis1 = $pilihjk[0]; $jenis2 = $pilihjk[1]; $jenis3 = $pilihjk[2];
		$jenis4 = $pilihjk[3]; $jenis5 = $pilihjk[4]; $jenis6 = $pilihjk[5];
		$jenis7 = $pilihjk[6]; $jenis8 = $pilihjk[7]; $jenis9 = $pilihjk[8];
		$jenis10 = $pilihjk[9];
		$data = array(
			"txtKeywords" => "0",
			"intIDKota" => $this->input->post("faskota"),
			"intIDJenisPelayanan" => $this->input->post("fasklinik"),
			"intIDJenisJamKes1" => $jenis1,
			"intIDJenisJamKes2" => $jenis2,
			"intIDJenisJamKes3" => $jenis3,
			"intIDJenisJamKes4" => $jenis4,
			"intIDJenisJamKes5" => $jenis5,
			"intIDJenisJamKes6" => $jenis6,
			"intIDJenisJamKes7" => $jenis7,
			"intIDJenisJamKes8" => $jenis8,
			"intIDJenisJamKes9" => $jenis9,
			"intIDJenisJamKes10" => $jenis10
		);

		$retVal ['data_dokter'] = $this->m_doctor->show_doctor($dt);
		$retVal ['data_kota']= $this->m_doctor->getCategory_City();
		$retVal ['data_spesialis']= $this->m_doctor->getCategory_Spesialis();

		$retVal ['data_faskes'] = $this->m_faskes->get_data_faskes($data);
		$retVal ['faskes_kota'] = $this->m_faskes->get_filter_kota();
		$retVal ['faskes_klinik'] = $this->m_faskes->get_filter_klinik();
		$retVal ['faskes_jamkes'] = $this->m_faskes->get_filter_jamkes();
		$retVal ['list_layanan'] = array($this->m_faskes->get_list_layanan(1),$this->m_faskes->get_list_layanan(2),$this->m_faskes->get_list_layanan(3),$this->m_faskes->get_list_layanan(4));
		$retVal ['list_jamkes'] = array($this->m_faskes->get_list_jamkes(1),$this->m_faskes->get_list_jamkes(2),$this->m_faskes->get_list_jamkes(3),$this->m_faskes->get_list_jamkes(4));
		$this->load->view('dashboard/content', $retVal);
	}
	function filter_dokter()
	{
		$dt = array(
				"txtKeyword" => "0",
				"intIDKota" => $this->input->post("kota"),
				"intIDSpesialisDokter" => $this->input->post("spesialis"),
				"intIDJenisKelamin" => $this->input->post("jk_group")
			);
		$data = $this->m_doctor->show_doctor($dt);
		$output = '';
	}
}
 ?>

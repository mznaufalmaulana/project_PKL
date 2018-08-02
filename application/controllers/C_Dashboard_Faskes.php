<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class C_Dashboard_Faskes extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_faskes');
	}
	function index()
	{
    $keywords = "0";
    $kota = $this->input->post("faskota");
    $klinik = $this->input->post("fasklinik");
		$i = 0; $pilihjk = array();
		$pilihjk = $this->input->post("jamkes");
		$jenis1 = $pilihjk[0];
		$jenis2 = $pilihjk[1];
		$jenis3 = $pilihjk[2];
		$retVal ['data_faskes'] = $this->m_faskes->get_data_faskes($keywords,$kota,$klinik,$jenis1,$jenis2,$jenis3);
		$retVal ['faskes_kota'] = $this->m_faskes->get_filter_kota();
		$retVal ['faskes_klinik'] = $this->m_faskes->get_filter_klinik();
		$retVal ['faskes_jamkes'] = $this->m_faskes->get_filter_jamkes();
		$retVal ['list_layanan'] = array($this->m_faskes->get_list_layanan(1),$this->m_faskes->get_list_layanan(2),$this->m_faskes->get_list_layanan(3));
		$retVal ['list_jamkes'] = array($this->m_faskes->get_list_jamkes(1),$this->m_faskes->get_list_jamkes(2),$this->m_faskes->get_list_jamkes(3));
		$this->load->view('dashboard/v_dashboard_faskes', $retVal);
  }
}

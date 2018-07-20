<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class C_Dashboard_Faskes extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_faskes');
	}
	function index()
	{
    if (isset($_POST['submitfilter'])){
      $keywords = "";
      $kota = $this->input->post("faskota");
      $klinik = $this->input->post("fasklinik");
      $jenis = $this->input->post("jk");
    } else if (isset($_POST['submitsearch'])){
      $keywords = $this->input->post("search");
      $kota = "";
      $klinik = "";
      $jenis = "";
    } else {
      $keywords = "";
      $kota = "";
      $klinik = "";
      $jenis = "";
    }
    $retVal ['data_faskes'] = $this->m_faskes->get_data_faskes($keywords,$kota,$klinik,$jenis);
    $retVal ['faskes_kota'] = $this->m_faskes->get_filter_kota();
    $retVal ['faskes_klinik'] = $this->m_faskes->get_filter_klinik();
    $retVal ['list_layanan'] = array($this->m_faskes->get_list_layanan(1),$this->m_faskes->get_list_layanan(2),$this->m_faskes->get_list_layanan(3));
    $retVal ['list_jamkes'] = array($this->m_faskes->get_list_jamkes(1),$this->m_faskes->get_list_jamkes(2),$this->m_faskes->get_list_jamkes(3));
    $this->load->view('dashboard/v_dashboard_faskes', $retVal);
  }
}

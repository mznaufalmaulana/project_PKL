<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_detail');
	}

	public function index()
	{
		$dateSelection = date('Y-m-d');
		$date_input = $this->input->post("txtDate");

		$dt['intIDDokter'] = $this->input->get('idDokter');
		$dt['intDay'] = date('w', strtotime($dateSelection)) + 1;
		$dt['dtAntrian'] = $date_input ."00:00:00";

		$id['id'] = $this->input->get('idDokter');
		$retVal['data'] = $this->m_detail->get_detail($id);
		$retVal['jadwal'] = $this->m_detail->get_detail_jadwal($dt);
		$this->load->view('detail/content', $retVal);
	}

	public function get_data_selection()
	{
		if (isset($_POST['dateSelection'])) {
			$output = "";
			$dateSelection = date('Y-m-d');
			$date_input = $this->input->post("txtDate");

			$dt['intIDDokter'] = $this->input->get('idDokter');
			$dt['intDay'] = date('w', strtotime($dateSelection)) + 1;
			$dt['dtAntrian'] = $date_input ."00:00:00";

			$retVal = $this->m_detail->get_detail_jadwal($dt);
			$output .= '
				<table id="dataTable" class="table display responsive nowrap">
					<thead>
						<tr>
							<th class="wd-25p">Lokasi Praktek</th>
							<th class="wd-20p">Jenis Pelayanan</th>
							<th class="wd-15p">Jam Pelayanan</th>
							<th class="wd-25p">Antrian</th>
							<th class="wd-15p">Kuota</th>
							<th class="wd-10p"></th>
						</tr>
					</thead>
			';
			foreach ($retVal as $key => $value) {
				$output .= '
					<tbody>
						<tr>
							<td>'. $value['txtPartnerName']  .'</td>
							<td>'. $value['txtJenisPelayanan'] .' </td>
							<td>'. $value['dtJamMulai']. ' - ' .$value['dtJamSelesai'] .'</td>
							<td>'. $value['intJumlahAntrian'] .' </td>
							<td>'. $value['intKuota'] .' </td>
							<td> <a href=" echo base_url(\'c_detail\').\'?idPartner=\''.$value['intIDPartner'].' Booking </a></td>
						</tr>
					</tbody>
				';
			}
			$output .= '</table>';
			echo $output;
		}
	}

	public function get_data_jenis()
	{
		$dt['intIDPartner'] = $this->input->get('idPartner');
		$retVal['dataPelayanan'] = $this->m_detail->get_data_jenis($dt);
		$this->load->view('detail/content', $retVal);
	}

}

/* End of file C_Detail.php */
/* Location: ./application/controllers/C_Detail.php */
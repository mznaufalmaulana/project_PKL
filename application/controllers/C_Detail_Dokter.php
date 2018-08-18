<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Detail_Dokter extends MY_Controller {

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
		$retVal['id'] = $this->input->get('idDokter');
		$retVal['data'] = $this->m_detail->get_detail_dokter($id);
		$retVal['jadwal'] = $this->m_detail->get_detail_jadwal_dokter($dt);
		// $retVal['loket'] = $this->m_detail->get_data_loket($id);
		$this->load->view('detail/Detail_Dokter', $retVal);
	}

	public function get_data_selection()
	{
		if (isset($_POST['dateSelection'])) {
			$output = "";
			$date_input = $this->input->post("dateSelection");

			$dt['intIDDokter'] = $this->input->post("idDokter");
			$dt['intDay'] = date('w', strtotime($date_input)) + 1;
			$dt['dtAntrian'] = $date_input ." 00:00:00";
			// echopre($dt['intDay']);die;


			$retVal = $this->m_detail->get_detail_jadwal_dokter($dt);
			$output .= '
				<table id="dataTable" class="table display responsive nowrap">
					<thead>
						<tr>
							<th class="wd-25p">Lokasi Praktek</th>
							<th class="wd-20p">Jenis Pelayanan</th>
							<th class="wd-25p">Jam Pelayanan</th>
							<th class="wd-15p">Antrian</th>
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
							<td> <a href="" data-toggle="modal" data-target="#pilihLoket" data-role="booking" data-id="'. $value['intIDPartner'] .'"> Booking </a></td>
						</tr>
					</tbody>
				';
			}
			$output .= '</table>';
			echo $output;
			// return $output;
		}
	}

	public function get_data_loket()
	{
		if (isset($_POST['idPartner'])) {
			$output = "";
			$id['intIDPartner'] = $this->input->post("idPartner");

			$retVal = $this->m_detail->get_data_loket($id);

			$output .= '<h4 class="lh-3 mg-b-20">Silahkan Pilih Loket yang Akan Dituju</h4>';
			foreach ($retVal as $key => $value) {
				$output .= '
					<a id="dataInput" href="" type="button" class="btn btn-info pd-x-25" data-toggle="modal" data-target="#inputBerhasil" data-role="booking" data-dismiss="modal">'. $value['txtLoket'] .'</a>
				';
			}
			echo $output;
		}
	}

	public function booking_dokter()
	{
		// $dt['intIDPartner'] = $this->input->get('idPartner');
		// $dt['intIDJenisPelayanan'] = $this->input->get('idPartner');
		// $dt['intIDUser'] = $this->input->get('idPartner');
		// $dt['intIDLoket'] = $this->input->get('idPartner');
		// $dt['intIDJadwalPraktek'] = $this->input->get('idPartner');
		// $dt['dtAntrian'] = $this->input->get('idPartner');
		// $retVal['noAntrian'] = $this->m_detail->booking_dokter($dt);
		// $redirect_url = base_url()."c_antrian";
		// redirect($redirect_url);
	}

}

/* End of file C_Detail.php */
/* Location: ./application/controllers/C_Detail.php */
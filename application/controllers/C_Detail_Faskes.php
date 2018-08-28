<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Detail_Faskes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_detail');
	}

	public function index()
	{
		$dateSelection = date('Y-m-d');
		$date_input = $this->input->post("txtDate");
		$date = new DateTime($dateSelection);
		$this->result = $date->format('Y-m-d H:i:s');

		$dt['intIDFaskes'] = $this->input->get('idFaskes');
		$dt['intDay'] = date('w', strtotime($dateSelection)) + 1;
		$dt['dtAntrian'] = $date_input ."00:00:00";

		$id['id'] = $this->input->get('idFaskes');
		$retVal['id'] = $this->input->get('idFaskes');
		$retVal['data'] = $this->m_detail->get_detail_faskes($id);
		$retVal['jadwal'] = $this->m_detail->get_detail_jadwal_faskes($dt);
		$retVal['tanggal'] = array('date' => $this->result );

		$this->load->view('detail/Detail_Faskes', $retVal);
	}

	public function get_data_selection()
	{
		if (isset($_POST['dateSelection'])) {
			$output = "";
			$date_input = $this->input->post("dateSelection");
			$date = new DateTime($date_input);
			$this->result = $date->format('Y-m-d H:i:s');

			$dt['intIDFaskes'] = $this->input->post("idFaskes");
			$dt['intDay'] = date('w', strtotime($date_input)) + 1;
			$dt['dtAntrian'] = $date_input ." 00:00:00";
			// echopre($dt['intDay']);die;


			$retVal = $this->m_detail->get_detail_jadwal_faskes($dt);

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
						<tr id="'. $value['intIDPegawai'] .'">
							<td data-target="idPartner" hidden>'. $value['intIDPegawai'] .'</td>
							<td data-target="idJenisPelayanan" hidden>'. $value['intIDJenisPelayanan'] .'</td>
							<td data-target="idJadwalPraktek" hidden>'. $value['intIDJadwalPraktek'] .'</td>

							<td>'. $value['txtNamaPegawai']  .'</td>
							<td>'. $value['txtJenisPelayanan'] .' </td>
							<td>'. $value['dtJamMulai']. ' - ' .$value['dtJamSelesai'] .'</td>
							<td>'. $value['intJumlahAntrian'] .' </td>
							<td>'. $value['intKuota'] .' </td>
							<td> <a href="" data-toggle="modal" data-target="#pilihLoket" data-role="booking" data-id="'. $value['intIDPegawai'] .'"> Booking </a></td>
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

			// $output .= '<h4 class="lh-3 mg-b-20">Silahkan Pilih Loket yang Akan Dituju</h4>';
			foreach ($retVal as $key => $value) {
				$output .= '
					<a id="dataInput" href="" type="button" class="btn btn-info pd-x-25" data-toggle="modal" data-target="#inputBerhasil" data-role="pesanSkr" data-id="'. $value['intIDLoket'] .'" data-dismiss="modal">'. $value['txtLoket'] .'</a>
				';
			}
			echo $output;
		}
	}

	public function booking_faskes()
	{

		$dt['intIDPartner'] = $this->input->post("idPartner");
		$dt['intIDJenisPelayanan'] = $this->input->post("idJenisPelayanan");
		$dt['intIDUser'] = $this->session->userdata('intIDPartner');
		$dt['intIDLoket'] = $this->input->post("idLoket");
		$dt['intIDJadwalPraktek'] = $this->input->post("idJadwalPraktek");
		
		$dt['dtAntrian'] = $this->input->post("dtAntrian");
		
		// $dt['dtAntrian'] = $this->result;
		// echopre($dt);die;

		$output ="";
		if (isset($dt['intIDUser'])) {
			$retVal = $this->m_detail->booking_dokter($dt);
			foreach ($retVal as $key => $value) {
				$output .= '
					<h4 class="lh-3 mg-b-20">Berhasil</h4>
				';
				$output .= '
					<p>Selamat Nomor Antrian Anda <b>'. $value['txtNoAntrianLoket'] .'</b> dengan Nomor Antrian Poli <b>'. $value['txtNoAntrianPoli'] .'</b> ada <b>'. $value['txtJenisPelayanan'] .'</b></p>
				';
			}

		} else {
			$output .= '
					<h4 class="lh-3 mg-b-20">Maaf</h4>
				';
			$output .= '
					Permintaan Anda Tidak Dapat Diproses<br/>
					Silahkan Lakukan Login Terlebih Dahulu.
				';
		}

		$output .= '
			<div class="modal-footer">
				<a href="'. $alamatUrl .'" type="button" class="btn btn-primary pd-x-20">OK</a>
			</div>
		';

		echo $output;
	}

}

/* End of file C_Detail_Faskes.php */
/* Location: ./application/controllers/C_Detail_Faskes.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}
	public function index()
	{
		$dt['intIDUser'] = $this->input->get('idUser');
		$retVal['dataProfil'] = $this->m_user->get_data_profil($dt);
		$retVal['dataJamkes'] = $this->m_user->get_jamkes($dt);
		$this->load->view('profil/profil', $retVal);
	}
	public function editProfil()
	{
		$dt['intIDUser'] = $this->input->get('idUser');
		$retVal['dataProfil'] = $this->m_user->get_data_profil($dt);
		$retVal['dataJamkes'] = $this->m_user->get_jamkes($dt);
		$this->load->view('profil/edit_profil', $retVal);
	}
	public function insertData()
	{
		$image;
		$check;
		$data;
		if (isset($_POST['submit'])) {
			# code...
			$dt['intIDUser'] = $this->input->post("idUser");
			$dt['txtNamaUser'] = $this->input->post("username");
			$dt['txtNoKTP'] = $this->input->post("noKTP");
			$dt['txtTempatLahir'] = $this->input->post("tmpLahir");
			$dt['dtTanggalLahir'] = $this->input->post("tglLahir");
			$dt['txtAlamat'] = $this->input->post("alamat");
			$dt['txtPhone'] = $this->input->post("noTelp");
			$dt['intIDJaminanKesehatan'] = $this->input->post("jenisJamkes");
			$dt['txtNoJaminanKesehatan'] = $this->input->post("noJaminanKesehatan");


			// $data = file_get_contents($_FILES["fotoProfil"]["tmp_name"]);
			$data = $_FILES['fotoProfil']['name'];

			if ($data != '') {
				$check = getimagesize($_FILES['fotoProfil']['tmp_name']);
				$image = base64_encode(file_get_contents($_FILES["fotoProfil"]["tmp_name"]));
				$image = 'data:'.$check["mime"].';base64,'.$image;
				$dt['txtAvatar'] = $image;
			} else {
				$dt['txtAvatar'] = $this->input->post("avatar");
				// echopre($dt['txtAvatar']);die;
			}

		}
		// echopre($data);die;
		$retVal['dataProfil'] = $this->m_user->insert_data_update($dt);
		$idUser = $this->input->post("idUser");
		$redirect_url = base_url()."c_profil?idUser=".$idUser;
		redirect($redirect_url,'refresh');
	}

}

/* End of file C_Profil.php */
/* Location: ./application/controllers/C_Profil.php */
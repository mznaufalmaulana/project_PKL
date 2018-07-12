<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function index()
	{
		$uname = $this->security->xss_clean($this->input->post('uname'));
		$pass = $this->security->xss_clean($this->input->post('pass'));
		$this->load->model('m_user');
		$retVal = $this->m_user->get_data_user($uname, $pass);
		// echopre($retVal);die;

		if(count($retVal) < 1){
			$retVal['status'] = false;
			$retVal['message'] = "Internet Gagal";
			return $retVal;
			exit();
		}

		$retuser = $retVal[0];
		if($retuser['bitSuccess']==0){
			$retVal['status'] = false;
			$retVal['message'] = $retuser['txtInfo'];
			return $retVal;
			exit();
		}

		else {
			$arrSession = array(
							"intIDPartner" => $retuser['intIDPartner'],
							"user_validated" => true,
							"user_username" =>  $retuser['txtUsername'],
							"user_language" => "ID", /// Default To Indonesian,  Or Gabon Maybe
							// "pelayanan" => $pelayanan,
							// "loket" => $loket,
							);
			$redirect_url = base_url()."c_dashboard/";
			///echopre($redirect_url);die;
			$this->session->set_userdata($arrSession);
			redirect($redirect_url);
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect("/");
	}
}

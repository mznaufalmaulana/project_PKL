<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends MY_Controller {

	public function index(){

		if (isset($_POST['submit'])) {
			# code...
			$uname = $this->security->xss_clean($this->input->post('uname'));
			$pass = $this->security->xss_clean($this->input->post('pass'));
			$this->load->model('m_user');
			$retVal = $this->m_user->get_data_user($uname, $pass);

			if(count($retVal) < 1){
				$retVal['status'] = false;
				$retVal['message'] = "Internet Gagal";
				echopre($retVal);die;
				return $retVal;
				exit();
			}

			$retuser = $retVal[0];
			if($retuser['bitSuccess']==0){
				$retVal['status'] = false;
				$retVal['message'] = $retuser['txtInfo'];
				$this->load->view('Login/Content', $retVal);

			}

			else {
				$arrSession = array(
								"intIDPartner" => $retuser['intIDPartner'],
								"user_validated" => true,
								"user_username" =>  $retuser['txtUsername'],
								"user_language" => "ID",
								);
				// echopre($redirect_url);die;
				$user_data = $this->session->set_userdata($arrSession);
				// $this->load->view('c_dashboard');
				$redirect_url = base_url()."c_dashboard";
				redirect($redirect_url);
			}
		}
		else
		{
			$retVal['status'] = true;
			$this->load->view('login/content', $retVal);
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		$redirect_url = base_url()."c_dashboard";
		redirect($redirect_url);
	}
}

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class C_Register extends CI_Controller
{
	var $condition = false;

	function index()
	{
		$this->load->view('register/v_register');
	}
	function insert_data()
	{
		// if ($condition == true) {
	
		// }
		// else {

		// }
		$arrPost['txtFullName'] = $this->input->post("fname");
		$arrPost['txtEmail'] = $this->input->post("email");
		$arrPost['txtUsername'] = $this->input->post("uname");
		$arrPost['txtPassword'] = $this->input->post("pass");
		$this->load->model('m_user');
		$retVal = $this->m_user->insert_user($arrPost);
		// echopre($retVal);die;
		redirect(base_url());
	}
	function cek_password()
	{
		$pass1 = $this->input->post("pass");
		$pass2 = $this->input->post("conPass");
		if ($pass1 == $pass2) {
			$condition = true;
		}
		return $condition;
	}
}
 ?>
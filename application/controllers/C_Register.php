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
		$res = "";
        if(isset($_POST['submit'])){
            $res = $this->insert_data();
        }

        $dt["alert"] = $res;
		$this->load->view("register/content" , $dt);
	}
	function insert_data()
	{
		$arrPost['txtFullName'] = $this->input->post("namaDepan").' '.$this->input->post("namaBelakang");
		$arrPost['txtEmail'] = $this->input->post("email");
		$arrPost['txtUsername'] = $this->input->post("uname");
		$arrPost['txtPassword'] = $this->input->post("pass");
		$this->load->model('m_user');
		$retVal = $this->m_user->insert_user($arrPost);
		echopre($retVal);die;

		$retuser = $retVal[0];
		if ($retuser['bitSuccess']==0) {
			$retVal['status'] = false;
			$retVal['message'] = $retuser['txtInfo'];
			return $retVal;
			exit();
		}
		// redirect(base_url());
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
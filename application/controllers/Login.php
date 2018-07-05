<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$uname = $this->security->xss_clean($this->input->post('uname'));
		$pass = $this->security->xss_clean($this->input->post('pass'));
		$this->load->model('model_user');
		$retVal = $this->model_user->get_data_user($uname, $pass);
		echopre($retVal);die;
		// $this->view_xml();
	}

	public function view_xml(){
		header("Content-type: text/xml");
		$xml_file = file_get_contents($_SERVER['HTTP_HOST']);
		echo $xml_file;
	}
}

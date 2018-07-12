<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class C_Dashboard extends CI_Controller
{
	
	function index()
	{
		$this->load->view("Dashboard/V_Dashboard");
	}
}
 ?>
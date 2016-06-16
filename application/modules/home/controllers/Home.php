<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data = array('title' =>'Home | WeMusic - Music Band Event' , );
		$this->load->view('index',$data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/modules/home/controllers/Home.php */ ?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends Is_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
}

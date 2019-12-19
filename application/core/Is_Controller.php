<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Is_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function cek_auth(){
        if($this->session->userdata('status') != 'login'){
            redirect(404);
        }
    }
}
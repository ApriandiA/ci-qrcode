<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends Is_Controller {

    function __construct()
	{
		parent::__construct();
        $this->cek_auth();
	}
	public function index()
	{
        $data['users'] = $this->Base_m->get_data('users')->result();
		$this->load->view('dashboard',$data);
    }
    
    public function tambah()
    {
        $this->load->view('user/tambah');
    }

    public function insert(){
        $name     = $this->input->post('name');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role     = $this->input->post('role');

        $data = array(
            'name' => $name,
            'username' => $username,
            'password' => password_hash($password,PASSWORD_DEFAULT),
            'role'     => $role,
            'key'      => password_hash($username . $password, PASSWORD_DEFAULT),
        );

        $this->Base_m->insertorupdate('users',array('username' => $username),$data);
        redirect('user');
        
    }
}

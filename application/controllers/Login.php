<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Is_Controller {

	var $tabel	=	'user';
	function __construct()
	{
		parent::__construct();
		$this->load->model('Base_m');

	}
	public function index()
	{
		if($this->session->userdata("status") == 'login'){
			$this->load->view('dashboard');
		}

		$this->load->view('login');
	}

	public function cek_login() {
		// $data = array(
		// 	'username' => $this->input->post('username', TRUE),
		// 	'password' => md5($this->input->post('password', TRUE)),
        // );
        // $hasil = $this->Base_m->get_data($this->tabel, $data);

        if($this->input->post('btnLogin')){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $key      = $this->input->post('key');
            $data     = array(
                'username' => $username,
                'password' => $password,
            );

            $usual   = $this->Base_m->get_data('users',array('username' => $username));
            $barcode = $this->Base_m->get_data('users',array('key'      => $key));

            $usualLogin = $usual->num_rows();
            $barcodeLogin = $barcode->num_rows();


            
            if ($usualLogin > 0 || $barcodeLogin > 0) { 
                if ( $usualLogin > 0 ) {
                    $user             = $usual->row_array();
                }
                if ( $barcodeLogin > 0 ) {
                    $user             = $barcode->row_array();
                }   
                    
                if ( password_verify($password, $user['password']) || $key == $user['key'] ) {
                    $sess_data['status'] = 'login';
                    $sess_data['id_user'] = $user['id_user'];
                    $sess_data['username'] = $user['username'];
                    $sess_data['role'] = $user['role'];
                    $sess_data['key'] = $user['key'];
                    $this->session->set_userdata($sess_data);
                    redirect('user');
                }  else {
                    echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
                }   
            }
            else {
                echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
            }
        }else{

        }		
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('login ','refresh');
	}
}

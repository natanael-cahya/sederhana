<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Proses_login extends CI_Controller
{
	    public function __construct() {
        parent::__construct();    
    }

	function index(){
		$this->load->view('login_page');
	}
	function cek(){
		$a = $this->input->post('user');
		$b = $this->input->post('pw');

		if($this->input->post('login')){
			if($a == 'a' && $b == 'b'){
				$this->session->set_userdata('level', 'admin');
				redirect('/welcome');
			}else{
				redirect('proses_login');
			}
		}
	}
}
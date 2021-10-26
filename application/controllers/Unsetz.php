<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Unsetz extends CI_Controller
{
    public function __construct() {
        parent::__construct();    
    }

    function un() {
    	$a = array('level','site_lang');
    	$this->session->unset_userdata($a);
    	
    	redirect(base_url());
    }
}
       
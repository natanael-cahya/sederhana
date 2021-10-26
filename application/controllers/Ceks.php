<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ceks extends CI_Controller
{
    public function __construct() {
        parent::__construct();    
    }

    function cekk($level = "") {
       
        $level = ($level != "") ? $level : "admin";
       // var_dump($level);die();
        $this->session->set_userdata('level', $level);
       
        redirect($_SERVER['HTTP_REFERER']);
       
    }
}
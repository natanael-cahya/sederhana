<?php
class CekSesi
{
     protected $CI;
    public function __construct()
    {
            $this->CI =& get_instance(); 
    }
    function checker() {

        $ar = $this->CI->config->item('ex');
        for($i=0;$i<count($ar);$i++){

            if($this->CI->router->class == $ar[$i]){
                return;
            }
            
        }
        
            if(!$this->CI->session->userdata('level'))
            {
              redirect('proses_login');
            }
       }
}


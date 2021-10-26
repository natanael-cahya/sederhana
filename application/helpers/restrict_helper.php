<?php 

	function is_logged_in()
	{
		$ci = get_instance();
		if(!$ci->session->userdata('level'))
		{
			redirect('proses_login');
		}
	}
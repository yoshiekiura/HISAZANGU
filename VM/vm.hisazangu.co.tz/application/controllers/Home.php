<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

                $this->force_ssl();

	}

	
	public function index()
	{
            $pagedata['title'] = 'SoftwareTZ';
            $this->load->view('header',$pagedata);
            $this->load->view('home');
            $this->load->view('footer');
	}
	
    
    public function error404() {
        $this->load->view('auth/error404');
    }
}

/* End of file Examples.php */
/* Location: /community_auth/controllers/Examples.php */

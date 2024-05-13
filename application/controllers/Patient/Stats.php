<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Stats extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

        if(!$this->session->userdata('user'))
        {
            redirect(base_url());
        }
    }

    public function index()
	{
		$this->load->view('STYLES/header');;
        $this->load->view('Admin/SidebarPatient');
		$this->load->view('Admin/Body/Appointments');
        $this->load->view('Admin/FooterAdmin');
	} 

    
}
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
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
        $this->load->view('Patient/SidebarPatient');
		$this->load->view('Patient/Body/Appointments');
       
	} 
}
?>
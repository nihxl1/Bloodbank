<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Appointments extends CI_Controller
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
        $this->load->view('Donor/SidebarDonor');
		$this->load->view('Donor/Body/Appointments');
        
	} 

    function addAppointment(){
        $this->load->view('STYLES/header');;
        $this->load->view('Donor/SidebarAdmin');
		$this->load->view('Donor/Body/AddAppointment');
        $this->load->view('Donor/FooterAdmin');
    }

}
?>
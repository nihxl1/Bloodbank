<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Quiz extends CI_Controller
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

    function hola(){
        echo base_url();
    }

    public function index()
	{
		$this->load->view('STYLES/header');;
        $this->load->view('Admin/SidebarPatient');
		$this->load->view('Admin/Body/Appointments');
        $this->load->view('Admin/FooterAdmin');
	} 

    function addAppointment(){
        $this->load->view('STYLES/header');;
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/AddAppointment');
        $this->load->view('Admin/FooterAdmin');
    }

}
?>
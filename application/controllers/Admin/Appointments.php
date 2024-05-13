<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Appointments extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session'); 
        $this->load->model('Admin/AppointmentsModel');

        if(!$this->session->userdata('user'))
        {
            redirect(base_url());
        }
    }
    
    public function index()
	{
        $data['appointments'] = $this->AppointmentsModel->get_all_appointments();
		$this->load->view('STYLES/header');;
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/Appointments',$data);
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
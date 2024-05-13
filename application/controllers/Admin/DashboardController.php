<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

        if (!$this->session->userdata('user')) { 
            redirect(base_url());
        }

        $this->load->model('Admin/DashboardModel'); 
    }
    

    public function index()
    {
        $data['blood_data'] = $this->DashboardModel->get_blood_data(); 
        $data['donation_data'] = $this->DashboardModel->get_donation_data(); 
        $data['transfusion_data'] = $this->DashboardModel->get_transfusion_data(); 

        $this->load->view('STYLES/header');
        //$this->load->view('Admin/NavBar');
        $this->load->view('Admin/SidebarAdmin');
        $this->load->view('Admin/Body/Dashboard', $data); 
        $this->load->view('Admin/FooterAdmin');
    }
}
?>

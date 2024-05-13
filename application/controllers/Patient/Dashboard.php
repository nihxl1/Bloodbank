<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Patient/DashboardModel');

        if(!$this->session->userdata('user'))
        {
            redirect(base_url());
        }
    }

    public function index()
	{
        $user_id = $this->session->userdata('user')['user_id'];
        $data['user_name'] = $this->DashboardModel->getUserName($user_id);
		$this->load->view('STYLES/header');;
        $this->load->view('Patient/SidebarPatient',$data);
		$this->load->view('Patient/Body/Dashboard');
       
	} 
}
?>
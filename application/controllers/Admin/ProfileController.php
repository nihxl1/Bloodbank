<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/ProfileModel'); 
        if(!$this->session->userdata('user'))
        {
            redirect(base_url());
        }
    }
 

    public function index()
	{
        $user_id = $this->session->userdata('user')['user_id'];

       
        $data['user'] = $this->ProfileModel->getUserData($user_id); 

		$this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
        $this->load->view('Admin/Body/Profile', $data);
    }
}
?>

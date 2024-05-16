<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('LogInModel');
        $this->load->library('form_validation');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        if ($this->form_validation->run() == FALSE) {
            redirect(base_url().'welcome/index');
        } else {
            $result = $this->LogInModel->log($email, md5($password));

            if ($result) {
                
                $user_data = $this->LogInModel->getUserData($email);

                $this->session->set_userdata('user', array(
                    'user_id' => $user_data['user_id'],
                    'email' => $email,
                    'role_id' => $user_data['role_id']
                ));

                if ($user_data['role_id'] == '1') {
                    redirect(base_url().'Admin/DashboardController');
                } elseif ($user_data['role_id'] == '2') {
                    redirect(base_url().'Donor/Dashboard');
                } elseif ($user_data['role_id'] == '3') {
                    redirect(base_url().'Patient/Dashboard');
                } else {
                    redirect('Welcome');
                }
            } else {
                redirect('Welcome');
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}

?>

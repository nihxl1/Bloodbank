<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Donor/RequestModel');

        if(!$this->session->userdata('user'))
        {
            redirect(base_url());
        }
    }

    public function index()
    {
        $user_id = $this->session->userdata('user')['user_id'];

        $donor_id = $this->RequestModel->getDonorIdFromUserId($user_id);

        if ($donor_id) {
            $data['requests'] = $this->RequestModel->getRequests($donor_id);
        } else {
            $data['requests'] = array();
        }

        $this->load->view('STYLES/header');
        $this->load->view('Donor/SidebarDonor');
        $this->load->view('Donor/Body/Requests', $data);
    }


    public function addRequest()
{
    if ($this->input->post()) {
        $user_id = $this->session->userdata('user')['user_id'];
        $donor_id = $this->RequestModel->getDonorIdFromUserId($user_id);

        $request_date = $this->input->post('request_date');
        $status = 'En Espera';

        $data = array(
            'donor_id' => $donor_id,
            'request_date' => $request_date,
            'status' => $status
        );

        $this->RequestModel->addRequest($data);

        $this->session->set_flashdata('success', 'Registro correcto');
        echo "<script>alert('Registro correcto.');</script>";

        $user_id = $this->session->userdata('user')['user_id'];

        $donor_id = $this->RequestModel->getDonorIdFromUserId($user_id);

        if ($donor_id) {
            $data['requests'] = $this->RequestModel->getRequests($donor_id);
        } else {
            $data['requests'] = array();
        }

        $this->load->view('STYLES/header');
        $this->load->view('Donor/SidebarDonor');
        $this->load->view('Donor/Body/Requests', $data);




    } else {

        $this->session->set_flashdata('success', 'Registro incorrecto');
        echo "<script>alert('Registro incorrecto.');</script>";

        $user_id = $this->session->userdata('user')['user_id'];

        $donor_id = $this->RequestModel->getDonorIdFromUserId($user_id);

        if ($donor_id) {
            $data['requests'] = $this->RequestModel->getRequests($donor_id);
        } else {
            $data['requests'] = array();
        }

        $this->load->view('STYLES/header');
        $this->load->view('Donor/SidebarDonor');
        $this->load->view('Donor/Body/Requests', $data);
    }
}

    
}
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transfutions extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Patient/TransfutionHistoryModel');

        if (!$this->session->userdata('user')) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $user_id = $this->session->userdata('user')['user_id'];

        $patient_id = $this->TransfutionHistoryModel->getPatientIdFromUserId($user_id);

        if ($patient_id) {
            $data['transfusions'] = $this->TransfutionHistoryModel->getPatientTransfutions($patient_id);
        } else {
            $data['transfusions'] = array();
        }

        try {
            $this->load->view('STYLES/header');
            $this->load->view('Patient/SidebarPatient', $data);
            $this->load->view('Patient/Body/Transfutions');
        } catch (Exception $e) {
            echo 'Error loading views: ' . $e->getMessage();
        }
    }
}
?>

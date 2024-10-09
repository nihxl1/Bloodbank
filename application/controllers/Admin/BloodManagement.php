<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BloodManagement extends CI_Controller
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

        $this->load->model('Admin/BloodManagementModel');
        
    } 
  
    public function index() {
        $this->load->model('Admin/BloodManagementModel'); 
        $data['pouches_data'] = $this->BloodManagementModel->get_pouches_data();
        $data['patient_diseases'] = $this->BloodManagementModel->get_patient_diseases_data();
        $data['recent_donations'] = $this->BloodManagementModel->get_recent_donations_data();
        $data['recent_transfusions'] = $this->BloodManagementModel->get_recent_transfusions_data();
        $data['donor_age_distribution'] = $this->BloodManagementModel->get_donor_age_distribution();
        $data['aggregated_blood_inventory'] = $this->BloodManagementModel->get_aggregated_blood_inventory_data();
        $data['donor_age_distribution'] = $this->BloodManagementModel->get_donor_age_distribution();
        $data['lowest_blood_type'] = $this->BloodManagementModel->get_lowest_blood_type();


        $this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
        $this->load->view('Admin/Body/BloodManagement', $data); 
        $this->load->view('Admin/FooterAdmin');
    }

    public function Donations() {
        $this->load->model('Admin/DonationsModel');
        $data['donations'] = $this->DonationsModel->get_donations_data();
    
        $this->load->view('STYLES/header');
        //$this->load->view('Admin/NavBar');
        $this->load->view('Admin/SidebarAdmin');
        $this->load->view('Admin/Body/Donations', $data); 
        $this->load->view('Admin/FooterAdmin');
    }
    
    public function Transfusions() {
        $this->load->model('Admin/TransfusionsModel');
        $data['transfusions'] = $this->TransfusionsModel->get_transfusions_data();
    
        $this->load->view('STYLES/header');
        //$this->load->view('Admin/NavBar');
        $this->load->view('Admin/SidebarAdmin');
        $this->load->view('Admin/Body/Transfusions', $data); 
        $this->load->view('Admin/FooterAdmin');
    }

    
}
?>


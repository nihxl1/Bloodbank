<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/PatientModel'); 
    }
 
    public function index() {
        $data['patients'] = $this->PatientModel->get_all_patients();
        $this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
        $this->load->view('Admin/Body/Patients', $data); 
        $this->load->view('Admin/FooterAdmin');
    }   

    public function get_patient($user_id) {
        
        $data['patient'] = $this->PatientModel->get_patient($user_id);
        echo json_encode($data);
    }
    

    public function register_patient() {
        
        $data['diseases'] = $this->PatientModel->get_all_diseases();
        
        $this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
        $this->load->view('Admin/Body/AddPatient',$data);
        $this->load->view('Admin/FooterAdmin');
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $patient_data = array(
                'name' => $this->input->post('name'),
                'lastname' => $this->input->post('lastname'),
                'address' => $this->input->post('address'),
                'birthday' => $this->input->post('birthday'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')), 
                'age' => $this->input->post('age'),
                'gender' => $this->input->post('gender'),
                'blood_type' => $this->input->post('bloodType'),
                'disease' => $this->input->post('disease'),
                'alergies' => $this->input->post('alergies')
            );

            $result = $this->PatientModel->register_patient($patient_data);

            if ($result) {
                echo "<script>alert('Paciente registrado.');</script>";
            } else {
                echo "<script>alert('Fallo al registrar el paciente.');</script>";
            }
        }
    }



    public function delete($user_id) {
        $result = $this->PatientModel->delete_patient($user_id);
        if ($result) {
            redirect('admin/patients');
        } else {
            
            echo "<script>alert('Failed to delete patient.');</script>";
        }
    }

    public function update_patient() {
        // Obtain data from the edit form
        $patient_data = array(
            'user_id' => $this->input->post('user_id'),
            'name' => $this->input->post('name'),
            // Include the rest of the fields here
        );
    
        // Update patient data in the database
        $result = $this->PatientModel->update_patient($patient_data);
    
        // Respond with JSON indicating success or failure
        if ($result) {
            echo json_encode(array("success" => true));
        } else {
            echo json_encode(array("success" => false));
        }
    }
    }
?>

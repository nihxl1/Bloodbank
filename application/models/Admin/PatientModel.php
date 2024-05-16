<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PatientModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
 
    public function get_all_patients() {
        $this->db->select('user.*, patient.*');
        $this->db->from('user');
        $this->db->join('patient', 'user.user_id = patient.user_id', 'inner');
        $query = $this->db->get();
        return $query->result(); 
    }

    public function get_patient($user_id) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('patient', 'user.user_id = patient.user_id', 'inner');
        $this->db->where('user.user_id', $user_id);
        $query = $this->db->get();
        return $query->row(); 
    }
      
    public function register_patient($patient_data) {
    
        $hashed_password = password_hash($patient_data['password'], PASSWORD_DEFAULT);
    
        $user_data = array(
            'name' => $patient_data['name'],
            'lastname' => $patient_data['lastname'],
            'birthday' => $patient_data['birthday'],
            'address' => $patient_data['address'],
            'phone' => $patient_data['phone'],
            'email' => $patient_data['email'],
            'password' => $hashed_password,
            'age' => $patient_data['age'],
            'gender' => $patient_data['gender'],
            'role_id' => 3
        );
    
        $this->db->insert('user', $user_data);
        $user_id = $this->db->insert_id();
    
        $patient_data = array(
            'user_id' => $user_id,
            'disease' => $patient_data['disease'], 
            'blood_type' => $patient_data['blood_type'], 
            'alergies' => $patient_data['alergies']
        );
    
        $this->db->insert('patient', $patient_data);
    
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    

    public function delete_patient($user_id) {
        
        $this->db->where('user_id', $user_id);
        $this->db->delete('patient');
    
        $this->db->where('user_id', $user_id);
        $this->db->delete('user');
    
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function update_patient($patient_data) {
        $this->db->where('user_id', $patient_data['user_id']);
        $this->db->update('patient', $patient_data);
    
        return ($this->db->affected_rows() > 0) ? true : false;
    }
    

    function get_all_diseases() {
        $this->db->select('*');
        $this->db->from('diseases');
        $query = $this->db->get();
        return $query->result(); 
    }
    
    
}










// public function edit($user_id) {
//     $data['patient'] = $this->PatientModel->get_patient_by_user_id($user_id);
//     if (!$data['patient']) {
//         show_error('Patient not found', 404);
//         return;
//     }
//     // Load the edit patient view
//     $this->load->view('STYLES/header');
//     $this->load->view('Admin/SidebarAdmin');
//     $this->load->view('Admin/Body/EditPatient', $data);
//     $this->load->view('Admin/FooterAdmin');
// }

// public function get_patient_by_user_id($user_id) {
//     $this->db->where('user_id', $user_id);
//     $query = $this->db->get('patient');
//     return $query->row(); 
// }

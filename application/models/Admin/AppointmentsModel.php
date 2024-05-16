<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AppointmentsModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    


    // public function get_all_appointments()
    // {
    //     $this->db->select('appointments.appointment_id,
    //                         user.name AS patient_name, 
    //                         doctor.name AS doctor_name,
    //                         doctor.specialization, 
    //                         appointments.hospital, 
    //                         appointments.appointment_date, 
    //                         appointments.reason, 
    //                         appointments.status');
    //     $this->db->from('appointments');
    //     $this->db->join('user', 'user.user_id = appointments.patient_id', 'left');
    //     $this->db->join('doctor', 'doctor.user_id = appointments.doctor_id', 'left');
    //     $this->db->join('roles', 'user.role_id = roles.role_id', 'left');
    //     $this->db->where_in('user.role_id', array(2, 3, 4));
    //     $query = $this->db->get();
        
    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     } else {
    //         return array();
    //     }
    // }
    
    
    public function get_all_appointments()
    {
        // Join necessary tables to get all required information
        $this->db->select('appointments.appointment_id, 
                           user.user_id AS name, 
                           doctor.name AS doctor, 
                           doctor.specialization, 
                           appointments.hospital, 
                           appointments.appointment_date, 
                           appointments.reason, 
                           appointments.status');
        $this->db->from('appointments');
        $this->db->join('user', 'user.user_id = appointments.patient_id', 'left');
        $this->db->join('doctor', 'doctor.user_id = appointments.doctor_id', 'left');
        $query = $this->db->get();
    
        // Check if there are any results
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array(); 
        }
    }
    
    
//     SELECT appointments.appointment_id, 
//     appointments.patient_id AS user_id, 
//     user.name AS name, 
//     doctor.name AS doctor, 
//     doctor.specialization, 
//     appointments.hospital, 
//     appointments.appointment_date, 
//     appointments.reason, 
//     appointments.status
// FROM appointments
// LEFT JOIN user ON user.user_id = appointments.patient_id
// LEFT JOIN doctor ON doctor.user_id = appointments.doctor_id;


    

    


//     public function get_all_appointments()
// {
//     // Join necessary tables to get all required information
//     $this->db->select('appointments.appointment_id, user.user_id AS name, doctor.name AS doctor, doctor.specialization, appointments.hospital, appointments.appointment_date, appointments.reason, appointments.status');
//     $this->db->from('appointments');
//     $this->db->join('user', 'user.user_id = appointments.patient_id', 'left');
//     $this->db->join('doctor', 'doctor.user_id = appointments.doctor_id', 'left');
//     $query = $this->db->get();

//     // Check if there are any results
//     if ($query->num_rows() > 0) {
//         return $query->result();
//     } else {
//         return array(); 
//     }
// }

    // public function get_all_appointments()
    // {
    //     // Join necessary tables to get all required information
    //     $this->db->select('appointments.appointment_id, user.name, user.lastname, doctor.specialization, appointments.hospital, appointments.appointment_date, appointments.reason, appointments.status');
    //     $this->db->from('appointments');
    //     $this->db->join('user', 'user.user_id = appointments.patient_id', 'left');
    //     $this->db->join('doctor', 'doctor.user_id = appointments.doctor_id', 'left');
    //     $query = $this->db->get();

    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }
}
?>

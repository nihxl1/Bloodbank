<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    } 

    public function get_blood_data() {
        $this->db->select('type, rh_factor, SUM(quantity) as total_quantity');
        $this->db->from('bloodinventory');
        $this->db->group_by(array('type', 'rh_factor'));
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_donation_data() {
        $this->db->select('r.blood_type, SUM(quantity) as total_quantity');
        $this->db->from('donation as d');
        $this->db->join('donor as r', 'd.donor_id = r.donor_id', 'left');
        $this->db->group_by('r.blood_type');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_transfusion_data() {
        $this->db->select('p.blood_type, SUM(quantity) as total_quantity');
        $this->db->from('transfusions as t');
        $this->db->join('patient as p', 't.patient_id = p.patient_id', 'left');
        $this->db->group_by('p.blood_type');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    
}
?>


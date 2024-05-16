<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BloodManagementModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_pouches_data() {
        $this->db->select('type, quantity');
        $this->db->from('pouches');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_patient_diseases_data() {
        $this->db->select('d.disease_name');
        $this->db->from('patient p');
        $this->db->join('diseases d', 'p.disease = d.disease_id');
        $query = $this->db->get();

        $disease_counts = array_count_values(array_column($query->result_array(), 'disease_name'));

        $labels = array_keys($disease_counts);
        $data = array_values($disease_counts);

        return array('labels' => $labels, 'data' => $data);
    }
    
    public function get_recent_transfusions_data() {
        $six_months_ago = date('Y-m-d', strtotime('-6 months'));
    
        $query = $this->db->query("
            SELECT 
                COUNT(*) AS count
            FROM 
                transfusions
            WHERE 
                transfusion_date >= '$six_months_ago'
        ");
    
        $result = $query->row();
        return $result->count;
    }
    

    public function get_recent_donations_data() {
        $six_months_ago = date('Y-m-d', strtotime('-6 months'));
    
        $query = $this->db->query("
            SELECT 
                COUNT(*) AS count
            FROM 
                donation
            WHERE 
                donation_date >= '$six_months_ago'
        ");
    
        $result = $query->row();
        return $result->count;
    }
    
    
    // public function get_recent_transfusions_data() {
    //     $six_months_ago = date('Y-m-d', strtotime('-6 months'));
    
    //     $query = $this->db->query("
    //         SELECT 
    //             MONTH(transfusion_date) AS month,
    //             COUNT(*) AS count
    //         FROM 
    //             transfusions
    //         WHERE 
    //             transfusion_date >= '$six_months_ago'
    //         GROUP BY 
    //             MONTH(transfusion_date)
    //     ");
    
    //     return $query->result();
    // }
    
    // public function get_recent_donations_data() {
    //     $six_months_ago = date('Y-m-d', strtotime('-6 months'));
    
    //     $query = $this->db->query("
    //         SELECT 
    //             COUNT(*) AS count
    //         FROM 
    //             donation
    //         WHERE 
    //             donation_date >= '$six_months_ago'
    //     ");
    
    //     $result = $query->row();
    //     return $result->count;
    // }
    
    
    public function get_donor_age_distribution() {
        $query = $this->db->query("
            SELECT 
                CASE
                    WHEN FLOOR(DATEDIFF(CURDATE(), u.birthday) / 365) < 18 THEN '<18'
                    WHEN FLOOR(DATEDIFF(CURDATE(), u.birthday) / 365) BETWEEN 18 AND 25 THEN '18-25'
                    WHEN FLOOR(DATEDIFF(CURDATE(), u.birthday) / 365) BETWEEN 26 AND 40 THEN '26-40'
                    WHEN FLOOR(DATEDIFF(CURDATE(), u.birthday) / 365) BETWEEN 41 AND 65 THEN '41-65'
                    ELSE '>65'
                END AS age_group,
                COUNT(*) AS donor_count
            FROM  
                donor d
            JOIN 
                user u ON d.user_id = u.user_id
            GROUP BY 
                age_group
        ");
    
        return $query->result();
    }
    

    public function get_aggregated_blood_inventory_data() {
        $this->db->select('type, SUM(quantity) as total_quantity');
        $this->db->group_by('type');
        $query = $this->db->get('bloodinventory');
        return $query->result_array();
    }
     
    
    public function get_lowest_blood_type() {
        $this->db->select('type, rh_factor, MIN(quantity) as min_quantity');
        $this->db->group_by('type, rh_factor');
        $query = $this->db->get('bloodinventory');
        return $query->row_array();
    }


    public function get_donors_by_blood_type($type)
    {
        $blood_type = $type[0];
        $rh_factor = $type[1]; 
        
        $this->db->select('user.email');
        $this->db->from('donor');
        $this->db->join('user', 'user.user_id = donor.user_id');
        $this->db->where('donor.blood_type', $blood_type);
        $this->db->like('donor.blood_type', $rh_factor, 'after'); // Search for Rh factor after the blood type
        $query = $this->db->get();
        return $query->result_array();
    }
    
    
    

    
 
}
?>
 
<?php
class DonationsModel extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function get_donations_data() {
        $query = $this->db->query("
            SELECT 
                u.name,
                u.lastname,
                d.donation_date,
                d.donation_location,
                dn.blood_type,
                d.quantity
            FROM 
                donation d
            JOIN 
                donor dn ON d.donor_id = dn.donor_id
            JOIN 
                user u ON dn.user_id = u.user_id
        ");
    
        return $query->result();
    }
    
}
  
?>

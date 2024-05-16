<?php
class TransfusionsModel extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function get_transfusions_data() {
        $query = $this->db->query("
            SELECT 
                u.name ,
                u.lastname,
                d.name AS doctor,
                t.transfusion_date,
                p.blood_type,
                t.quantity
            FROM 
                transfusions t
            JOIN 
                patient p ON t.patient_id = p.patient_id
            JOIN 
                doctor d ON t.doctor_id = d.doctor_id
            JOIN 
                user u ON p.user_id = u.user_id
        ");

        return $query->result();
    }
}

?>
<?php
class TransfutionHistoryModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function getPatientIdFromUserId($user_id)
    {
        $this->db->select('patient_id');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('patient');
        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->patient_id;
        } else {
            return null;  
        }
    }
    public function getPatientTransfutions($patient_id)
    {
        $this->db->select('t.*, u.name AS name, u.lastname AS lastname');
        $this->db->from('transfusions AS t');
        $this->db->join('patient AS p', 'p.patient_id = t.patient_id');
        $this->db->join('user AS u', 'p.user_id = u.user_id');
        $this->db->where('p.patient_id', $patient_id);
        $query = $this->db->get();
        return $query->result();
    }
}
?>
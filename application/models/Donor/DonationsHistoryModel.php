<?php
class DonationsHistoryModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function getDonorIdFromUserId($user_id)
    {
        $this->db->select('donor_id');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('donor');
        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->donor_id;
        } else {
            return null; 
        }
    }
    public function getDonorDonations($donor_id)
    {
        $this->db->select('d.*, u.name AS name, u.lastname AS lastname');
        $this->db->from('donation AS d');
        $this->db->join('donor AS don', 'd.donor_id = don.donor_id');
        $this->db->join('user AS u', 'don.user_id = u.user_id');
        $this->db->where('d.donor_id', $donor_id);
        $query = $this->db->get();
        return $query->result();
    }
}
?>
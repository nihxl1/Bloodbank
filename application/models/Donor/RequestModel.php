<?php
class RequestModel extends CI_Model
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
 
    public function getRequests($donor_id)
    {
        $this->db->select('r.*, u.name AS name, u.lastname AS lastname');
        $this->db->from('request AS r');
        $this->db->join('donor AS don', 'r.donor_id = don.donor_id');
        $this->db->join('user AS u', 'don.user_id = u.user_id');
        $this->db->where('r.donor_id', $donor_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function addRequest($data)
    {
        $this->db->insert('request', $data);
        return $this->db->insert_id(); 
    }

}
?>

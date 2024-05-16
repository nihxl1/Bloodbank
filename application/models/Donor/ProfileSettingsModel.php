<?php
class ProfileSettingsModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function getUserData($user_id)
    {
        $this->db->select('*'); 
        $this->db->from('user');
        $this->db->join('donor', 'user.user_id = donor.user_id');
        $this->db->where('user.user_id', $user_id);
        $query = $this->db->get();
        return $query->row();
    }


}
?>

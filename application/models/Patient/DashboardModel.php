<?php
class DashboardModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function getUserName($user_id)
    {
        $this->db->select('name');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user');
        $result = $query->row();
        return ($result) ? $result->name : '';
    }
}
?>
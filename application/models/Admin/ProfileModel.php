<?php
class ProfileModel extends CI_Model
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
        // $this->db->join('admin', 'user.user_id = admin.user_id');
        $this->db->where('user.user_id', $user_id);
        $query = $this->db->get();
        return $query->row();
        // var_dump($query);
    }


}
?>
 
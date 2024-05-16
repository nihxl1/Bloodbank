<?php
class LogInModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function log($email, $password)
    {   
        // $query = $this->db->select('user_id, email, password, role_id')
        //     ->from('user')
        //     ->where('email', $email)
        //     ->get();

        $query = $this->db->query("SELECT * FROM user WHERE email = '".$email."' AND password = '".$password."'");

        if ($query->num_rows() > 0) {
            return $query->row_array();
        }

    }

    function getUserData($email)
    {
        $query = $this->db->select('user_id, email, role_id')
            ->from('user')
            ->where('email', $email)
            ->get();
        
        return $query->row_array();
    }
}
?>

<?php
class DonorModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }


    public function get_all_donors() {
        $this->db->select('user.*, donor.*');
        $this->db->from('user');
        $this->db->join('donor', 'user.user_id = donor.user_id', 'inner');
        $query = $this->db->get();
        return $query->result(); 
    }

    public function get_donor($user_id) {
        $this->db->select('*');
        $this->db->from('user'); 
        $this->db->join('donor', 'user.user_id = donor.user_id', 'inner');
        $this->db->where('user.user_id', $user_id);
        $query = $this->db->get();
        return $query->row(); 
    }
      
    public function register_donor($donor_data) {

        
    
        $user_data = array(
            'name' => $donor_data['name'],
            'lastname' => $donor_data['lastname'],
            'birthday' => $donor_data['birthday'],
            'address' => $donor_data['address'],
            'phone' => $donor_data['phone'],
            'email' => $donor_data['email'],
            'password' => $donor_data['password'],
            'age' => $donor_data['age'],
            'gender' => $donor_data['gender'],
            'role_id' => 2
        );
    
        $this->db->insert('user', $user_data);
        $user_id = $this->db->insert_id();
    
        $donor_data = array(
            'user_id' => $user_id,
            'disease' => $donor_data['disease'], 
            'blood_type' => $donor_data['blood_type'], 
            'alergies' => $donor_data['alergies'],
            'donation_count' => $donor_data['donation_count'], 
            'last_donation_date' => $donor_data['last_donation_date'],
        );
    
        $this->db->insert('donor', $donor_data);
    
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function delete_donor($user_id) {
        
        $this->db->where('user_id', $user_id);
        $this->db->delete('donor');
    
        $this->db->where('user_id', $user_id);
        $this->db->delete('user');
    
        return ($this->db->affected_rows() > 0) ? true : false;
    }


    public function update_donor($donor_data) {
        $this->db->where('user_id', $donor_data['user_id']);
        $this->db->update('donor', $donor_data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    function get_all_diseases() {
        $this->db->select('*');
        $this->db->from('diseases');
        $query = $this->db->get();
        return $query->result(); 
    }
}
?>
<?php
class RegistroModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function guardar_usuario($donor_data) {

        
    
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

}
?>


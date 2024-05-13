<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Donors extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); 
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/DonorModel');
    }
 

    public function index()
	{
        $data['donors'] = $this->DonorModel->get_all_donors();
		$this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/Donors',$data);
        $this->load->view('Admin/FooterAdmin');
	}  

    public function get_donor($user_id) {

        $data['donor'] = $this->DonorModel->get_donor($user_id);
        echo json_encode($data);
    }
    

    public function register_donor() {

        $data['diseases'] = $this->DonorModel->get_all_diseases();
    
        $this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
        $this->load->view('Admin/Body/AddDonor',$data);
        $this->load->view('Admin/FooterAdmin');
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $donor_data = array(
                'name' => $this->input->post('name'),
                'lastname' => $this->input->post('lastname'),
                'address' => $this->input->post('address'),
                'birthday' => $this->input->post('birthday'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')), 
                'age' => $this->input->post('age'),
                'gender' => $this->input->post('gender'),
                'blood_type' => $this->input->post('bloodType'),
                'disease' => $this->input->post('disease'),
                'alergies' => $this->input->post('alergies'),
                'donation_count' => $this->input->post('donationCount'),
                'last_donation_date' => $this->input->post('lastDonation')
            );
    
            $result = $this->DonorModel->register_donor($donor_data);
    
            if ($result) {
                echo "<script>alert('Donante registrado.');</script>";
            } else {
                echo "<script>alert('Fallo al registrar el donante.');</script>";
            }
        }
    }
    



    public function delete($user_id) {
        $result = $this->DonorModel->delete_donor($user_id);
        if ($result) {
            redirect('admin/donors');
        } else {
            
            echo "<script>alert('No se ha borrado el paciente. Vuelva ha intentarlo');</script>";
        }
    }

    public function update_donor() {
        // Get the form data
        $donor_data = array(
            'user_id' => $this->input->post('user_id'),
            'name' => $this->input->post('name'),
            'lastname' => $this->input->post('lastname'),
            'birthday' => $this->input->post('birthday'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'blood_type' => $this->input->post('bloodType'),
            'disease' => $this->input->post('disease'),
            'alergies' => $this->input->post('alergies'),
            'donation_count' => $this->input->post('donationCount'),
            'last_donation_date' => $this->input->post('lastDonation')
        );
    
        // Update the donor in the database
         // Debugging: Output received form data
    var_dump($donor_data);

    // Update the donor in the database
    $result = $this->DonorModel->update_donor($donor_data);

    // Debugging: Output update result
    var_dump($result);

    // Send the response back to the client
    if ($result) {
        echo json_encode(array("success" => true));
    } else {
        echo json_encode(array("success" => false));
    }
    
    }}
?>

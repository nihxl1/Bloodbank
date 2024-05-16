<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroController extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('RegistroModel');
        $this->load->model('Admin/DonorModel');
    }



    
    public function guardar_registro() {
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
    
            $result = $this->RegistroModel->guardar_usuario($donor_data);
    
            if ($result) {
                echo "<script>alert('Donante registrado.');</script>";
                $this->session->set_flashdata('success', 'Registro correcto');
                echo "<script>alert('Registro correcto.');</script>";
                redirect(base_url().'Welcome/index');
            } else {
                echo "<script>alert('Fallo al registrar el donante.');</script>";
                $this->session->set_flashdata('error', 'Registro incorrecto');
                echo "<script>alert('Registro incorrecto \n Vuelva a intentarlo, por favor.');</script>";
                redirect(base_url().'Welcome/index'); 
            }
        }
    }   

    public function guardar_registro2() {
        
        $name = $this->input->post('nombre'); 
        $lastname = $this->input->post('apellido');
        $address = $this->input->post('direccion');
        $birthday = $this->input->post('fecha_nacimiento');
        $phone = $this->input->post('telefono');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password')); 
        $gender = $this->input->post('genero');
        $age = $this->input->post('age');
        $blood_type = $this->input->post('blood_type');
        $disease= $this->input->post('disease');
        $alergies = $this->input->post('alergies');
        $donation_count = $this->input->post('donationCount');
        $last_donation_date = $this->input->post('lastDonation');

        $datosForm = array(
            'name' => $name,
            'lastname' => $lastname,
            'address' => $address,
            'birthday' => $birthday,
            'phone' => $phone,
            'email' => $email,
            'password' => $password, 
            'gender' => $gender,
            'age' => $age,

            'bloodype' => $blood_type,
            'disease' => $disease,
            'alergies' => $alergies,
            'donation_count' => $donation_count,
            'last_donation_date' => $last_donation_date,

            'role_id' => 2 
        );

        if ($this->RegistroModel->guardar_usuario($datosForm)) {
            $this->session->set_flashdata('success', 'Registro correcto');
            echo "<script>alert('Registro correcto.');</script>";
            redirect(base_url().'Welcome/index'); 
        } else {
            $this->session->set_flashdata('error', 'Registro incorrecto');
            echo "<script>alert('Registro incorrecto \n Vuelva a intentarlo, por favor.');</script>";
            redirect(base_url().'Welcome/index'); 
        }
        


        
    } 
}
?>

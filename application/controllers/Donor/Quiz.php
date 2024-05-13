<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quiz extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Donor/QuizModel');

        if (!$this->session->userdata('user')) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $user_id = $this->session->userdata('user')['user_id'];
        $donor_id = $this->QuizModel->getDonorIdFromUserId($user_id);

        if ($donor_id) {
            $data['requests'] = $this->QuizModel->getQuizResult($donor_id);
        } else {
            $data['requests'] = array();
        }

        $this->load->view('STYLES/header');
        $this->load->view('Donor/SidebarDonor');
        $this->load->view('Donor/Body/Quiz', $data);
    }

    public function process_quiz()
    {
        $user_id = $this->session->userdata('user')['user_id'];
        $donor_id = $this->QuizModel->getDonorIdFromUserId($user_id);
    
        if ($donor_id) {
            $quiz_data = $this->input->post();
            $eligibility = $this->determine_eligibility($quiz_data);
            
            if ($eligibility == 'eligible') {
                echo "<script>alert('Usted es apto para donar.');</script>";
                
            } else {
                echo "<script>alert('No apto para donar. Acérquese al médico ambulante más cercano para asegurarse.');</script>";
                
            }
            
            $this->QuizModel->save_quiz_result($donor_id, $eligibility);


            $this->load->view('STYLES/header');
            $this->load->view('Donor/SidebarDonor');
            $this->load->view('Donor/Body/Quiz');
           
        } else {
            echo "Se ha producido un error";
        }
    }
    
   private function determine_eligibility($quiz_data)
{
    if (empty($quiz_data['autoinmune']) || empty($quiz_data['infecciones']) || empty($quiz_data['otras']) || empty($quiz_data['peso'])) {
        return '';
    }

    $disqualifying_conditions = array(
        'HIV/SIDA', 'Hepatitis B', 'Hepatitis C', 'Sífilis', 'Chagas', 'Malaria', 'Babesiosis', 'Toxoplasmosis',
        'Cáncer activo e inactivo', 'Diabetes no controlada'
    );

    foreach ($disqualifying_conditions as $condition) {
        if ($quiz_data['autoinmune'] == $condition || $quiz_data['infecciones'] == $condition || $quiz_data['otras'] == $condition) {
            return 'ineligible';
        }
    }

    if (!empty($quiz_data['situaciones'])) {
        foreach ($quiz_data['situaciones'] as $situation) {
            if ($situation == 'Operación reciente' || $situation == 'Relaciones sexuales de riesgo') {
                return 'ineligible';
            }
        }
    }

    if (!empty($quiz_data['piercings']) || !empty($quiz_data['tatuajes'])) {
        return 'ineligible';
    }

    if ($quiz_data['peso'] < 50) { 
        return 'ineligible';
    }

    return 'eligible';
}

}
?>

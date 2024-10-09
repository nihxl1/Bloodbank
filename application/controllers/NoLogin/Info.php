<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Info extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/NewsModel');

    }

    
    public function WhyGiveBlood()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/WhyGiveBlood'); 
	}  

    public function BloodTypes()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/bloodtypes'); 
	} 

    public function BloodUsage()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/blood_usage'); 
	} 

    public function BloodDonation()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/blood_donor'); 
	} 

    public function HealthandElegibility()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/health'); 
	}

    public function Considerations()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/considerations'); 
	}

    public function News()
	{
        $data['news'] = $this->NewsModel->obtenerNoticias();

		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/news',$data); 
	}

    public function Process()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/process'); 
	}

    public function Quiz()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/quiz'); 
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
    
    public function process_quiz()
    {
            
            $quiz_data = $this->input->post();
            $eligibility = $this->determine_eligibility($quiz_data);
            
            if ($eligibility == 'eligible') {
                echo "<script>alert('Usted es apto para donar.');</script>";
                
            } else {
                echo "<script>alert('No apto para donar. Acérquese al médico ambulante más cercano para asegurarse.');</script>";
                
            }
            


        $this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/quiz'); 
           

    }
    
  
}
?>

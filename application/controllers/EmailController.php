<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

class EmailController extends CI_Controller
{
    private $mailer;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/BloodManagementModel');
        $this->load->library('phpmailer_lib');
    }

    function index()
    {


        require APPPATH.'third_party/PHPMailer/src/Exception.php';
        require APPPATH.'third_party/PHPMailer/src/PHPMailer.php';
        require APPPATH.'third_party/PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        $mail->isSMTP();

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // $mail->Host = 'smtp.zelenza.com'; // Reemplaza con tu servidor SMTP
        // $mail->SMTPAuth = true;
        //$mail->Port = 25; // Puerto SMTP

        $mail->isSMTP();
        $mail->Host = "smtp.office365.com";
        $mail->Port = 587;
        $mail->SMTPAuth = true;

        $mail->Username = 'bancosangre-inf0@hotmail.com'; // Reemplaza con tu dirección de correo
        $mail->Password = 'BancoSangreInf0!'; // Reemplaza con tu contraseña de correo
        

        // $lowest_blood_type = $this->BloodManagementModel->get_lowest_blood_type();
        // $donors = $this->BloodManagementModel->get_donors_by_blood_type($lowest_blood_type['type'], $lowest_blood_type['rh_factor']);

        $lowest_blood_type = $this->BloodManagementModel->get_lowest_blood_type();
        $blood_type = $lowest_blood_type['type'] . $lowest_blood_type['rh_factor'];
        $donors = $this->BloodManagementModel->get_donors_by_blood_type($blood_type);


        $mail->setFrom('bancosangre-inf0@hotmail.com', 'Bloodbank ');
        $mail->addAddress('nihalktitu@gmail.com');
        $mail->Subject = 'URGENTE! DONAR ES VIDA';
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Body = ' Estimado/a donante,

        Esperamos que este mensaje le encuentre bien. Nos dirigimos a usted con gran urgencia y sinceridad para informarle sobre una situación crítica en nuestro banco de sangre.
    
        Hemos identificado que su tipo de sangre es uno de los que escasean en nuestras reservas actuales. En estos momentos, su donación de sangre podría marcar la diferencia entre la vida y la muerte para alguien en necesidad urgente.
    
        Por favor, considere generosamente la posibilidad de donar sangre en nuestro centro. Su acto de solidaridad y compasión puede salvar vidas y brindar esperanza a aquellos que luchan por su salud.
    
        Recuerde que donar sangre es un gesto noble y altruista que tiene un impacto directo en la vida de quienes lo necesitan. Juntos, podemos hacer una diferencia significativa en nuestra comunidad.
    
        Agradecemos de antemano su valiosa contribución y estamos disponibles para cualquier pregunta o inquietud que pueda tener. Por favor, no dude en comunicarse con nosotros para obtener más información sobre cómo puede ayudar.
    
        Gracias por su atención y consideración.
    
        Atentamente,
        Bloodbank.com';
 
        if(!$mail->send()){
            foreach ($donors as $donor) {
                $this->sendEmail($donor['email'], $subject, $body);
            }
            
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo "<script>alert('Los emails han sido enviados');</script>";

            $this->load->model('Admin/BloodManagementModel'); 
            $data['pouches_data'] = $this->BloodManagementModel->get_pouches_data();
            $data['patient_diseases'] = $this->BloodManagementModel->get_patient_diseases_data();
            $data['recent_donations'] = $this->BloodManagementModel->get_recent_donations_data();
            $data['recent_transfusions'] = $this->BloodManagementModel->get_recent_transfusions_data();
            $data['donor_age_distribution'] = $this->BloodManagementModel->get_donor_age_distribution();
            $data['aggregated_blood_inventory'] = $this->BloodManagementModel->get_aggregated_blood_inventory_data();
            $data['donor_age_distribution'] = $this->BloodManagementModel->get_donor_age_distribution();
            $data['lowest_blood_type'] = $this->BloodManagementModel->get_lowest_blood_type();
    
    
                
            
            $this->load->view('STYLES/header');
            $this->load->view('Admin/SidebarAdmin');
            $this->load->view('Admin/Body/BloodManagement', $data); 
            $this->load->view('Admin/FooterAdmin');
            
        }

    }

}
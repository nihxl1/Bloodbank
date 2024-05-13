<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/NewsModel');
        
        if (!$this->session->userdata('user')) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['news'] = $this->NewsModel->obtenerNoticias();
        
        $this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
        $this->load->view('Admin/Body/News', $data); 
        $this->load->view('Admin/FooterAdmin');
    }

    public function addNew()
    {
        $this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
        $this->load->view('Admin/Body/AddNew');
        $this->load->view('Admin/FooterAdmin');

        if ($this->input->post()) {
            $name = $this->input->post("newsName");
            $description = $this->input->post("newsDescription");
            $this->NewsModel->createNew($name, $description);
            redirect(base_url().'Admin/News');
        }
    }

    
    public function deleteNews()
    {
        $id = $this->input->post('newsID'); 
    
        if (!empty($id)) {
            if ($this->NewsModel->deleteNewsById($id)) {
                echo json_encode(['success' => true]);

            } else {
                
                echo json_encode(['success' => false]);
            }
        } else {
            echo json_encode(['success' => false]);
        }
    }
    
    

}
?>

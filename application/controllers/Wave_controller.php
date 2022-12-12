
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wave_controller extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        
        $this->load->library('form_validation');
        
        $this->load->model('Login_model');
        
        
    }
    

    public function index()
    {
        
        $this->load->view('index');
        
    }

    public function login()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('email', 'Email',  'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        
       if ($this->form_validation->run() == FALSE) {
        
        $this->load->view('login');
        
       } else {

            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $result = $this->Login_model->signin($email,$password);
            if($result)
            {
                
                $this->session->set_flashdata('id', $result);

                return redirect('welcome/dashboard');
                
            }
       }
        
       

        
    }
    public function sign_up()
    {           
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
                $this->form_validation->set_rules('username', 'Full Name','required|max_length[20]|trim');
                
               
                $this->form_validation->set_rules('email', 'Email',  'required|is_unique[admin.email]');
                $this->form_validation->set_rules('password', 'Password', 'required');
       
       if ($this->form_validation->run() == FALSE) {
        
        $this->load->view('signup');
        
       } else {
            $post = $this->input->post();
            $result = $this->Login_model->signup($post);

            if($result)
            {
                
                $this->session->set_flashdata('msg', 'Successfully Registered');
                $this->session->set_flashdata('msg_class', 'bg-success');
                
            }else{
                $this->session->set_flashdata('msg', 'Please Try Again');
                $this->session->set_flashdata('msg_class', 'bg-danger');
            }

            return redirect('wave_controller/login');
       }
       
        
    }
    public function invoice()
    {
        
        $this->load->view('invoice');
        
    }

}

/* End of file Controllername.php */

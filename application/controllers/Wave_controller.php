
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wave_controller extends CI_Controller {

    public function index()
    {
        
        $this->load->view('index');
        
    }

    public function login()
    {
        
        $this->load->view('login');
        
    }
    public function signup()
    {
        
        $this->load->view('signup');
        
    }
    public function invoice()
    {
        
        $this->load->view('invoice');
        
    }

}

/* End of file Controllername.php */

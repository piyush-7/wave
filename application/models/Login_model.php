
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    public function signup($array)
    {
        
        return $this->db->insert('admin',$array);
        
    }

    public function signin($email,$password)
    {
       
       $q = $this->db->where(['email'=>$email, 'password'=>$password])->get('admin'); 
                      
        if ($q->num_rows()) {
            return $q->row()->id;
   
        }
        else{
            return false;

        }




        

    }

    

    

}

/* End of file ModelName.php */

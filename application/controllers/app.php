<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class App extends CIAPP_Controller {

    public function index() {
        if($this->session->userdata("logged_in"))
            $this->login ();
        else
            $this->main();
    }
    
    
    public function login(){
        if($this->session->userdata("logged_in"))
            redirect ("app/main");
        else
            $this->load->view("app/login");
    }
    
    public function main(){
        if(!$this->session->userdata("logged_in"))
            redirect("app/login");
        else
            $this->load->view("app/main");
    }
    
    public function access(){
        $this->load->view("app/access");
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
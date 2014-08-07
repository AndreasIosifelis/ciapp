<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class CIAPP_Controller extends CI_Controller {
    
    
    public $data = [];
    
    public function __construct() {
        parent::__construct();
        $this->data["instance"] = $this;
    }
    
    
    public function authPermission($entity, $right){
        if(!$this->session->userdata("logged_in")){
            redirect("app/login");
            die();
        }            
    }
    
    public function hasPermission($entity, $right){
        //returns boolean;
    }
    
    
}


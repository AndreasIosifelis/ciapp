<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CIAPP_Controller {
    
    public function index(){
        $this->hasPermission();        
        echo "PRODuct";
    }
    
}
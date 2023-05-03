<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function _remap($method, $params = array()) {
        $method_exists = method_exists($this, $method);
        $methodToCall = $method_exists ? $method : 'index';
        $this->$methodToCall($method_exists ? $params : $method);
    }
    public function index() {
            
        //$this->load->model('frontend_model/contact_model');

        //$data["contact_us"] = $this->contact_model->load_contact_details();
                
		$this->load->view('frontendview/header_view');
		$this->load->view('frontendview/home_view');
		$this->load->view('frontendview/footer_view');
		
    }
	 
}
?>
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
        // var_dump("test");exit();
        $this->load->model('frontend_model/home_model');
        $this->load->helper('header_helper');
        
        $data = array();
        
        $data['content'] = $this->home_model->get_add_content();
        // var_dump($data['content']);exit();
        // $data['images'] = $this->home_model->get_add_content();


        // var_dump($data['content'] );exit();
        //$this->load->model('frontend_model/contact_model');

        //$data["contact_us"] = $this->contact_model->load_contact_details();
                
		$this->load->view('frontendview/header_view');
		$this->load->view('frontendview/home_view',$data);
		$this->load->view('frontendview/footer_view');
		
    }
	 
}
?>
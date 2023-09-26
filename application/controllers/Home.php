<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    // function _remap($method, $params = array()) {
    //     $method_exists = method_exists($this, $method);
    //     $methodToCall = $method_exists ? $method : 'index';
    //     $this->$methodToCall($method_exists ? $params : $method);
    // }

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Googlemaps');
        $this->load->model('frontend_model/Home_model');
    }

    public function index() {
        // var_dump("test");exit();
        // $this->load->model('frontend_model/home_model');
        // $this->load->helper('header_helper');
        
        // $data = array();
        
        // $data['content'] = $this->home_model->get_add_content();
        // var_dump($data['content']);exit();
        // $data['images'] = $this->home_model->get_add_content();


        // var_dump($data['content'] );exit();
        //$this->load->model('frontend_model/contact_model');

        //$data["contact_us"] = $this->contact_model->load_contact_details();
                
		$this->load->view('frontendview/header_view');
		$this->load->view('frontendview/home_view');
		$this->load->view('frontendview/footer_view');		
    }

    public function showDistance() {
        $this->load->model('Home_model');
        $data['locations'] = $this->Home_model->getLocationsFromDatabase();
        $this->load->view('home_view', $data);
    }

    public function getLocationsData() {
    // Fetch your locations data (replace this with your actual logic)
        $locationsData = $this->home_model->getLocationsFromDatabase();
        // echo($locationsData);
        
    // Return the data as JSON
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($locationsData));
    }
	 
}
?>
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Posted_add extends CI_Controller {

    function _remap($method, $params = array()) {
        $method_exists = method_exists($this, $method);
        $methodToCall = $method_exists ? $method : 'index';
        $this->$methodToCall($method_exists ? $params : $method);
    }
    public function index() {
            
        //$this->load->model('frontend_model/contact_model');

        //$data["contact_us"] = $this->contact_model->load_contact_details();
                
		$this->load->view('frontendview/header_view');
		$this->load->view('frontendview/posted_add_view');
		$this->load->view('frontendview/footer_view');
		
    }

    public function save_inquiry() {
            
        //Setting values for tabel columns
        $data['vRtype'] = $this->input->post('rtype');
        $data['vRcategory' ]= $this->input->post('rcategory');
        $data['vBedType'] = $this->input->post('bedtype');
        $data['vMeal'] = $this->input->post('meal');
        $data['vBathroom'] = $this->input->post('bathroom');
        $data['vLocation'] = $this->input->post('location');
        //$data['fLatitude'] = $this->input->post('latitude');
        //$data['fLongitude'] = $this->input->post('longitude');
        $data['vPayment	'] = $this->input->post('payment');
        $data['vImages'] = $this->input->post('rimages');
        $data['vFacility'] = $this->input->post('facility');

        // Save the location to the database
        $this->load->model('frontend_model/posted_add_model');
        $this->posted_add_model->saveLocation($data);
    

    }     
	 
}
?>
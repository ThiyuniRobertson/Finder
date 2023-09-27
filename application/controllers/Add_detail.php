<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Add_detail extends CI_Controller {

    function _remap($method, $params = array()) {
        $method_exists = method_exists($this, $method);
        $methodToCall = $method_exists ? $method : 'index';
        $this->$methodToCall($method_exists ? $params : $method);
    }
    public function index() {
            
        //$this->load->model('frontend_model/contact_model');

        //$data["contact_us"] = $this->contact_model->load_contact_details();
                
		$this->load->view('frontendview/header_view');
		$this->load->view('frontendview/add_detail_view');
		$this->load->view('frontendview/footer_view');
		
    }

    public function add_details() {
        $id = $this->uri->segment(2); 
        // var_dump($id);exit();
        
        $this->load->model('frontend_model/post_add_model');
        $this->load->library('pagination');
        
        $data = array();
        // $data_header = array();
        // $data_header['meta'] = 9;
        
        $data['add_detail'] = $this->post_add_model->getAdvertisementDetailsWithImages($id);
        // var_dump( $data['add_detail'] );exit();
        $data['add_images'] = $this->post_add_model->getAddImages($id);
        $data['image_count'] = $this->post_add_model->countAddImages($id);
        //    var_dump( $data['add_images'] );exit();
        $data['all_data'] = $this->post_add_model->getLocationsFromDatabase($id);
        
        $this->load->view('frontendview/header_view');
        $this->load->view('frontendview/add_detail_view',$data);
        $this->load->view('frontendview/footer_view');
    }  
	 
}
?>
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Post_add extends CI_Controller {

    function _remap($method, $params = array()) {
        $method_exists = method_exists($this, $method);
        $methodToCall = $method_exists ? $method : 'index';
        $this->$methodToCall($method_exists ? $params : $method);
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Googlemaps');
        $this->load->model('frontend_model/post_add_model');
    }
    public function index() {
                
		$this->load->view('frontendview/header_view');
		$this->load->view('frontendview/post_add_view');
		$this->load->view('frontendview/footer_view');
		
    }

    public function save_inquiry() {
            
            $this->load->model('frontend_model/post_add_model');

            //Setting values for tabel columns
            $data['vRtype'] = $this->input->post('rtype');
            $data['vRcategory']= $this->input->post('rcategory');
            $data['vBedType'] = $this->input->post('bedtype');
            $data['vGender'] = $this->input->post('gender');
            $data['vBathroom'] = $this->input->post('bathroom');
            // $data['vLocation'] = $this->input->post('location');
            // $data['dLatitude']= $this->input->post('latitude');
            $latitude = $this->input->post('latitude');
            $data['dLatitude'] = round($latitude, 30);

            $longitude = $this->input->post('longitude');
            $data['dLongitude'] = round($longitude, 30);
            
            $data['vPayment'] = $this->input->post('payment');
            $data['vFacility'] = $this->input->post('facility');
            $data['vTopic'] = $this->input->post('topic');
            $data['vOwner'] = $this->session->userdata('id');
            // var_dump($data);exit();
            // $data['vOwner'] = 1;
            
            $response = $this->post_add_model->save_register_inquiry($data);

            if($response==true){
                redirect(base_url() .'Post_add');
                //echo "Records Saved Successfully";
                
            }
            else{
                    echo "Insert error !";
            }
            
        // }
    } 
	 
}
?>
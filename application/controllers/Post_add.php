<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Post_add extends CI_Controller {

    function _remap($method, $params = array()) {
        $method_exists = method_exists($this, $method);
        $methodToCall = $method_exists ? $method : 'index';
        $this->$methodToCall($method_exists ? $params : $method);
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
            $data['vMeal'] = $this->input->post('meal');
            $data['vBathroom'] = $this->input->post('bathroom');
            $data['vPayment'] = $this->input->post('payment');
            $data['vFacility'] = $this->input->post('facility');
            // var_dump($data);exit();
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
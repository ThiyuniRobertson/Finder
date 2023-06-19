<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller {

    function _remap($method, $params = array()) {
        $method_exists = method_exists($this, $method);
        $methodToCall = $method_exists ? $method : 'index';
        $this->$methodToCall($method_exists ? $params : $method);
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('frontend_model/register_model');
    }

    public function index() {
        // echo "1"; die();
        
		$this->load->view('frontendview/register_view');
		
    }

        //save the register data 

    public function save_inquiry() {
            
            //Setting values for tabel columns
            $data['vFname'] = $this->input->post('fname');
            $data['vLname']= $this->input->post('lname');
            $data['vEmail'] = $this->input->post('email');
            $data['vContactNum'] = $this->input->post('telnum');
            $data['vProvince'] = $this->input->post('province');
            $data['vDistrict'] = $this->input->post('district');
            $data['vPassword'] = $this->input->post('password');
            // var_dump($data);exit();
            $response = $this->register_model->save_register_inquiry($data);

            if($response==true){
                redirect(base_url() .'Thank_you');
                //echo "Records Saved Successfully";
                
            }
            else{
                echo "Insert error !";
            }
            
        // }

    }     
        
}
   
?>
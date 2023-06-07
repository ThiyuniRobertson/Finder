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
        //$this->load->model('frontend_model/contact_model');

        //$data["contact_us"] = $this->contact_model->load_contact_details();
                
		//$this->load->view('frontendview/header_view');
		$this->load->view('frontendview/register_view');
		//$this->load->view('frontendview/footer_view');
		
    }

        //save the register data 

    public function save_inquiry() {
        
        //$this->form_validation->set_rules('fname', 'First Name', 'required');
        //$this->form_validation->set_rules('lname', 'Last Name', 'required');
        //$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        //$this->form_validation->set_rules('telnum', 'Contact Number', 'required|regex_match[/^[0-9]{10}$/]');
        //$this->form_validation->set_rules('password', 'Password', 'required');
                
        //load registration view form
        // $this->load->view('frontendview/register_view');
        
        //check submit button
        // if($this->input->post('butregister')){
            
            //Setting values for tabel columns
            $data['vFname'] = $this->input->post('fname');
            $data['vLname	' ]= $this->input->post('lname');
            $data['vEmail'] = $this->input->post('email');
            $data['vContactNum'] = $this->input->post('telnum');
            $data['vProvince'] = $this->input->post('province');
            $data['vDistrict'] = $this->input->post('district');
            $data['vPassword'] = $this->input->post('password');
            // var_dump($data);exit();
            $response = $this->register_model->save_register_inquiry($data);

            if($response==true){
                redirect(base_url() .'Sign_up');
                //echo "Records Saved Successfully";
                
            }
            else{
                    echo "Insert error !";
            }
            
        // }

    }     
        
}
   
?>
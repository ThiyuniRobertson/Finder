<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sign_up extends CI_Controller {

    function _remap($method, $params = array()) {
        $method_exists = method_exists($this, $method);
        $methodToCall = $method_exists ? $method : 'index';
        $this->$methodToCall($method_exists ? $params : $method);
    }
    
    public function __construct() {
        //load model
        parent::__construct();
        $this->load->model('frontend_model/signup_model');
    }

    public function index() {;
        //display the sign_up view        
		$this->load->view('frontendview/sign_up_view');
    }
    
    public function login_user() {
        
        //Validation for login form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Email','required|valid_email');
        $this->form_validation->set_rules('floatingPassword','Password','required');
       
        if($this->form_validation->run()){
            $this->load->library('session');
            // Get input values from the form
            // die("test");
            $username = $this->input->post('username');
            $password = $this->input->post('floatingPassword');
        
            // Validate the user credentials
            //$user = $this->signup_model->validate_user($username, $password);
            $user = $this->signup_model->get_user($username, $password);
            // var_dump($user);die();
            if ($user) {
                // Set user session data
                $user_data = array(
                    'id' => $user->id,
                    'vEmail' => $user->vEmail,
                    'vFname' => $user->vFname,
                    //'logged_in' => true
                );
                // var_dump($user_data);die();
                $this->session->set_userdata($user_data);
                
                // Redirect to the dashboard or any other page
                redirect(base_url());
            } else {
                // Display login form with error message
                //$this->session->set_flashdata('error', 'Invalid username or password');
                //$this->load->view('frontendview/sign_up_view', $data);
                die("Error");
            }
        }else{
            //die("Validation Error");
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
}
?>
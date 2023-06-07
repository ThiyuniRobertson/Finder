<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Forgot_password extends CI_Controller {

    function _remap($method, $params = array()) {
        $method_exists = method_exists($this, $method);
        $methodToCall = $method_exists ? $method : 'index';
        $this->$methodToCall($method_exists ? $params : $method);
    }
    public function index() {
            
		$this->load->view('frontendview/forgotpassword_view');
    }

    public function __construct() {
        //load model
        parent::__construct();
        $this->load->model('frontend_model/signup_model');
    }

    public function forgotpass() {

        //Validation for login form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Email','required|valid_email');

        if($this->form_validation->run()){
            // Form validation successful, generate reset token and send reset link to user
            $username = $this->input->post('username');
            $user = $this->User_model->get_user_by_email($username);

            if ($user) {
                // Generate and store a reset token for the user
                $reset_token = $this->_generate_reset_token($user['id']);
                $this->User_model->store_reset_token($user['id'], $reset_token);

                // Send the reset link to the user's email
                $this->_send_reset_email($user['username'], $reset_token);

                // Show success message or redirect to a success page
                redirect('frontendview/sign_up_view');
            } else {
                // User with the provided email not found
                $data['error_message'] = 'User with this email does not exist.';
                $this->load->view('forgotpassword_view', $data);
            }
        }else{
            $this->load->view('frontendview/forgotpassword_view');
        }
    }

    private function _generate_reset_token($user_id) {
        // Generate a unique reset token
        return bin2hex(random_bytes(32));
    }

    private function _send_reset_email($username, $reset_token) {
        // Send the reset link to the provided email
        // You can use any email library or service of your choice here
        // Example using CodeIgniter's built-in email library:
        $this->load->library('email');

        $this->email->from('thiunirobertson@gmail.com', 'FINDER');
        $this->email->to($username);

        $this->email->subject('Reset Password');
        $this->email->message('Click the following link to reset your password: ' . site_url('reset_password/' . $reset_token));

        $this->email->send();
    }

    public function success() {
        $this->load->view('frontendview/sign_up_view');
    }
	 
}
?>
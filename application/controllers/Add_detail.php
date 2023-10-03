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

    public function submitForm() {
        $this->load->model('frontend_model/post_add_model');
    
        // Load the form validation library
        $this->load->library('form_validation');
    
        // Set validation rules for your form fields
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('telnum', 'Contact Number', 'required');
        $this->form_validation->set_rules('tMessage', 'Your Message', 'required');
    
        if ($this->form_validation->run() != FALSE) {
            // Form validation passed, process the data
            $email = $this->input->post('email');
    
            // Get form data
            $data = array(
                'first_name' => $this->input->post('fname'),
                'last_name' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'contact_number' => $this->input->post('telnum'),
                'message' => $this->input->post('tMessage'),
                'created_at' => date('Y-m-d H:i:s')
            );
    
            // Add data to the database (you'll need to create a model for this)
            $inserted = $this->post_add_model->addBookData($data);
    
            if ($inserted) {
                // Send email (you'll need to configure email settings)
                // $this->load->library('email');
                // Configure email settings
                // ...
    
                // $this->email->from($email, 'Your Name');
                // $this->email->to($data['email']);
                // $this->email->subject('Booking Successful');
                // $this->email->message('Message');
                // $this->email->send();
    
                // Show success message and send a response
                $response = array(
                    'status' => 'success',
                    'message' => 'Form submitted successfully.'
                );
                echo json_encode($response);
            } else {
                // Handle database insertion error and send an error response
                $response = array(
                    'status' => 'error',
                    'message' => 'Error occurred while processing the form.'
                );
                echo json_encode($response);
            }
        } else {
            // Form validation failed, send an error response
            $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );
            echo json_encode($response);
        }
    }
    
	 
}
?>
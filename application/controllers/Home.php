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
        $data['all_data'] = $this->Home_model->getLocationsFromDatabase();
        // var_dump($data['all_data']);exit();
                
		$this->load->view('frontendview/header_view');
		$this->load->view('frontendview/home_view',$data);
		$this->load->view('frontendview/footer_view');		
    }

    public function showDistance() {
        $this->load->model('frontend_model/Home_model');
        $data['all_data'] = $this->Home_model->getLocationsFromDatabase();
        $this->load->view('home_view', $data);
        $this->load->view('add_detail_view', $data);
    }

    public function getLocationsData() {
    // Fetch your locations data (replace this with your actual logic)
        $locationsData = $this->Home_model->getLocationsFromDatabase();
        // echo($locationsData);die();
        
    // Return the data as JSON
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($locationsData));
    }
	 
    public function idfromfooter() {
        // // Retrieve the data sent from the view
        // $inputData = $this->input->post('inputData');
        // echo '<pre>';
        // var_dump($inputData);
        // echo '</pre>';
        // // Process the data or perform any other actions
        // // ...
    
        // // Return a response (e.g., JSON response)
        // $response = array('message' => 'Data received successfully');
        // echo json_encode($response);
        // $('#div_id').remove();
        if ($this->input->is_ajax_request()) {
            $inputData = $this->input->post('inputData');
    
            // Process the inputData and return a response
            $resultArray = array(); // Initialize an empty array to store results

            foreach ($inputData as $id) {
                // Process each $id and obtain related details
                $details = $this->Home_model->getDetailsById($id);
                $image = $this->Home_model->getDetailsImageById($id);

                // Create an array to hold the data for this iteration
                $resultItem = array(
                    'details' => $details,
                    'image' => $image
                );

                // Add the result item to the result array
                $resultArray[] = $resultItem;
            }

            // Return the result array as a JSON response
            echo json_encode($resultArray);

        } else {
            // Handle non-AJAX requests here
            // Redirect or display an error message
        }
    }
}
?>
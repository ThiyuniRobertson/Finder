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
        // Retrieve the POST data using CodeIgniter's input class
        $room_type = $this->input->post('room_type');
        $room_category = $this->input->post('room_category');
        $bed_type = $this->input->post('bed_type');
        $bathroom_type = $this->input->post('bathroom_type');
        $gender_type = $this->input->post('gender_type');
        // echo($room_type);die();
        // Now you have access to the data sent from the view
        // You can use these variables in your logic

        // Example: Fetch your locations data based on the received parameters
        $locationsData = $this->Home_model->getFilteredLocationsFromDatabase($room_type, $room_category, $bed_type, $bathroom_type, $gender_type);

        // $locationsData = $this->Home_model->getFilteredLocationsFromDatabase();
        // echo($locationsData);die();
        
    // Return the data as JSON
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($locationsData));
    }
	 
    public function idfromfooter() {
        $resultArray = array(); // Initialize an empty array to store results
        // $resultItem = array();
        if ($this->input->is_ajax_request()) {
            $inputData = $this->input->post('inputData');
            // $filteredData = $this->input->post('filteredData');
            // var_dump(empty($inputData));
            if (is_array($inputData) && !empty($inputData))
            { 
                foreach ($inputData as $data) 
                {
                    $id = $data['id'];
                    $distance = $data['distance'];
                    //echo $id.'<br>';
                                // Process each $id and obtain related details
                                $details = $this->Home_model->getDetailsById($id);
                                $image = $this->Home_model->getDetailsImageById($id);
                    
                                // Create an array to hold the data for this iteration
                                $resultItem = array(
                                    'details' => $details,
                                    'image' => $image,
                                    'distance' => $distance
                                );
                    
                                // Add the result item to the result array
                                $resultArray[] = $resultItem;
                }
                //var_dump( json_encode($resultItem));
                header('Content-Type: application/json');
                echo json_encode($resultArray);
                
            }   
            else{
                echo json_encode(['error' => 'Invalid input data']);
            }
           
            // die();
            // Process the inputData and return a response
            
    
            // if (is_array($inputData) && !empty($inputData)) {
            //     foreach ($inputData as $id) {
            //         // Process each $id and obtain related details
            //         $details = $this->Home_model->getDetailsById($id);
            //         $image = $this->Home_model->getDetailsImageById($id);
        
            //         // Create an array to hold the data for this iteration
            //         $resultItem = array(
            //             'details' => $details,
            //             'image' => $image
            //         );
        
            //         // Add the result item to the result array
            //         $resultArray[] = $resultItem;
            //     }
    
            //     // Return the result array as a JSON response
            //     echo json_encode($resultArray);
            // } else {
            //     // Handle the case when $inputData is not an array or is empty
            //     echo json_encode(['error' => 'Invalid input data']);
            // }
        } else {
            // Handle non-AJAX requests here
            echo "Error: This is not an AJAX request.";
        }
    }
    
}
?>
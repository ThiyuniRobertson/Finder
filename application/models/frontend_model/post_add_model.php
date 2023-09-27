<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class post_add_model extends CI_Model {
	

    public function load_contact_details() {

        $query = $this->db->query("SELECT * FROM  tbl_advertisement WHERE id='1'");
     
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return array();
        }
    }
	
	public function save_register_inquiry($data) {
    $this->db->insert('tbl_advertisement', $data);
    $insert_id = $this->db->insert_id();

    $names = $_FILES['fimage']['name'];

    if (!empty($names)) {
        $config['upload_path'] = './add_images/'; // Set the upload directory path
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; // Allowed file types
        $config['max_size'] = 374406; // Maximum file size in kilobytes

        $this->load->library('upload', $config); // Load the upload library

        // Loop through each uploaded file
        for ($i = 0; $i < count($names); $i++) {
            $dte = date("ymdHis");
            $fileSaveName = str_replace(' ', '_', $dte . $i . $_FILES['fimage']['name'][$i]);

            $_FILES['userfile']['name'] = $fileSaveName;
            $_FILES['userfile']['type'] = $_FILES['fimage']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $_FILES['fimage']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $_FILES['fimage']['error'][$i];
            $_FILES['userfile']['size'] = $_FILES['fimage']['size'][$i];

            

            $this->upload->initialize($config);

            $uploadfile = $this->upload->do_upload('userfile');

            if (!$uploadfile) {
                // Handle the upload error
                $error = array('error' => $this->upload->display_errors());
                return false;
            } else {
                // File uploaded successfully, insert data into the database
                $data_image['fImage'] = str_replace(' ', '_', $fileSaveName);
                $data_image['dDate'] = date('Y-m-d H:i:s');
                $data_image['iAddID'] = $insert_id;

                $this->db->insert('tbl_add_images', $data_image);
            }
        }
        return true;
        }
    }
//getting add details from tbl_advertisment table and it pass 
    public function getAdvertisementDetailsWithImages($id) {
        $this->db->select('tbl_advertisement.*, tbl_add_images.fImage'); // Replace tbl_add_images.* with the specific image_url column you want to retrieve
        $this->db->from('tbl_advertisement');
        
        // Join with tbl_add_images based on id
        $this->db->join('tbl_add_images', 'tbl_advertisement.id = tbl_add_images.iAddID');
        
        // Add a WHERE condition to filter by advertisement ID
        $this->db->where('tbl_advertisement.id', $id);
        
        // Execute the query
        $result = $this->db->get();
        
        // Return the result
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null; // You can return null instead of an empty array if no results are found
        }
    }

    public function getAddImages($id) {
        // echo $id;exit();
        $this->db->select('*'); 
        $this->db->from('tbl_add_images');
        $this->db->where('iAddID',$id);
        
        // Execute the query
        $query = $this->db->get();
       
        
        // Return the result
        if ($query->num_rows() > 0) {
            // echo $this->db->last_query();exit();
            return $query->result();
        } else {
            // echo "no";exit();
            return array();
        }
    }

    public function countAddImages($id) {
        $this->db->select('COUNT(*) as total_images'); // Use COUNT(*) to count records and alias it as 'total_images'
        $this->db->from('tbl_add_images');
        $this->db->where('iAddID', $id);
        
        // Execute the query
        $query = $this->db->get();
        
        // Return the result
        if ($query->num_rows() == 1) {
            $result = $query->row();
            return $result->total_images;
        } else {
            return 0; // Return 0 if no records are found
        }
    }

    public function getLocationsFromDatabase($id) {
        $this->db->select('*'); 
        $this->db->from('tbl_advertisement');
        $this->db->where('id !=', $id); // Use '!=' instead of '!='
        $this->db->order_by('id', 'desc'); // Replace 'column_name' with the actual column name
        $this->db->limit(3);

        // Execute the query
        $query = $this->db->get();

        // echo $this->db->last_query(); // You can keep this for debugging, but remove the 'exit()'

        // Return the result
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }



}

?>

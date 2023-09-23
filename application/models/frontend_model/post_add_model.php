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
       
    // var_dump($data);die();
    $this->db->insert('tbl_advertisement', $data);
    $query = $this->db->last_query();

    // echo $query; die("habs");
    // if ($query->num_rows() == 1) {
    //   return $query->result();
    // } else {
    //     return array();
    // }
    
    $insert_id = $this->db->insert_id();
    
    // if ($query) {
    $names = $_FILES['fimage']['name'];
      
    if (!empty($names)) {
        
      $config['upload_path'] = './add_images/'; // Set the upload directory path
      $config['allowed_types'] = 'gif|jpg|png|jpeg'; // Allowed file types
      $config['max_size'] = 374406; // Maximum file size in kilobytes

      $this->load->library('upload', $config); // Load the upload library
          
      for ($i = 0; $i < count($names); $i++) {
            
        $_FILES['userfile']['name'] = $names[$i];
        $_FILES['userfile']['type'] = $_FILES['fimage']['type'][$i];
        $_FILES['userfile']['tmp_name'] = $_FILES['fimage']['tmp_name'][$i];
        $_FILES['userfile']['error'] = $_FILES['fimage']['error'][$i];
        $_FILES['userfile']['size'] = $_FILES['fimage']['size'][$i];

        $dte = date("ymdHms");
        $fileSaveName = str_replace(' ', '_', $dte . $i . $_FILES['fimage']['name'][$i]);
              
        $this->upload->initialize($config);
              
        if (!$this->upload->do_upload('userfile')) {
          // echo "run again";
          // echo $i;
          $error = array('error' => $this->upload->display_errors());
          // Handle the upload error
          return false;
        } else {
                
          $data_image['fImage'] = str_replace(' ', '_', $fileSaveName);
          $data_image['dDate'] = date('Y-m-d H:i:s');
          $data_image['iAddID'] = $insert_id;

          $this->db->insert('tbl_add_images', $data_image);
          // echo $i;
                  
        }
      }
        return true;
    }
        
// }
  // else {
  //   
// }

  }

}

?>

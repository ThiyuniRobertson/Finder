<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class register_model extends CI_Model {
	

    public function load_contact_details() {

        $query = $this->db->query("SELECT * FROM  tbl_register WHERE id='1'");

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return array();
        }
    }

	public function load_catEmail($prodCatInq) {
		$hrEmail_data = $this->register_model->get_hremail($prodCatInq);
		$hrEmail_data[0]->vInqEmails;
       
  }
	
	public function save_register_inquiry($data) {
    // print_r($data);die("jj");
    // $data = array(
    //   "vFname" => $this->input->post('fname', TRUE),
    //   "vLname" => $this->input->post('lname', TRUE),
    //   "vEmail" => $this->input->post('email', TRUE),
    //   "vContactNum" => $this->input->post('telnum', TRUE),
    //   "vPassword" => $this->input->post('password', TRUE),
    // );
    $query = $this->db->insert('tbl_register', $data);
    if ($query) {
      return true;
  } else {
      return false;
  }

  }

}

?>

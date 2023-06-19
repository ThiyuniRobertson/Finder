<?php
class posted_add_model extends CI_Model
{
  public function load_contact_details() {

    $query = $this->db->query("SELECT * FROM  tbl_advertisement WHERE id='1'");

    if ($query->num_rows() == 1) {
        return $query->result();
    } else {
        return array();
    }
}


  public function saveLocation($data) {
    $query = $this->db->insert('tbl_advertisement', $data);
    if ($query) {
      return true;
    } else {
      return false;
    }      
  }
}
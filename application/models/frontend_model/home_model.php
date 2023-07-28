<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function get_add_content(){
      // var_dump("test");exit();
      $this->db->from('tbl_advertisement');
      $this->db->where('id',1);
      // $this->db->order_by('id','asc');
      $query = $this->db->get();
      // echo $this->db->last_query();exit();
      if($query->num_rows() > 0) {
        return $query->row();
      }
      else {
        return array();
      }
  }
}
?>

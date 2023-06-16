<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class signup_model extends CI_Model {

    public function get_user($username, $password) {
        $this->db->select('*');
        $this->db->from('tbl_register');
        $this->db->where('vEmail',$username);
        $this->db->where('vPassword',$password);
        
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }
    

}

?>
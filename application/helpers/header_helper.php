<?php

if (!defined('BASEPATH'))
 exit('No direct script access allowed');

//class Header_helper {
if (!function_exists('get_images'))
{
   function get_images($id) {
    $ci =& get_instance();
    $ci->load->database();
    $sql = " SELECT * FROM tbl_add_images where iAddID='$id' LIMIT 1";
    $q = $ci->db->query($sql);
    return $q->result();
   }

}
?>
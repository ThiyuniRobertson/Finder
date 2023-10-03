<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function get_add_content(){
      // var_dump("test");exit();
      $this->db->from('tbl_advertisement');
      // $this->db->where('id',1);
      $this->db->order_by('id','desc');
      $query = $this->db->get();
      // echo $this->db->last_query();exit();
      if($query->num_rows() > 0) {
        return $query->result();
      }
      else {
        return array();
      }
    }

    public function load_contact_details() {
      $query = $this->db->query("SELECT * FROM  tbl_advertisement WHERE id='1'");

      if ($query->num_rows() == 1) {
          return $query->result();
      } else {
          return array();
      }
  }
//Get the data from database
  public function getLocationsFromDatabase() {
    $this->db->from('tbl_advertisement');
    // $this->db->where('id',1);
    $this->db->order_by('id','desc');
    $query = $this->db->get();
    // echo $this->db->last_query();exit();
    if($query->num_rows() > 0) {
      return $query->result();
    }
    else {
      return array();
    }
  }

  public function getFilteredLocationsFromDatabase($room_type, $room_category, $bed_type, $bathroom_type, $gender_type) {
    $this->db->from('tbl_advertisement');
    if($room_type != NULL)
    {
      $this->db->where('vRtype',$room_type);
    }
    if($room_category != NULL)
    {
      $this->db->where('vRcategory',$room_category);
    }
    if($bed_type != NULL)
    {
      $this->db->where('vBedType',$bed_type);
    }
    if($bathroom_type != NULL)
    {
      $this->db->where('vBathroom',$bathroom_type);
    }
    if($gender_type != NULL)
    {
      $this->db->where('vGender',$gender_type);
    }
    $this->db->order_by('id','desc');
    $query = $this->db->get();
    // echo $this->db->last_query();exit();
    if($query->num_rows() > 0) {
      return $query->result();
    }
    else {
      return array();
    }
  }

  public function calculateDistanceWithGoogleMapsAPI($originLat, $originLon, $destLat, $destLon, $topic) {
      $origin = $originLat . ',' . $originLon;
      $destination = $destLat . ',' . $destLon;

      $api_key ='AIzaSyD-AZeJwG7AYyT3Fr7_kI2BnV3_y9SbK7s'; // Replace with your Google Maps API key.

      $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=$origin&destinations=$destination&mode=driving&units=metric&key=$api_key";

      $response = file_get_contents($url);
      $data = json_decode($response);

      if ($data->status == 'OK') {
          return $data->rows[0]->elements[0]->distance->text;
      } else {
          return "Error: " . $data->status;
      }
  }

  public function getDetailsById($id){
    // var_dump("test");exit();
    $this->db->from('tbl_advertisement');
    $this->db->where('id',$id);
    $this->db->order_by('id','desc');
    $query = $this->db->get();
    // echo $this->db->last_query();exit();
    if($query->num_rows() > 0) {
      return $query->row();
    }
    else {
      return array();
    }
  }

  public function getDetailsImageById($id){
    // var_dump("test");exit();
    $this->db->from('tbl_add_images');
    $this->db->where('iAddID',$id);
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

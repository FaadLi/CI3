<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Model{

  public function __construct(){
    parent::__construct();
    //Do your magic here
  }

  public function getBlogViewObject(){
    $query = $this->db->query("select * from blog");
    return $query->result();
  }

  public function getBlogViewArray(){
    $query = $this->db->query("select * from blog");
    return $query->result_array();
  }
}

?>
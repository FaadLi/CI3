<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	 public function index()
 	{
 		$this->load->model('biodata');
 		$data['biodata_array']=$this->biodata->getBiodataQueryArray();
		$data['biodata_object']=$this->biodata->getBiodataQueryObject();
 		$this->load->view("templates/header");
		
		
		//$data['records']= $this->news->getAll();
		//$this->load->view('news',$data);
		$this->load->view('home',$data);
		$this->load->view("templates/footer");
 	}

 	function __construct()
 	{
 		parent:: __construct();
 		$this->load->helper('url');
 	}
}

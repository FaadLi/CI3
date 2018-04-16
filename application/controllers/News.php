<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{

		$this->load->view("templates/header");
		$this->load->view('news');
		$this->load->view("templates/footer");
	}
}

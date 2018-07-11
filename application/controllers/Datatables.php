<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('blog_model');
	}

	public function index()
	{
		$data['data'] = $this->blog_model->get_all_artikel_limit();

		$this->load->view("templates/header");
		$this->load->view('datatables/dt_basic', $data);
		$this->load->view("templates/footer");
	}

	public function get_json()
	{
		$data['data'] = $this->blog_model->get_all_artikel_limit();

		echo json_encode($data);
	}

	public function json()
	{
		$this->load->view("templates/header");
		$this->load->view('datatables/dt_json');
		$this->load->view("templates/footer");
	}

}
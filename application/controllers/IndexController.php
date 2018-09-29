<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('security');
		$this->load->helper('url');

	}
	public function index()
	{
    $this->load->view('templates/header');
    $this->load->view('templates/navbar');
    $this->load->view('index');
		$this->load->view('templates/footer');
	}
}

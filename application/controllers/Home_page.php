<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_page extends CI_Controller {
  public function __construct()
  {
      parent::__construct();
  } 
	public function index()
	{
        $data = array();

        $this->load->view('layout/header');
        $this->load->view('home_page');
	}
}

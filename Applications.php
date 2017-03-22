<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applications extends CI_Controller {
	function __construct() {
	    parent::__construct();
	    if(!isLogin())
		{
			redirect('login');
		}
	   	$this->lang->load('login', 'english'); 
	   	$this->lang->load('common', 'english'); 
	   	$this->load->model('college_model');   
	   	$this->load->model('manage_model');   
	}

	function index(){
		$outputData['app'] = $this->college_model->getadmission();
		$this->load->view('applications/list',$outputData);
	}
	

}

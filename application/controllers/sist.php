<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sist extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	
	public function index()
	{
		$this->load->view('welcome_view');
	}
	
	function clientes_list($param=null) {
		$this->load->view('clientes_list_view');
	}
}
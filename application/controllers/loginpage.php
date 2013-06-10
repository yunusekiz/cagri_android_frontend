<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loginpage extends CI_Controller {

	protected $parser_data;
	
	public function index(){
		$base = base_url();
		$data = array('base' => $base);
		$this->parser->parse('login_views/login_form', $data);

		
		
		}
	
	}
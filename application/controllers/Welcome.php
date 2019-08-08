<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){

		parent:: __construct();
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->model('register_model');
		$this->load->library('register_model');
	}
	 
	
	public function index()
	{
		print_r('dfdsfd');
		$this->load->view('student_registration');
		
		//print_r($_POST);
		//print_r($this->register_model->get());
		//checking
		if($this->input->post('submit')){
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$class=$this->input->post('class');
			
	//call saverecords method 
			
		$data=$this->register_model->saverecords($name,$email,$class) ;
			if($data){
				echo "Records Saved Successfully";
			}
			else{
				return false;
			}
		}
	}
	public function login(){
		print_r('dfdsfd'); die;
		$this->load->view('Login');
	}
	
	
}

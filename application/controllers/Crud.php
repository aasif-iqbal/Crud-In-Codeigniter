<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

    public function __construct(){
		parent::__construct();
		
		$this->load->helper('url');
		
		/*load database libray manually*/
		$this->load->database();
		
		/*load Model*/
		$this->load->model('Employee_model');		
	 }

	 public function index(){
		 $this->load->view('includes/nav');
		 $this->load->view('crud/add');		 
	 }

	 public function show_all_employees(){
		$this->load->view('crud/show_all');
	 }

     //Create - Save
	public function addEmployees(){
	
		    $data['name'] = $this->input->post('name');
			$data['contact_no'] = $this->input->post('contact_no');
			$data['address'] = $this->input->post('address');
			$data['designation'] = $this->input->post('designation');
			$data['age'] = $this->input->post('age');
			
			$response = $this->Employee_model->saveRecords($data);
			
			// if($response == true){
			//         echo "Records Saved Successfully";
			// }
			// else{
			// 		echo "Insert error !";
			// }
		}	

		public function showForm(){
			return $this->load->view('welcome_message');
		}
	

}
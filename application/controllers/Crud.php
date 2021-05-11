<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

    public function __construct(){
		parent::__construct();
						
		/*load database libray manually*/
		$this->load->database();
		
		/*load Model*/
		$this->load->model('Employee_model');			
	}

	 public function index(){
		$data = $this->Employee_model->get_emp_details();

		$this->load->view('includes/nav');		 
		$this->load->view('crud/show_all', array('employees' => $data));
	 }

		public function create(){
			$this->load->view('includes/nav');			    			
			$this->load->view('crud/create');
		}	

		public function store(){
			$this->load->view('includes/nav');
			$this->Employee_model->saveRecords();									
		}

		public function edit($id){
			$this->load->view('includes/nav');								
			$data = $this->Employee_model->edit_emp_details($id);					
			$this->load->view('crud/edit', array('data'=>$data));
		}
		
		public function update($id){
			$this->load->view('includes/nav');						
			$this->Employee_model->update_emp_details($id);
			// $this->session->set_flashdata('update_emp', 'Record has been updated');
			// redirect(base_url('/'));
		}

		public function delete($id){
			$this->Employee_model->deleteRecords($id);
			$this->session->set_flashdata('delete_emp', 'Record has been deleted');
			redirect(base_url('/'));
		}
	

}
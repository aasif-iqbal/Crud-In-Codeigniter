<?php

class Employee_model extends CI_Model{

    public function get_emp_details(){
        $this->db->select('*');
        $this->db->from('emp_tbl');
        $query = $this->db->get();
        
        return $query->result();
    }

    public function saveRecords(){
        
        $this->form_validation->set_rules('name', 'Name','required|max_length[15]|min_length[3]|trim');
        $this->form_validation->set_rules('contact_no','Contact Number','required|min_length[10]|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|min_length[10]|max_length[15]|trim');
        $this->form_validation->set_rules('designation', 'Designation','required');
        $this->form_validation->set_rules('age', 'Age','required|max_length[2]|min_length[1]|trim');
      
        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('crud/create');                                    
        }
        else
        {		  
            $data['name'] = $this->input->post('name');
            $data['contact_no'] = $this->input->post('contact_no');
            $data['address'] = $this->input->post('address');
            $data['designation'] = $this->input->post('designation');
            $data['age'] = $this->input->post('age');

            $this->db->insert('emp_tbl', $data);       

            $this->session->set_flashdata('add_emp', 'Record has been added');
			redirect(base_url('/'));            
        }
    }

    public function edit_emp_details($id){
        
	    return $this->db->get_where('emp_tbl', array('emp_id' => $id))->row();
    }

    public function update_emp_details($id){             
        
        $this->form_validation->set_rules('name', 'Name','required|max_length[15]|min_length[3]|trim');
        $this->form_validation->set_rules('contact_no','Contact Number','required|min_length[10]|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|min_length[10]|max_length[15]|trim');
        $this->form_validation->set_rules('designation', 'Designation','required');
        $this->form_validation->set_rules('age', 'Age','required|max_length[2]|min_length[1]|trim');

        if ($this->form_validation->run() == FALSE) 
        {
            $data = $this->edit_emp_details($id);
            $this->load->view('crud/edit', array('data' => $data));                                    
        }
        else
        {		              
            $data['name'] = $this->input->post('name');
            $data['contact_no'] = $this->input->post('contact_no');
            $data['address'] = $this->input->post('address');
            $data['designation'] = $this->input->post('designation');
            $data['age'] = $this->input->post('age');
            
            if($id == 0){
                $this->db->insert('emp_tbl', $data);
                $this->session->set_flashdata('add_emp', 'Record has been added');
			    redirect(base_url('/'));            
            }else{
                $this->db->where('emp_id', $id);
                $this->db->update('emp_tbl', $data);
                $this->session->set_flashdata('update_emp', 'Record has been updated');
			    redirect(base_url('/'));
            }   
        }     
    }

    public function deleteRecords($id){
        $this->db->delete('emp_tbl', array('emp_id' => $id));
        $this->session->set_flashdata('delete_emp', 'Record has been deleted');
        redirect(base_url('/'));
    }   
}
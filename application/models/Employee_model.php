<?php

class Employee_model extends CI_Model{

    function saveRecords($data){
        
        $this->db->insert('emp_tbl', $data);
        return true;
    }
}
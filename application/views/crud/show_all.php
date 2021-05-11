<html>
<!-- data table -->
<!-- <link rel="stylesheet" href="cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> -->
    


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> -->
		<!---------------------------Display Messages----------------------------> 	
    <div class="col-md-12 mx-auto">
    <?php if($this->session->flashdata('delete_emp')) { ?>
    	<?php echo '<p class="alert alert-danger mt-3 text-center" id="delete">' 
          .$this->session->flashdata('delete_emp') . '</p>'; ?>
	  	<?php } $this->session->unset_userdata('delete_emp'); //unset session ?> 

      <?php if($this->session->flashdata('add_emp')) { ?>
    	<?php echo '<p class="alert alert-success mt-3 text-center" id="add">' 
          .$this->session->flashdata('add_emp') . '</p>'; ?>
	  	<?php } $this->session->unset_userdata('add_emp');  //unset session ?> 
      
      <?php if($this->session->flashdata('update_emp')) { ?>
    	<?php echo '<p class="alert alert-info mt-3 text-center" id="update">'
          .$this->session->flashdata('update_emp') . '</p>'; ?>
	  	<?php } $this->session->unset_userdata('update_emp');  //unset session ?> 
      </div>

  		<div class="card-body">


<a href="<?php echo base_url('create');?>" class="btn btn-outline-primary float-right mr-4 mb-4">
  Add Employee
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
  </svg>
</a>

</div>

<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> -->
<div class="card mt-3 mb-3 mx-auto col-md-12">
  		<div class="card-body">
<table id="dataTable" class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Contact No</th>
            <th>Address</th>
            <th>Age</th>
            <th>Edit</th>
            <th>Delete</th>            
        </tr>
    </thead>
    <tbody>
    <?php foreach ($employees as $employee): ?>
        <tr>
            <td><?php echo $employee->emp_id; ?></td>
            <td><?php echo $employee->name; ?></td>
            <td><?php echo $employee->designation; ?></td>
            <td><span>+91-</span><?php echo $employee->contact_no; ?></td>
            <td><?php echo $employee->address; ?></td>
            <td><?php echo $employee->age; ?></td>
                
            <!-- update -->  
            <td>            
                <!-- Button trigger modal -->
                <a href="<?php echo base_url('edit/'.$employee->emp_id)?>" class="btn btn-warning" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/> 
                    </svg>
                </a>
            </td>

            <td>
            <!-- delete  base_url($route['delete/id']) -->
                <a href="<?php echo base_url('delete/'.$employee->emp_id)?>" class="btn btn-danger" id="del" role="button">                    
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>                    
                </a>
            </td>        
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });      
</script>

<script>
  $(document).ready(function() {
  //hide message after 4sec
  
      setTimeout(function() {
	      document.getElementById("add").style.display = 'none';
	    }, 4000);
    
      setTimeout(function() {
	       document.getElementById("update").style.display = 'none';
	    }, 4000);
     
      setTimeout(function() {
	       document.getElementById("delete").style.display = 'none';
	    }, 4000);    
   
});
</script>
</html>
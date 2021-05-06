<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<body>
	<div class="container">
		
	<div class="card mt-3">
  		<div class="card-body">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
  Add New
</button>

<!-- Modal -->
<form method="POST" action="http://127.0.0.1/github/CRUD-IN-CODEIGNITER/index.php/create">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
  <div class="form-group">
    <label for="name">Employee Name</label>
    <input type="text" class="form-control" id="name" name="name" required/> 
  </div>
  <div class="form-group">
    <label for="contact_no">Contact No</label>
    <input type="text" class="form-control" id="contact_no" name="contact_no"  aria-describedby="emailHelp"> 
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
  </div>
  
  <div class="row">

  <div class="form-group col-md-8">
    <label for="designation">Designation</label>
    <select class="form-control" id="designation" name="designation">
	  <option selected>--select--</option>
      <option value="Deveops_engineer">DevOps Engineer</option>
      <option value="Network_administrator">Network Administrator</option>
      <option value="Cloud_architect">Cloud Architect</option>
      <option value="SQL_developer">SQL Developer</option>
      <option value="Web_designer">Web Designer</option>
	  <option value="Web_developer">Web Developer</option>
    </select>
  </div>
  
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Age</label>
    <input type="text" class="form-control" id="age" name="age">
  </div>
	
  </div><!--row-->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="save" value="Save Data" class="btn btn-primary"
		 onclick="<?php base_url()?>Crud/addEmployees">Save</button>
      </div>
    </div>
  </div>
</div>
</form><!--form-->
	  	</div>

          <?php
        // Load showAll_view
            $this->load->view('crud/show_all');
        ?>

	</div><!--card-->
</div>
</body>


</html>
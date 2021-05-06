<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Crud In CodeIgniter</title>
	<link rel="stylesheet"
	 href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	 integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
	 crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
	 integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
	 crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
	integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
	crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" 
	integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" 
	crossorigin="anonymous"></script>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">CRUD</a>
  </div>
</nav>
	
</head>
<body>
	<div class="container">
		<!-- <?php echo(base_url());?> -->
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
	</div>
</div>
</body>
<script>
	// $('#saveEmpForm').submit('click',function(){
	// 	var empName = $('#name').val();
	// 	var empContact = $('#contact_no').val();
	// 	var empAddress = $('#address').val();
	// 	var empDesignation = $('#designation').val();		
	// 	var empAge = $('#age').val();
		
	// 	$.ajax({
	// 		type : "POST",
	// 		url  : "welcome_message.php",
	// 		dataType : "JSON",
	// 		data : {name:empName, contact_no:empContact, address:empAddress,designation:empDesignation, age:empAge},
	// 		success: function(data){
	// 			alert("hy");
	// 			$('#name').val("");
				
	// 			$('#address').val("");
	// 			//$('#addEmpModal').modal('hide');
	// 			//listEmployee();
	// 		}
	// 	});
	// 	return false;
	// });
</script>
</html>
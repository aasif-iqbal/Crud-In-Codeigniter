<html>
<div class="col-md-6 mx-auto">
  <div class="card mt-4">
    <h5 class="card-header">Edit Employee Details</h5>
    <div class="card-body">
<form method="post" action="<?php echo base_url('update/'.$data->emp_id);?>">      
    <div class="form-group">
    <label for="name">Employee Name</label>
    <input type="text" class="form-control" id="name" name="name"  value="<?php echo  $data->name?>"/> 
        <?php  if(form_error('name')){ echo "<span style='color:red'>".form_error('name')."</span>";} ?>
  </div>
  <div class="form-group">
    <label for="contact_no">Contact No</label>
    <input type="text" class="form-control" id="contact_no" name="contact_no" 
     value="<?php echo $data->contact_no; ?>"/>
     <?php  if(form_error('contact_no')){ echo "<span style='color:red'>".form_error('contact_no')."</span>";} ?>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" id="address" name="address" rows="3">
     <?php echo $data->address; ?>
    </textarea>
    <?php  if(form_error('address')){ echo "<span style='color:red'>".form_error('address')."</span>";} ?>
  </div>
  
  <div class="row">
  <div class="form-group col-md-8">
    <label for="designation">Designation</label>
    <select class="form-control" id="designation" name="designation">
      <option selected><?php echo $data->designation; ?></option>
	
      <option value="Deveops_engineer">DevOps Engineer</option>
      <option value="Network_administrator">Network Administrator</option>
      <option value="Cloud_architect">Cloud Architect</option>
      <option value="SQL_developer">SQL Developer</option>
      <option value="Web_designer">Web Designer</option>
	  <option value="Web_developer">Web Developer</option>
    </select>
    <?php  if(form_error('designation')){ echo "<span style='color:red'>".form_error('designation')."</span>";} ?>
  </div>
  
  <div class="form-group col-md-4">
    <label for="exampleInputPassword1">Age</label>
    <input type="text" class="form-control" id="age" name="age" value="<?php echo $data->age?>">
    <?php  if(form_error('age')){ echo "<span style='color:red'>".form_error('age')."</span>";} ?>
  </div>
  <!-- value="<?php // set_value('first_name', $form['first_name']); ?>"  -->
    </div>
      <div class="float-right">
        <a class="btn btn-danger" href="<?php echo base_url('');?>">Back</a>        
        <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>
      </div>

      </form>
  </div>
  </div>
</html>
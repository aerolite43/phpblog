<div class="container">

<ul class="nav nav-tabs">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="<?php echo base_url('index.php/profile')?>">Profile</a></li>
  <li><a href="#">Messages</a></li>
</ul>
   <h1>Registration Page</h1>
    <?php echo validation_errors(); ?>
	<?php echo form_open(base_url('index.php/register/create')) ?>
  <div class="form-group">
    <label for="inputEmail1">Email address</label>
    <input type="email" class="form-control" id="inputEmail1" name="inputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="inputFirstName">First Name</label>
    <input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="First Name">
  </div>
    <div class="form-group">
    <label for="inputLastName">Last Name</label>
    <input type="text" class="form-control" id="inputLastName" name="inputLastName" placeholder="Last Name">
  </div>
	<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
  </div>
  <button type="submit" name="submit"  value="Create User" class="btn btn-default">Submit</button>
</form>
	<?php
		if (isset($title)){
			echo "Users has been succesfully added.";
		}		
	?>

</div>
<?php

include 'RRS_Conn.php';

if(isset($_POST['done'])){
	
	$id= $_GET['id'];
	$name = $_POST['name'];
	$phone_number = $_POST['phone_number'];
	$address = $_POST['address'];
	$date_of_birth = $_POST['date_of_birth'];
	
	$q = "update manageprofile set profile_id=$id, name='$name', phone_number='$phone_number', address='$address', date_of_birth='$date_of_birth' where profile_id=$id ";
	
	$query = mysqli_query($conn,$q);
    
    echo "<script> alert('Update Successfully!');window.location='RRS_custviewprofile.php' </script>";	
    	
}

?>

<!DOCTYPE html>
<html>
<head>
   <title>RRS - Edit Profile </title>
   
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='navigation_menu123.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> 
   </head>
   <body>
   
      <div class="col-lg-6 m-auto">
	    <form method="post">
		  <br><br><div class="card">
		    
			<div class="card-header bg-dark">
			   <h1 class="text-white text-center"> Edit Profile </h1>
			</div><br>
			<label> Name </label>
			<input type="text" name="name" class="form-control" required><br>
			<label> Phone_Number </label>
			<input type="text" name="phone_number" class="form-control" required><br>
			<label> Address </label>
			<input type="text" name="address" class="form-control" required><br>
			<label> Date_of_Birth </label>
			<input type="text" name="date_of_birth" class="form-control" required><br>
			
			
			<button class="btn btn-success" type="submit" name="done"> Update </button><br>
			
		  </div>
	    
	    </form>
	  </div>
     
   </body>
  </html>
   
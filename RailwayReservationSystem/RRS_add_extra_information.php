<?php

include 'RRS_Conn.php';

if(isset($_POST['done'])){
	$name = $_POST['name'];
	$phone_number = $_POST['phone_number'];
	$address = $_POST['address'];
	$date_of_birth = $_POST['date_of_birth'];
	$q = "INSERT INTO `manageprofile`(`name`, `phone_number`, `address`, `date_of_birth`) VALUES 
	      ('$name', '$phone_number', '$address' , '$date_of_birth' )";
	$query = mysqli_query($conn,$q);
    
    echo "<script> alert('Added Profile Successfully!');window.location='RRS_custviewprofile.php' 
    </script>";	
	
}

?>

<!DOCTYPE html>
<html>
<head>
   <title>RRS - Add Extra Information</title>
   
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
			   <h1 class="text-white text-center">Add Extra Information </h1>
			</div><br>
			<label> Name: </label>
			<input type="text" name="name" class="form-control" required><br>
			<label> Phone_number: </label>
			<input type="text" name="phone_number" class="form-control" required><br>
			<label> Address: </label>
			<input type="text" name="address" class="form-control" required><br>
			<label> Date_of_birth: </label>
			<input type="text" name="date_of_birth" class="form-control" required><br>
			<button class="btn btn-success" type="submit" name="done">Create</button><br>
			
		  </div>
	    
	    </form>
	  </div>
   
   
   </body>
  </html>

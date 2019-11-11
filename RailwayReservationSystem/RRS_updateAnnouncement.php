<?php

include 'RRS_Conn.php';

if(isset($_POST['done'])){
	
	$id = $_GET['id'];
	$AnnouncementTitle = $_POST['AnnouncementTitle'];
	$AnnouncementDetails = $_POST['AnnouncementDetails'];
	
	$q = " update announcement set AnnouncementID=$id, AnnouncementTitle='$AnnouncementTitle' , AnnouncementDetails='$AnnouncementDetails' where AnnouncementID=$id ";
	
	$query = mysqli_query($conn,$q);
    
    echo "<script> alert('Update Successfully!');window.location='RRS_viewAnnouncement.php' </script>";	
    	
}

?>

<!DOCTYPE html>
<html>
<head>
   <title>RRS - Update Announcement </title>
   
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
			   <h1 class="text-white text-center"> Update Announcement </h1>
			</div><br>
			<label> Announcement Title </label>
			<input type="text" name="AnnouncementTitle" class="form-control" required><br>
			<label> Announcement Details </label>
			<input type="text" name="AnnouncementDetails" class="form-control" required><br>
			
			<button class="btn btn-success" type="submit" name="done"> Update </button><br>
			
		  </div>
	    
	    </form>
	  </div>
     
   </body>
  </html>
   
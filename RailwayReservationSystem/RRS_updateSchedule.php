<?php

include 'RRS_Conn.php';

if(isset($_POST['done'])){
	
	$id = $_GET['id'];
	$TrainScheduleDate = $_POST['TrainScheduleDate'];
	$TrainScheduleDeparture = $_POST['TrainScheduleDeparture'];
	$TrainScheduleArrival = $_POST['TrainScheduleArrival'];
	$TrainScheduleDepartureTime = $_POST['TrainScheduleDepartureTime'];
	$TrainScheduleArrivalTime = $_POST['TrainScheduleArrivalTime'];
	$q = " update train_schedule set ScheduleID=$id, TrainScheduleDate='$TrainScheduleDate' , TrainScheduleDeparture='$TrainScheduleDeparture', TrainScheduleArrival='$TrainScheduleArrival', TrainScheduleDepartureTime='$TrainScheduleDepartureTime', TrainScheduleArrivalTime='$TrainScheduleArrivalTime' where ScheduleID=$id ";
	
	$query = mysqli_query($conn,$q);
    
    echo "<script> alert('Update Successfully!');window.location='RRS_viewSchedule.php' </script>";	
    	
}

?>

<!DOCTYPE html>
<html>
<head>
   <title>RRS - Update Train Schedule</title>
   
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
			   <h1 class="text-white text-center"> Update Train Schedule </h1>
			</div><br>
			<label> Schedule Date </label>
			<input type="text" name="TrainScheduleDate" class="form-control" required><br>
			<label> Departure </label>
			<input type="text" name="TrainScheduleDeparture" class="form-control" required><br>
			<label> Arrival </label>
			<input type="text" name="TrainScheduleArrival" class="form-control" required><br>
			<label> Departure Time (eg. 11:23am) </label>
			<input type="text" name="TrainScheduleDepartureTime" class="form-control" required><br>
			<label> Arrival Time (eg. 11:23am) </label>
			<input type="text" name="TrainScheduleArrivalTime" class="form-control" required><br>
			<button class="btn btn-success" type="submit" name="done"> Update </button><br>
			
		  </div>
	    
	    </form>
	  </div>
     
   </body>
  </html>
   
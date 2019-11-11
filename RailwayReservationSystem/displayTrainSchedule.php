
<<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href='RRS_Style.css' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
</head>
<body>
    <header>
	    <div class="main">
		   <ul>
		      <li><a href="RRS_Home.php">Home</a></li>
			  <li><a href="RRS_AboutUs.php">About Us</a></li>
			  <li  class="active"><a href="displayTrainSchedule.php">Book Ticket</a></li>
			  <li><a href="RRS_custviewAnnouncement">Announcement</a></li>
			  <li><a href="RRS_ContactUs.php">Contact Us</a></li>
			  <li><a href="RRS_custviewprofile.php">Profile</a></li>
			  <li><a href="login.php">Login</a></li>
			  <li><a href="register.php">Register</a></li>
		   <ul>
		</div>
	<div class="cointainer">
	<div class="col-lg-12">
		<br><br>
		<h1 class="text-warning text-center"> Search Train Schedule </h1>
		<br><br><br></br>
		<table class="table table-striped table-hover table-bordered">
		
			<tr class="bg-dark text-white text-center">
				
				<th> Schedule ID </th>
				<th> Train Schedule Date </th>
				<th> Train Schedule Departure Time </th>
				<th> Train Schedule Departure </th>
				<th> Train Schedule Arrival Time </th>
				<th> Train Schedule Arrival </th>
				<th> Book </th>
			</tr>
			
<?php

	include 'RRS_Conn.php';
	$q = "select * from train_schedule ";
	
	$query = mysqli_query($conn,$q);
	
	while($res = mysqli_fetch_array($query))
	{
		
	
?>

			<tr class="bg-white text-dark text-center">
				<td> <?php echo $res['ScheduleID']; ?> </td>
				<td> <?php echo $res['TrainScheduleDate']; ?> </td>
				<td> <?php echo $res['TrainScheduleDepartureTime']; ?> </td>
				<td> <?php echo $res['TrainScheduleDeparture']; ?> </td>
				<td> <?php echo $res['TrainScheduleArrivalTime']; ?> </td>
				<td> <?php echo $res['TrainScheduleArrival']; ?> </td>
				<td> <button class="btn-danger btn"> <a href="book.php?id=<?php echo $res['ScheduleID']; ?>" class="text-white"> Book </a> </button> </td>
			</tr>
			
		<?php
	}
			?>
		
		</table>
	</div>
	</div>
</header>
</body>
</html>
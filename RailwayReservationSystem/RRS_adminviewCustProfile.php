<!DOCTYPE html>
<html>
<head>

  <title>RRS - Admin View Customer Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link href='RRS_Style.css' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> 
  
</head>
<body>
<header>
  <div class="main">
		   <ul>
		      <li><a href="RRS_AdminHome.php">Home</a></li>
			  <li><a href="RRS_viewSchedule.php">Manage Train Schedule</a></li>
			  <li><a href="RRS_viewAnnouncement.php">Manage Announcement</a></li>
			  <li class="active"><a href="RRS_adminviewCustProfile.php">Manage Profile</a></li>
			  <li><a href="staff_login.php">Logout</a></li>
		   <ul>
		</div>
  <div class="container"> 
  <div class="col-lg-12">
    <br><br><br></br>  
    <h1 class="text-warning text-center"> Profile </h1>
	<br>
	<table class="table table-striped table-hover table-bordered">
	  
	  <tr class="bg-dark text-white text-center">
	    
		<th>Name</th>
		<th>Phone_Number</th>
		<th>Address</th>
        <th>Date_of_Birth</th>
		
		
	  </tr>
	  
	<?php
    include 'RRS_Conn.php';	
	$q = "select * from manageprofile";
	$query = mysqli_query($conn,$q);

    while($res = mysqli_fetch_array($query)){
    

    ?>
	  
	  <tr class="bg-white text-dark text-center">
	    <td><?php echo $res['name']; ?></td>
		<td><?php echo $res['phone_number']; ?></td>
		<td><?php echo $res['address']; ?></td>
        <td><?php echo $res['date_of_birth']; ?></td>
		
				  
	  </tr>
	  
	  <?php
	   
	   }
	   
	  ?>
	  
	    <td><button class="btn-dark btn"><a href="RRS_AdminHome.php " class="text-white">Home</a></td> 
	  </center>
	  </tr>
	
	</table>
  
  </div>
  </div>
</header>
</body>
</html>

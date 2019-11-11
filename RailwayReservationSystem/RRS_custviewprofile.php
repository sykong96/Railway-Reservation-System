<!DOCTYPE html>
<html>
<head>

  <title>RRS - Customer View Profile</title>
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
		      <li><a href="RRS_Home.php">Home</a></li>
			  <li><a href="RRS_AboutUs.php">About Us</a></li>
			  <li><a href="#">Book Ticket</a></li>
			  <li><a href="RRS_custviewAnnouncement">Announcement</a></li>
			  <li><a href="RRS_ContactUs.php">Contact Us</a></li>
			  <li  class="active"><a href="RRS_custviewprofile.php">Profile</a></li>
			  <li><a href="login.php">Logout</a></li>
		   <ul>
		</div>
  <div class="container"> 
  <div class="col-lg-12">
    <br><br><br></br>  
    <h1 class="text-warning text-center"> Personal Profile </h1>
	<br>
	<table class="table table-striped table-hover table-bordered">
	  
	  <tr class="bg-dark text-white text-center">
	    
		<th>Name</th>
		<th>Phone_Number</th>
		<th>Address</th>
        <th>Date_of_Birth</th>
		<th>Edit</th>
		
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
		<td><button class="btn-primary btn"><a href="
		RRS_EditExtraInformation.php?id=<?php echo $res['profile_id']; ?>" class="text-white"> Edit </a>
		    </button></td>
			  
	  </tr>
	  
	  <?php
	   
	   }
	   
	  ?>
	  
	  <tr class="bg-white text-white text-center">
	  <center>
	       <td><button class="btn-dark btn"><a href="RRS_add_extra_information.php " class="text-white">Create New Profile</a></td>
		   <td><button class="btn-dark btn"><a href="RRS_Home.php " class="text-white">Home</a></td> 
	  </center>
	  </tr>
	
	</table>
  
  </div>
  </div>
</header>
</body>
</html>

<!DOCTYPE html>
<html>
<head>

  <title>RRS - View Announcement</title>
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
			  <li class="active"><a href="RRS_custviewAnnouncement">Announcement</a></li>
			  <li><a href="RRS_ContactUs.php">Contact Us</a></li>
			  <li><a href="RRS_custviewprofile.php">Profile</a></li>
			  <li><a href="login.php">Login</a></li>
			  <li><a href="register.php">Register</a></li>
		   <ul>
		</div>
  <div class="container"> 
  <div class="col-lg-12">
    <br><br>  
    <h1 class="text-warning text-center"> View Announcement </h1>
	<br>
	<table class="table table-striped table-hover table-bordered">
	  
	  <tr class="bg-dark text-white text-center">
	    
		<th>Announcement ID</th>
		<th>Announcement Title</th>
		<th>Announcement Details</th>
		<th>View</th>
		
	  </tr>
	  
	<?php
    include 'RRS_Conn.php';	
	$q = "select * from announcement";
	$query = mysqli_query($conn,$q);

    while($res = mysqli_fetch_array($query)){
    

    ?>
	  
	  <tr class="bg-white text-dark text-center ">
	    <td><?php echo $res['AnnouncementID']; ?></td>
		<td><?php echo $res['AnnouncementTitle']; ?></td>
		<td><?php echo $res['AnnouncementDetails']; ?></td>
		
		<td><button class="btn-primary btn"><a href="
		announcement.php?id=<?php echo $res['AnnouncementID']; ?>" class="text-white"> View </a>
		    </button></td>
			  
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

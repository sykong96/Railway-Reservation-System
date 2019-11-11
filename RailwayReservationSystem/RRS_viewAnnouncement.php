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
		      <li><a href="RRS_AdminHome.php">Home</a></li>
			  <li><a href="RRS_viewSchedule.php">Manage Train Schedule</a></li>
			  <li class="active"><a href="RRS_viewAnnouncement.php">Manage Announcement</a></li>
			  <li><a href="RRS_adminviewProfile.php">Manage Profile</a></li>
			  <li><a href="staff_login.php">Logout</a></li>
      </ul>
      </div>
  
  <div class="container"> 
  <div class="col-lg-12">
    <br><br><br></br>  
    <h1 class="text-warning text-center"> Announcement </h1>
	<br>
	<table class="table table-striped table-hover table-bordered">
	  
	  <tr class="bg-dark text-white text-center">
	    
		<th>Announcement ID</th>
		<th>Announcement Title</th>
		<th>Announcement Details</th>
		<th>Delete</th>
		<th>Update</th>
		
	  </tr>
	  
	<?php
    include 'RRS_Conn.php';	
	$q = "select * from announcement";
	$query = mysqli_query($conn,$q);

    while($res = mysqli_fetch_array($query)){
    

    ?>
	  
	  <tr class="bg-white text-dark text-center">
	    <td><?php echo $res['AnnouncementID']; ?></td>
		<td><?php echo $res['AnnouncementTitle']; ?></td>
		<td><?php echo $res['AnnouncementDetails']; ?></td>
		<td><button class="btn-danger btn"> <a href="
		RRS_deleteAnnouncement.php?id=<?php echo $res['AnnouncementID']; ?>" class="text-white"> Delete </a>
		    </button></td>
		<td><button class="btn-primary btn"><a href="
		RRS_updateAnnouncement.php?id=<?php echo $res['AnnouncementID']; ?>" class="text-white"> Update </a>
		    </button></td>
			  
	  </tr>
	  
	  <?php
	   
	   }
	   
	  ?>
	  
	  <tr class="bg-white text-white text-center">
	  <center>
	       <td><button class="btn-dark btn"><a href="RRS_insertAnnouncement.php " class="text-white">Add Announcement</a></td>
		   <td><button class="btn-dark btn"><a href="RRS_AdminHome.php " class="text-white">Home</a></td> 
	  </center>
	  </tr>
	
	</table>
  
  </div>
  </div>
</header>
</body>
</html>

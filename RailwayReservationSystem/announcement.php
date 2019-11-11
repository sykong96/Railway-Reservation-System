<!DOCTYPE html>
<html>
<head>
<title>Announcement</title>
<br></br>
<link href='RRS_AnnouncementStyle.css' rel='stylesheet'>
<?php
include_once "RRS_Conn.php";
?>

</head>
<body>
<header>
	    <div class="main">
		   <ul>
		      <li><a href="RRS_Home.php">Home</a></li>
			  <li><a href="RRS_AboutUs.php">About Us</a></li>
			  <li><a href="displayTrainSchedule.php">Book Ticket</a></li>
			  <li class="active"><a href="RRS_custviewAnnouncement">Announcement</a></li>
			  <li><a href="RRS_ContactUs.php">Contact Us</a></li>
			  <li><a href="RRS_custviewprofile.php">Profile</a></li>
			  <li><a href="login.php">Login</a></li>
			  <li><a href="register.php">Register</a></li>
		   <ul>
		</div>
<div align="center">
<br><br><br></br>
<?php
	$sql = "SELECT * FROM announcement ";
	$result = $conn->query($sql);
	$sql2 ="SELECT AnnouncementTitle FROM announcement";
	$result2 = $conn->query($sql2);
	$rowcount=mysqli_num_rows($result2);
	$r=0;
	echo "<table class=tb1 cellspacing=10>";
	echo "<th class=th1>Announcement</th>";
	while($row = mysqli_fetch_assoc($result)) 
	{
        echo "<tr>";
		echo "<td class=td1><span class=sp3>".$row["AnnouncementTitle"]."</span>";
		echo "<br /><span class=sp2>".$row["AnnouncementDetails"]."</span>";
		echo "<hr class=line>";
		echo "</td></tr>";
    }
    echo "</table><br /><br />";
	
?>
</div>
<br><br><br><br>
</header>
</body>
</html>
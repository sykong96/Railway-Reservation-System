<?php
 
 include 'RRS_Conn.php';
 
 $id = $_GET['id'];
 $query1 = "DELETE FROM `announcement` WHERE AnnouncementID = $id ";
 
 mysqli_query($conn,$query1);
 
 echo "<script> alert('Delete Successfully!');window.location='RRS_viewAnnouncement.php' </script>";
 

?>
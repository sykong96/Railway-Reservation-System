<?php
 
 include 'RRS_Conn.php';
 
 $id = $_GET['id'];
 $query1 = "DELETE FROM `train_schedule` WHERE ScheduleID = $id ";
 
 mysqli_query($conn,$query1);
 
 echo "<script> alert('Delete Successfully!');window.location='RRS_viewSchedule.php' </script>";
 

?>
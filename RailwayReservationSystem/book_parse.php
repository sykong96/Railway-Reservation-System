<?php

include 'RRS_Conn.php';


	$PassengerName = $_POST['PassengerName'];
	$PassengerIC = $_POST['PassengerIC'];
	$PassengerPhone = $_POST['PassengerPhone'];
	$TicketDate = $_POST['TicketDate'];
	$TicketTime = $_POST['TicketTime'];
	$q = " INSERT INTO trainticket( TicketDate, TicketTime, PassengerName, PassengerIC, PassengerPhone) VALUES ( '$TicketDate', '$TicketTime', '$PassengerName', '$PassengerIC', '$PassengerPhone')";
	
	$query = mysqli_query($conn,$q);
	
	echo "<script> alert('Book Successfully!');window.location='displayTrainTicket.php'</script>";
?>
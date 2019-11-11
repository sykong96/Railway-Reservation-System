<?php

include 'RRS_Conn.php';

$id= $_GET['id'];

$q = " DELETE FROM `trainticket` WHERE TicketID = $id ";

mysqli_query($conn, $q);

echo "<script> alert('Delete Successfully!');window.location='displayTrainTicket.php'</script>";
?>
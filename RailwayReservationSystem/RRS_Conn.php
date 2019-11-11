<!---Test Database Connection--->

<?php

	$dbServername="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbName="rrs_database";
	
	$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName );
	
?>
<?php
	
		
		include_once 'RRS_Conn.php';
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nationality = $_POST['nationality'];
		$icpassport = $_POST['icpassport'];
		$email = $_POST['email'];
		
		
		$sql = "INSERT INTO user(UserName, Password, UserType,UserNationality,UserIC,UserEmail) VALUES ('$username','$password','passenger','$nationality','$icpassport','$email')";
		
	
		$res=mysqli_query($conn, $sql);
	
		if($res){
			echo "Successfully Register";
		}else{
			echo "Register Failed";
			echo "Error : ".mysqli_error();
		}


?>


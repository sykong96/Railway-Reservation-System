<?php

	include_once 'RRS_Conn.php';
	
	if(isset($_POST['reset'])){
		$password=$_POST['password'];
		$name = $_GET['UserName'];
		
		$changepass=mysqli_query($conn,"UPDATE user SET Password='".$password."' WHERE UserName='".$name."'");
		if($changepass){
			echo 'Your Password is changed.';
			header('Refresh:2;url=login.php');
		}else{
			echo 'error';
		}
	}

?>

<html>
<head>
	<title>Reset Password</title>
	<style>
	
		body{
			background-color:   #FCFDD3 
		}
		
		#header{
			text-align :center;
			background-color: #2E1C0C ;
			height:40px;
			color: #ccc2d5 ;
			
		}
	
	
		#container{
			
			height:300px;
			border-style: solid;
			border-width: 3px;
			border-color: #425496 ;
			padding:20px;
			background-color: #FFFFFD ;
			
		}
		
		form{
			
		
			font-family:arial,sans-serif;
			font-weight:bold;
			text-align:center;
			font-size:20px;
		}
		
		input[type=text], select {
			  width: 35%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  border-radius: 4px;
			  box-sizing: border-box;
		}
		
		#footer{
			clear:both;
			padding:10px;
			color: #a9aad7 ;
			text-align: center;
		}
		
		.button {
		  background-color: #251D0D;
		  border: none;
		  color: white;
		  padding: 10px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
		}
		
		
		
		
	
	</style>
	
</head>

<style>




</style>

<body>

	<div id="header">
		<h1>Reset Password</h1>
	</div>
	
	
	
	<div id="container">
	
		<form method="post">
			
				<br><br>Set Password?<br><br><input type ="password" placeholder="Your new password..." name="password"><br><br>
				
	
				<br>
				<button class="button" type="submit" name="reset" >Reset</button>
											
			
		</form>
		
	
	</div>
	
	<div id="footer">
		
		<p> Copyright &copy; 2019 RRS</p>
		
	</div>
		

</body>



</html>
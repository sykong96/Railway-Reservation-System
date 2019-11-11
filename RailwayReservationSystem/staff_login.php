<html>




<head>
	<title>Staff Login</title>
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
		<h1>Staff Login</h1>
	</div>
	
	
	
	<div id="container">
	
		<form action="staff_login_parse.php" method="post">
			
				Username<br><input type ="text" placeholder="username" name="username"><br><br>
				Password <br><input type = "password" placeholder="password" name="password"><br><br>
	
				<br>
				<button class="button" type="submit" name="submit" >Login</button>
				
				<?php
					if(@$_GET['Empty']==true)
					{
				?>
					<div class="alert-light text-danger"><?php echo $_GET['Empty'] ?></div>
				<?php
					}
	
				?>
	
	
				<?php 
					if(@$_GET['Invalid']==true)
									{
				?>
					<div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
				<?php
					}
				?>
				
				
				
			
		</form>
		
		
		
			
			
	
	</div>
	
	<div id="footer">
		
		<p> Copyright &copy; 2019 RRS</p>
		
	</div>
		

</body>



</html>
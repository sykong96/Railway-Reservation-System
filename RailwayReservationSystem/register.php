<html>
<head>
	<title>Registration</title>
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
			padding:80px;
			background-color: #FFFFFD ;
			
		}
		
		form{
			font-family:arial,sans-serif;
			font-weight:bold;
			text-align:center;
			font-size:20px;
			padding: 25px 50px 75px 100px;
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
		<h1>Registration</h1>
	</div>
	
	<div id="container">
	
		<form action="register_parse.php" method="post">
		
			<table align="center">
				<tr>
					<td>Username</td>
					<td><input type ="text" placeholder="username" name="username"></td>
				
				</tr>
				<tr>
					<td>Password</td>
					<td><input type = "password" placeholder="password" name="password"></td>
				</tr>
				<tr>
					<td>Nationality</td>
					<td><select name="nationality">
						<option value="Malaysian">Malaysian</option>
						<option value="Non-Malaysian">Non-Malaysian</option>
					</select></td>
				
				</tr>
				<tr>
					<td>IC/Passport Number</td>
					<td><input type = "text" placeholder="IC/Passport Number" name="icpassport"></td>
				
				</tr>
				<tr>
					<td>Email</td>
					<td><input type ="text" placeholder="email" name="email"></td>
				
				</tr>
			
			</table>
			<br><br>
				<button class="button" type="submit" name="register">Register</button>
			
		</form>
	
	</div>
	
	<div id="footer">
		
		<p> Copyright &copy; 2019 RRS</p>
		
	</div>
		

</body>



</html>
<?php
		
		session_start();		
		include_once 'RRS_Conn.php';
				
		
		if(isset($_POST['submit']))
		{
			if(empty($_POST['username']) || empty($_POST['password']))
			{
				header("location:staff_login.php?Empty= Please Fill in the Blanks");
			}
			else
			{
				$query="select * from user where UserName='".$_POST['username']."' and Password='".$_POST['password']."' and UserType='staff'";
	
				$res=mysqli_query($conn,$query) or die ("Failed to query database ");
				
				if(mysqli_fetch_assoc($res))
				{
					$_SESSION['Staff']=$_POST['username'];
					header("location:RRS_AdminHome.php");
				}
				else
				{
					header("location:staff_login.php?Invalid= Please Enter Correct Username and Password");
				}
			}				
		}
		else
		{
			echo 'Not Working';
		}
			
			
		
		
		
		
?>

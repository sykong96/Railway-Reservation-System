<!DOCTYPE html>
<html>
<head>
	<title></title>
	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="col-lg-6 m-auto">
		
		<form action="book_parse.php" method="post">
		
			<br><div class="card">
			
				<div class="card-header bg-dark">
					<h1 class="text-white text=center"> Book Train Ticket </h1>
				</div>
				
				<br>
				<label> Passenger Name: </label>
				<input type="text" name="PassengerName" class="form-control"><br>
				
				<label> Passenger IC: </label>
				<input type="text" name="PassengerIC" class="form-control"><br>
				
				<label> Passenger Phone: </label>
				<input type="text" name="PassengerPhone" class="form-control"><br>
				
				<label> Ticket Date: </label>
				<input type="text" name="TicketDate" class="form-control"><br>
				
				<label> Ticket Time: </label>
				<input type="text" name="TicketTime" class="form-control"><br>
				
				<button class="btn btn-success" type="book" name="done"> Book </button>
				<br>
				
			</div>
		
		</form>
	</div>

</body>
</html>
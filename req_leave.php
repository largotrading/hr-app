<?php
	include('connection/connection.php');
	include('welcome.php');
	
	if ($username == '' ){
		header("location: index.php");
	}else{
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$application_date 	= date("Y-m-d");
			$leave_start_date 	= $_REQUEST['leave_start_date'];
			$leave_end_date 	= $_REQUEST['leave_end_date'];
			$leave_type			= $_REQUEST['leave_type'];
			$status 			= "Pending";

			// $sql = "INSERT INTO leave (username, application_date, leave_start, leave_end, department, status) VALUES ('$username','$application_date','$leave_start_date', '$leave_end_date', '$department_id ', '$leave_type','$status')";
			$sql = "INSERT INTO leave(username) VALUES ('$username')";
			
 			if ($conn->query($sql) === TRUE) {
			  echo "New record created successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	}


	// function updateTable(){
	// 	$sql2 = "SELECT * FROM leave WHERE username = $_SESSION['username']";
	// 	$result2 = $conn->query($sql2);
	// 	if ($result2->num_rows > 0) {
		  
	// 	}
	// }
	
?>


<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>
            Largo - HRMS
        </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Largo Trading</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="home_u">Home </a></li>
		    </ul>

		     <ul class="nav navbar-nav navbar-right">
		      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo(" "  .$firstname) ?>  </a></li>
		      <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
		    </ul>
		</div>
	</nav>


	<div class="row ">
       <div class="col-md-3"></div> 
       <div class="col-md-6">
			<div class="container-fluid text-center well">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">

						

						<h4 class="text-primary">Staff Leave Requesting Form</h4> <br>
						<br>

						<form action ="#" method="post" >
							
							<!-- <label for = "application_date" class="form-label">Application Date</label>  
							<input type="date" id="application_date" name="application_date" class="form-control input-lg input-forme" ><br> -->

							<label for = "application_date" class="form-label">Leave start Date</label>  
							<input type="date" id="leave_start_date" name="leave_start_date" class="form-control input-lg input-forme"><br>
							
							<label for = "application_date" class="form-label">Leave End Date</label>  
							<input type="date" id="leave_end_date" name="leave_end_date" class="form-control input-lg input-forme"><br>
					
							<select  id="leave_type" name="leave_type" class="form-control input-lg input-forme" >		
								<option value="def" disabled selected>Select leave Type</option> 
								<option value="anual">Anual Leave</option> 
								<option value="casual">Casual Leave</option>
								<option value="medical">Meadical Leave</option>
							</select>
							<br>
							<input type="text" id="reson" name="reson" class="form-control input-lg input-forme" placeholder="Reson of Leave"><br>
							<button type="submit" class="bnt btn-primary btn-lg">Submit For Approvel</button> 
							<button type="button" class="bnt btn-default btn-lg">Return to Home</button> 
						</form>

					</div>
					<div class="col-md-3"></div>
				</div>
				
				
			</div>
		</div>
		<div class="col-md-3"></div> 
	</div>


		<div class="row ">
       <div class="col-md-3"></div> 
       <div class="col-md-6">
			<div class="container-fluid text-center well">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<h4 class="text-primary">Staff Leave Status</h4>

						<!-- Get data from database and update here  -->

						<div class="container-fluid well">
							<table class="table table-condensed">
								<thead>
									<tr class="text-center">
										<th>No</th>
										<th>Date</th>
										<th>Number of Days</th>
										<th>Leave Type</th>
										<th>Status</th>

								</thead>
								<tbody>
									<tr>
										<?php 

										?>
									</tr>
								</tbody>
							</table>

						</div>


					</div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div> 




	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
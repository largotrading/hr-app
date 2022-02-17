<?php
	include('connection/connection.php');
	include('welcome.php');

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
		      <li class="active"><a href="#">Home</a></li>
		      <li><a href="#">Edit</a></li>
		      <li><a href="#">Time Sheet</a></li>
		      <li><a href="#">Salary Details</a></li>
		    </ul>

		     <ul class="nav navbar-nav navbar-right">
		      <li><a href="#"><span class="glyphicon glyphicon-user"></span> ------- </a></li>
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
						<h4>Update New Password </h4>
						<form action="#" >

							<input type="password" id="old_password" name="old_password" class="form-control input-lg input-forme"   placeholder="Existing Password" ><br>
							<input type="password" id="new_password" name="new_password" class="form-control input-lg input-forme"   placeholder="New Password" ><br>
							<input type="password" id="new_password2" name="new_password2" class="form-control input-lg input-forme"   placeholder="Confirm New Password" ><br>
							<button type="submit" class="bnt btn-primary btn-lg">Update Pass</button>

						</form>

					</div>
				</div>
				
				
			</div>
		</div>
	</div>


	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>

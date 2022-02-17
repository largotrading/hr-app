<?php
// Initialize the session
	include('connection/connection.php');
	include('welcome.php');
	if ($department_id == '2'){

	}else{
		header("location: index.php");
	}
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		
	}else{
		$sql = "SELECT * from hrreview";
		$result = $conn->query($sql);
		// echo ($result);
	}	

	
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
	      <li><a href="home_hr.php">Home</a></li>
	      <li class="dropdown active">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#">HR-Option
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="staff.php">Staff </a></li>
	          <li><a href="#">Manager</a></li>
	          <li><a href="department.php">Deparment</a></li>

	        </ul>
	      </li>


	    </ul>

	     <ul class="nav navbar-nav navbar-right">
	     	<li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo(" "  .$firstname) ?> </a></li>
	      	<li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>

	    </ul>
	  </div>
	</nav>

	<div class="row ">
       <div class="col-md-3">
       		<div class="container-fluid text-center well"> 
       			<a class="text-primary" href ="staff_approvel.php">New Staff Approvel </a> <br> <br>
       			<a class="text-primary" href ="staff_ full_detail.php">Full Staff Detail</a>  <br> <br>
       			<a class="text-primary" href ="staff_ review.php">Staff Review</a>  <br> <br>
       			<a class="text-primary" href ="#">Staff End Hire</a><br> <br>
       			<a class="text-primary" href ="#">Staff Leave Callender</a><br> <br>
        	</div>
       </div> 
       <div class="col-md-9">
            <div class="container-fluid text-center well"> 
            	<form action="#" class="form">
            		<div class="text text-left col-md-2">
            			<label class="text " for="username">Enter the Employee ID  </label>
            		</div>
            		<div class="col-md-2">
            			<input type="text " class = "form-control text-center" name="username">
            			
            		</div>
            		<div class="col-md-2">
            			<button type="submit" class="btn btn-primary">Search for Review</button>
            		</div>


            	</form>
            	<br><br>    

            	<table class="table">
            		<thead>
            			<tr>
            				<th> SN </th>
            				<th> Employee ID</th>
            				<th> Date </th>
            				<th> Issued by </th>
            				<th> Type</th>
            				<th> Action</th>
            			</tr>
            		</thead>
            		<tbody>
            			<tr>
            				<form class = "form-control">
            					<td><label> - </label></td>
	            				<td><input class = "form-control" type="text" name=""></td>
	            				<td><input class = "form-control" type="text" name=""></td>
	            				<td><input class = "form-control" type="text" name=""></td>
	            				<td><input class = "form-control" type="text" name=""></td>
	            				<td><button class="btn btn-primary" type="submit" >Search</button></td>
            				</form>
            				
            			</tr>
            			 <?php 
							if ($result->num_rows > 0) {
								while($row 		= $result->fetch_assoc()){  
									$did 		= $row['id'];
									$dusername 	= $row['username'];
									$ddate 		= $row['date'];
									$dreview_by = $row['review_by'];
									$dtype 		= $row['type'];

									?>
									
			            			<tr>
			            				<td><?php echo "$did";?></td>
			            				<td></td>
			            				<td></td>
			            				<td></td>
			            				<td></td>
			            				<td></td>

			            			</tr>
			            		<?php 
			            		}
			            	}
			            	?>

            		</tbody>
            	</table>

        	</div>
        </div>

       
    </div>

	    <script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
</body>

</html>

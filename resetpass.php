<?php
include('connection/connection.php');

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
            
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>
            Largo - HRMS
        </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">


	</head>

	<body>
		<div class="panel-header ">

            <div class="text-center" > <p align='center'  class="text-primary"><h2 class="text-primary" > New Staff Sign Up Form</h2></p>
            	<p align="center" class="text-info">Please fill in this for to create an account </p>
            	
            </div>

        </div>

        <div class="row ">
           <div class="col-md-3"></div> 
           <div class="col-md-6">
                <div class="container-fluid text-center well">        

                     <form action="#">
                        
                        <input type="text" id="username" class="form-control input-lg input-forme"   placeholder="User Name" ><br>
                        <div class="col-md-6">
                            <input type="password" id="pass" class="form-control input-lg input-forme"   placeholder="New Password">     
                        </div>
                        <div class="col-md-6">
                            <input type="password" id="pass" class="form-control input-lg input-forme"   placeholder="Re-Password">    
                            <br>

                        </div>
                        
                       
                       
                        <div class="col-md-6">
                            <input type="text" id="mobile" class="form-control input-lg input-forme"   placeholder="Mobile Number">     
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="nic" class="form-control input-lg input-forme"   placeholder="NIC">
                            <br>
                        </div>


                        
                        
                        <input type="submit" class="btn btn-success" value="Submit For Approval">
                    
                </div>
                
            </form>

                </div>       
           </div>
           <div class="col-md-3"></div> 

        </div>
        

		
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

	</body>
	</html>

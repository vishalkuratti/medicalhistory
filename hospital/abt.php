<?php
	session_start();

?>
<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/c33a37a99e.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Sansita:700i" rel="stylesheet">
		<title> Helth History </title>
	</head>
	<body>
		<!-- Fixed navbar -->
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
       	 				</button>
					<a class="navbar-brand" href="index.php">Case history</a>
        			</div>
        			<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>       							<li><a href="quickaccess.php"><i class="fa fa-tasks" aria-hidden="true"></i> Quick Access</a></li>
						<li><a href="abt.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
						<li><a href="#contact" data-toggle="modal"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
						<li><li><a href="out.php" class="btn btn-warning btn-md"> Logout</a></li></li>	
          				</ul>
				</div><!--/.nav-collapse -->
      			</div>
		</div>
		
	</div>
		<div class="jumbotran text-center bg1">
		<div class="container">
			
		<br><br>
			<h3>comming soon</h3>	
		</div>
		</div>
		<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
			<div class="container">
				<div class="navbar-text pull-left">
					<i class="fa fa-copyright"></i> 2018 Medical history
				</div>
			</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	 <div class="modal fade" id="contact" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h4>Contact<h4>
    			</div>
    			<div class="modal-body">
    				<p>For general inquiries, please send an email to any of the mail id's</p>
						<ul><li>himeshsk175@gmail.com</li>
						<li>reach.varun.ms@gmail.com</li>
						<li>sanjanabhargava3009@gmail.com</li>
						<li>vishal.kuratti@gmail.com</li></ul>
    			</div>
    			<div class="modal-footer">
    				<a class="btn btn-primary" data-dismiss="modal">Close</a>
    			</div>
    		</div>
    	</div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</body>
</html>

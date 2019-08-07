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
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Case history</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>        
            <li><a href="abt.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tasks" aria-hidden="true"></i> Quick Access <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="cat.php">Enter Expense</a></li>
                <li><a href="typ.php">Predicted Expense</a></li>
				<li><a href="bud.php">Budgeting</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tasks" aria-hidden="true"></i> Setup <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.php">Import Expense</a></li>
				<li><a href="buds.php">Budget Setup</a></li>
              </ul>
            </li>  
            <li><a href="abt.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
            <li><a href="#contact" data-toggle="modal"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
			<li><li><a href="out.php" class="btn btn-warning btn-md"> Logout</a></li></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
		<center><div class="jumbotran text-center bg">
		<div class="container">
			<h1 style="font-size:70px; color:grey;">Case history</h1>
		<br><br>
			
				
			
			<div class="col-lg-2">
			<h3 class="text-center"><span class="glyphicon glyphicon-user"></span> Welcome   <?php echo $_SESSION['username']; ?></h3></td></div>
			
			
			
			<br><br>
			<br>
			
			
			
			</div>
		</div></center>
		<div class="row text-center">
			
			<div class="col-lg-2 col-md-4 col-sm-2 col-xs-1">
			<a href="cat.php" class="btn btn-primary btn-lg button"><span class="glyphicon glyphicon-pencil"></span> Enter the day's Expense </a></div>
			
			<div class="col-lg-2 col-md-4 col-sm-2 col-xs-1">
			<a href="typ.php" class="btn btn-primary btn-lg button"><span class="glyphicon glyphicon-list-alt"></span> Predicted Expense</a></div>
			<div class="col-lg-3 col-md-4 col-sm-1 col-xs-1">
			<a href="bud.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-list-alt"></span> Budgeting</a></div>
		</div>
		<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
			<div class="container">
				<div class="navbar-text pull-left">
					<i class="fa fa-copyright"></i> 2017 Virtual Financier
				</div>
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

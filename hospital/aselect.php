<?php
	session_start();

	if (!isset($_SESSION['updated']))
	{
		$_SESSION['updated'] = 0;
	}

	if (!isset($_SESSION['gooddb']))
	{
		$_SESSION['gooddb'] = 0;
	}

	else
	{
		$_SESSION['gooddb'] = 1;
	}
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
        			
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>       							<li><a href="quickaccess.php"><i class="fa fa-tasks" aria-hidden="true"></i> Quick Access</a></li>							
						<li><a href="abt.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
						
						<li><a href="#contact" data-toggle="modal"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
						<li><li><a href="out.php" class="btn btn-warning btn-md"> Logout</a></li></li>
          				</ul>
      			</div>
		</div>
		
	</div>
	<center><div>
		<div class="container">
			<h1 style="font-size:70px; color:grey;">Case history</h1>
			<div class="col-lg-2">
			<h2 class="text-center"> Welcome   <?php echo $_SESSION['username']; ?></h2>
			
			
			
			</div>
		</div></center>
		<div class="info">
			
			<div>
			<a href="register.php" > Register user </a></div>
			
			<div >
			<a href="insert.php" > Insert case history</a></div>
			<div >
			<a href="bud.php" ></span> Budgeting</a></div>
		</div>
		<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
			<div class="container">
				<div class="navbar-text pull-left">
					<i class="fa fa-copyright"></i> 2018 Medical history
				</div>
			</div>
		
</body>
</html>

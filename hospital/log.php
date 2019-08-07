<?php
	session_start();
	include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/c33a37a99e.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sansita:700i" rel="stylesheet">
</head>
<body>
	<!-- Fixed navbar -->
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
       	 				</button>
					<a class="navbar-brand" href="#home">Case history</a>
        			</div>
        			
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li> 						<li><a href="#quickaccess"><i class="fa fa-tasks" aria-hidden="true"></i> Quick Access</a></li>
						<li><a href="#about"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
						<li><a href="#contact" data-toggle="modal"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
						<li><a href="log.php" class="btn btn-warning btn-md"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>	
          				</ul>
      			</div>
		</div>
		
	</div>
	
	<div class="info">
		<form action="log.php" method="post">
		
			<div >
				<center><h2>Login Form</h2></center>
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button class="login_button" name="login" type="submit">Login</button>
				<a href="uregister.php"><button type="button" class="register_btn">Register</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['login']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				
				$sql = "select * from admin WHERE username='$username' AND password='$password' ";
				$sql1 = "select * from personal WHERE username='$username' AND password='$password' ";
				$result = $conn->query($sql);
				$result1 = $conn->query($sql1);
				if ($result->num_rows > 0 or $result1->num_rows > 0)
				{
					$sql = "select aadhar from admin WHERE username='$username'";
					$result = $conn->query($sql);
					$row = mysqli_fetch_assoc($result);
					$userid = $row['aadhar'];
					$_SESSION['username'] = $username;
					$_SESSION['aadhar'] = $userid;
					header('location:index.php');
				}
				else
				{
					echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
				}
			}	
			
		?>
		
	</div>
	<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
			<div class="container">
				<div class="navbar-text pull-left">
					<i class="fa fa-copyright"></i> 2018 Medical history
				</div>
			</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</body>
</html>

<?php
	session_start();
	include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/c33a37a99e.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sansita:700i" rel="stylesheet">
</head>
<body>
	<div class="info">
	
		<form action="register.php" method="post">
					<li>
                       				<span><label for="name">Aadhar Number</label></span>
							<input name="aadhar" type="text" placeholder="Enter your Aadhar number" required/>
					</li>
					<li>
                       				<span><label for="name">Username</label></span>
							<input type="text" placeholder="Enter Username" name="username" required>
					</li>
					<li>
						<span><label for="name">Password</label></span>
						<input class="active" name="password" type="text" placeholder="Enter Password" required>
					</li>
					<li>
						<span><label for="email">Confirm Password</label></span>
						<input name="cpassword" type="text" placeholder="Confirm password"  required>
					</li>
					<li>
						<p style="margin-top: 0.5px;font-size: 32pt;float:right">
						<button name="register" type="submit"><a href="select.php" style="color:#6A79A6;text-decoration:none" name="register">Register</a></p></button>   
						
					</li>
					<li>
						<p style="margin-top: 30.5px;font-size: 32pt;float:right">
						<a href="select.php" style="color:#6A79A6;text-decoration:none">Back</a></p>
					</li>
				</ol>
			
			

		</form>
		
		<?php
			if(isset($_POST['register']))
			{
				$aadhar=$_POST['aadhar'];
				$username=$_POST['username'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$sql = "select * from admin where username='$username'";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0)
					{
						echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
					}	
					else
					{
						$sql = "insert into admin values('$aadhar','$username','$password')";
						$result = $conn->query($sql);
						
						if($result)
							{
								echo '<script type="text/javascript">alert("User Registered.. Go to login page to login")</script>';
								$query1 = "select admin from users WHERE username='$username'";
								$result = $conn->query($sql);
								$row = mysqli_fetch_assoc($result);
								$userid = $row['aadhar'];
								$_SESSION['username'] = $username;
								$_SESSION['aadhar']=$userid;
								header('location:select.php');	
							}
							else
							{
								echo '<script type="text/javascript">alert("why")</script>';
							}
					}
				}
					
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
				//echo "error";
			}
		?>
	</div>
	<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
			<div class="container">
				<div class="navbar-text pull-left">
					<i class="fa fa-copyright"></i> 2018 Medical history
				</div>
			</div>
</body>
</html>

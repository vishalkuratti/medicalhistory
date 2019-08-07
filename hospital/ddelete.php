<?php
	session_start();
	include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>User deletion</title>
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
	<div class="info">
	
		<form action="delete.php" method="post">
					<li>
                       				<span><label for="aadhar">Aadhar Number</label></span>
							<input name="aadhar" style="color:#000" type="text" placeholder="Enter Aadhar number" required/>
					</li>
					<li>
						<span><label for="dob">Date of Birth</label></span>
						<input name="dob" type="date" style="color:#000" placeholder="In yyyy/mm/dd format"  required>
					</li>
					<li>
						<span><label for="email">Email ID</label></span>
						<input name="email" type="email" style="color:#000" placeholder="Enter Registered Email ID"  required>
					</li>
					<li>
						<span><label for="Phone">Phone number</label></span>
						<input name="phone" type="text" style="color:#000" placeholder="Enetr Registered number"  required>
					</li>
					<li>
						<span><label for="date">docter visit Date</label></span>
						<input class="active" name="dov" type="date" style="color:#000" placeholder="In yyyy/mm/dd format"  required>
					</li>
					<li>
						<p style="margin-top: 0.5px;font-size: 32pt;float:right">
						<button name="ddelete" type="submit"><a href="select.php" style="color:#6A79A6;text-decoration:none" name="delete">delete</a></p></button>   
						
					</li>
					<li>
					
						<p style="margin-top: 30.5px;font-size: 32pt;float:right">
						<a href="select.php" style="color:#6A79A6;text-decoration:none">Back</a></p>
					</li>
				</ol>
			
			

		</form>
		
		<?php
			if(isset($_POST['ddelete']))
			{
				$aadhar=$_POST['aadhar'];
				$dob=$_POST['dob'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$dov=$_POST['dov'];

					$sql = "select * from personal where aadhar='$aadhar' and dob='$dob' and email='$email' and phone='$phone'";
					$result = $conn->query($sql);
					$sql1 = "select * from H".$_POST['aadhar']." where dov='$dov'";
					$result1 = $conn->query($sql1);
					if ($result and $result1->num_rows > 0)
					{
						$sql = "delete from personal where aadhar='$aadhar'";
						$result = $conn->query($sql);
						if($result)
							{
								echo '<script type="text/javascript">alert("Case histroy Deleted..")</script>';
								header('location:registration.php');	
							}
							else
							{
								echo '<script type="text/javascript">alert("database error")</script>';
							}
					}
					else
					{
						echo '<script type="text/javascript">alert("User information is wrong .. Please try correct one!")</script>';
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

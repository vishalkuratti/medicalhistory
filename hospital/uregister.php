<?php

	session_start();
	include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>User registeration</title>
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
		<form action="uregister.php" method="post">
					<li>
                       				<span><label for="name">Aadhar Number</label></span>
							<input name="aadhar" style="color:#000" type="text" placeholder="Enter your Aadhar number" required/>
					</li>
					<li>
                       				<span><label for="name">name</label></span>
							<input name="name" style="color:#000" type="text" placeholder="Enter name" required/>
					</li>
					<li>
                       				<span><label for="name">Username</label></span>
							<input type="text" style="color:#000" placeholder="Enter Username" name="username" required>
					</li>
					<li>
						<span><label for="password">Password</label></span>
						<input class="active" style="color:#000" name="password" type="password" placeholder="Enter Password" required>
					</li>
					<li>
						<span><label for="email">Confirm Password</label></span>
						<input name="cpassword" type="password" style="color:#000" placeholder="Confirm password"  required>
					</li>
					<li>
						<span><label for="email">Date of Birth</label></span>
						<input name="dob" type="date" style="color:#000" placeholder="In yyyy/mm/dd format"  required>
					</li>
					<li>
						<span><label for="email">Gender</label></span>
						<input name="gender" type="text" style="color:#000" placeholder="Enter sex"  required>
					</li>
					<li>
						<span><label for="email">Blood Group</label></span>
						<input name="blood" type="text" style="color:#000" placeholder="Ex: O+ , A "  required>
					</li>
					<li>
						<span><label for="email">Email ID</label></span>
						<input name="mail" type="email" style="color:#000" placeholder="Enter valid Email ID"  required>
					</li>
					<li>
						<span><label for="Phone">Phone number</label></span>
						<input name="phone" type="text" style="color:#000" placeholder="Enetr Indian number"  required>
					</li>
					<li>
						<span><label for="email">Address</label></span>
						<input name="address" type="text" style="color:#000" placeholder="Enter Full address"  required>
					</li>
					<li>
						<span><label for="email"> Area Pincode</label></span>
						<input name="pin" type="text" style="color:#000" placeholder="Enter Pinciode"  required>
					</li>
					<li>
						<p style="margin-top: 0.5px;font-size: 32pt;float:right">
						<button name="register" type="submit"><a href="select.php" style="color:#6A79A6;text-decoration:none" name="register">Register</a></p></button>   
						
					</li>
					<li>
						<p style="margin-top: 30.5px;font-size: 32pt;float:right">
						<a href="log.php" style="color:#6A79A6;text-decoration:none">Back</a></p>
					</li>
				</ol>
			
			

		</form>
		
		<?php
			if(isset($_POST['register']))
			{
				$aadhar=$_POST['aadhar'];
				$name=$_POST['name'];
				$username=$_POST['username'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				$dob=$_POST['dob'];
				$gender=$_POST['gender'];
				$blood=$_POST['blood'];
				$email=$_POST['mail'];
				$phone=$_POST['phone'];
				$address=$_POST['address'];
				$pin=$_POST['pin'];

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
						
					$sql = "create table H".$_POST['aadhar']." (allergy varchar(100),blood varchar(8),diabetes varchar(10),consultant varchar(20),date date,hospital varchar(30), cause varchar(400 ), suggetion varchar(400),medication varchar(500), prescription varchar(1000), ndate date)";
					$result = $conn->query($sql);
					$sql = "insert into personal values('$aadhar','$name','$username','$password','$dob','$gender','$blood','$email','$phone','$address','$pin')";
						$result1 = $conn->query($sql);
						
						if($result and $result1)
							{
								echo '<script type="text/javascript">alert("User Registered.. Go to login page to login")</script>';
								header('location:index.php');		
							}
							else
							{
								echo '<script type="text/javascript">alert("Database error")</script>';
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
				echo "error";
			}
		?>
	</div>
	</body>
</html>

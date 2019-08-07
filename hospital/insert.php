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
	
		<form action="insert.php" method="post">
					<li>
                       				<span><label for="aadhar">Aadhar Number</label></span>
							<input class="active" name="aadhar" style="color:#000" type="text" placeholder="Enter patient Aadhar number" required/>
					</li>
					<li>
                       				<span><label for="allergy">allergy</label></span>
							<input class="active" name="allergy" style="color:#000" type="text" placeholder="allergy" required/>
					</li>
					<li>
                       				<span><label for="bp">Blood pressure</label></span>
							<input  type="text" style="color:#000" placeholder="Ex 120/80" name="bp" required>
					</li>
					<li>
						<span><label for="diabetes">diabetes</label></span>
						<input class="active" style="color:#000" name="diabetes" type="text" placeholder="Ex: FBS/PPBS ,RBS" required>
					</li>
					<li>
						<span><label for="doctor">consultant name</label></span>
						<input class="active" name="doctoer" type="text" style="color:#000" placeholder="doctor name"  required>
					</li>
					<li>
						<span><label for="date">Date</label></span>
						<input class="active" name="dov" type="date" style="color:#000" placeholder="In yyyy/mm/dd format"  required>
					</li>
					<li>
						<span><label for="hospital">Hospital</label></span>
						<input class="active" name="hospital" type="text" style="color:#000" placeholder="Hospital name"  required>
					</li>
					<li>
						<span><label for="visit">Cause of visit </label></span>
						<input class="active" name="visit" type="text" style="color:#000" placeholder="Observation"  required>
					</li>
					<li>
						<span><label for="suggetion"> Suggetion </label></span>
						<input class="active" name="suggetion" type="text" style="color:#000" placeholder=" Doctor's advice "  required>
					</li>
					<li>
						<span><label for="medication"> Medication </label></span>
						<input class="active" name="medication" type="text" style="color:#000" placeholder=" Medicine details "  required>
					</li>
					<li>
						<span><label for="prescription">Prescription</label></span>
						<input class="active" name="prescription" type="text" style="color:#000" placeholder="Prescription Details"  required>
					</li>
					<li>
						<span><label for="ndate"> Next visit date </label></span>
						<input class="active" name="ndate" type="text" style="color:#000" placeholder=" Next visit date "  required>
					</li>
					<li>
						<p style="margin-top: 0.5px;font-size: 32pt;float:right">
						<button name="insert" type="submit"><a href="select.php" style="color:#6A79A6;text-decoration:none" name="register">Register</a></p></button>   
						
					</li>
					<li>
						<p style="margin-top: 30.5px;font-size: 32pt;float:right">
						<a href="select.php" style="color:#6A79A6;text-decoration:none">Back</a></p>
					</li>
				</ol>
			
			

		</form>
		
		<?php
			if(isset($_POST['insert']))
			{
				$aadhar=$_POST['aadhar'];
				$allergy=$_POST['allergy'];
				$bp=$_POST['bp'];
				$diabetes=$_POST['diabetes'];
				$doctoer=$_POST['doctoer'];
				$dov=$_POST['dov'];
				$hospital=$_POST['hospital'];
				$visit=$_POST['visit'];
				$suggetion=$_POST['suggetion'];
				$medication=$_POST['medication'];
				$prescription=$_POST['prescription'];
				$ndate=$_POST['ndate'];
				
				$sql = "select TABLE_NAME from INFORMATION_SCHEMA.TABLES  where TABLE_NAME like H".$_POST['aadhar']."";
				$result = $conn->query($sql);
				if ($result->num_rows > 0)
				{
					$sql1 = "insert into H".$_POST['aadhar']." values('$allergy','$bp','$diabetes','$doctoer','$dov','$hospital','$visit','$suggetion','$medication','$prescription','$ndate')";
						$result1 = $conn->query($sql1);
						if($result1)
						{
							echo '<script type="text/javascript">alert("Information is added to database....")</script>';
						}
						else
						{
							echo '<script type="text/javascript">alert("Database f error")</script>';
						}
					}
				else
				{
					$sql = "create table H".$_POST['aadhar']." (allergy varchar(100),blood varchar(8),diabetes varchar(10),consultant varchar(20),date date,hospital varchar(30), cause varchar(400 ), suggetion varchar(400),medication varchar(500), prescription varchar(1000), ndate date)";
					$result = $conn->query($sql);
					if($result)
					{
						$sql = "insert into H".$_POST['aadhar']." values('$allergy','$bp','$diabetes','$doctoer','$dov','$hospital','$visit','$suggetion','$medication','$prescription','$ndate')";
						$result = $conn->query($sql);
						if($result)
						{
							echo '<script type="text/javascript">alert("Information is added to database....")</script>';
						}
						else
						{
							echo '<script type="text/javascript">alert("Database error")</script>';
						}
					}
					else
					{
							echo '<script type="text/javascript">alert("Database error create table")</script>';
					}
				}
			}
		?>
	</div>
	<div class="" role="navigation">
			<div class="container">
				<div class="navbar-text pull-left">
					<i class="fa fa-copyright"></i>
				</div>
			</div>
</body>
</html>

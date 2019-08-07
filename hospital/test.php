<?php	
	session_start();

	$file1 = "./script_outputs/CustID_".$_SESSION['userid']."_1_Daily_Markov.txt";
	$document1 = file_get_contents($file1);
	$input1 = substr($document1,0,4);
	
	$file2 = "./script_outputs/CustID_".$_SESSION['userid']."_2_Daily_Markov.txt";
	$document2 = file_get_contents($file2);
	$input2 = substr($document2,0,4);
	
	$file3 = "./script_outputs/CustID_".$_SESSION['userid']."_3_Daily_Markov.txt";
	$document3 = file_get_contents($file3);
	$input3 = substr($document3,0,4);
	
	$file4 = "./script_outputs/CustID_".$_SESSION['userid']."_4_Daily_Markov.txt";
	$document4 = file_get_contents($file4);
	$input4 = substr($document4,0,4);
	
	$file5 = "./script_outputs/CustID_".$_SESSION['userid']."_5_Daily_Markov.txt";
	$document5 = file_get_contents($file5);
	$input5 = substr($document5,0,4);
	
	$file6 = "./script_outputs/CustID_".$_SESSION['userid']."_6_Daily_Markov.txt";
	$document6 = file_get_contents($file6);
	$input6 = substr($document6,0,4);
	
	$file7 = "./script_outputs/CustID_".$_SESSION['userid']."_7_Daily_Markov.txt";
	$document7 = file_get_contents($file7);
	$input7 = substr($document7,0,4);

	$file8 = "./script_outputs/CustID_".$_SESSION['userid']."_1_Weekly_Markov.txt";
	$document8 = file_get_contents($file8);
	$input8 = substr($document8,0,4);
	
	$file9 = "./script_outputs/CustID_".$_SESSION['userid']."_2_Weekly_Markov.txt";
	$document9 = file_get_contents($file9);
	$input9 = substr($document9,0,4);
	
	$file10 = "./script_outputs/CustID_".$_SESSION['userid']."_3_Weekly_Markov.txt";
	$document10 = file_get_contents($file10);
	$input10 = substr($document10,0,4);
	
	$file11 = "./script_outputs/CustID_".$_SESSION['userid']."_4_Weekly_Markov.txt";
	$document11 = file_get_contents($file11);
	$input11 = substr($document11,0,4);
	
	$file12 = "./script_outputs/CustID_".$_SESSION['userid']."_5_Weekly_Markov.txt";
	$document12 = file_get_contents($file12);
	$input12 = substr($document12,0,4);
	
	$file13 = "./script_outputs/CustID_".$_SESSION['userid']."_6_Weekly_Markov.txt";
	$document13 = file_get_contents($file13);
	$input13 = substr($document13,0,4);
	
	$file14 = "./script_outputs/CustID_".$_SESSION['userid']."_7_Weekly_Markov.txt";
	$document14 = file_get_contents($file14);
	$input14 = substr($document14,0,4);

	$file15 = "./script_outputs/CustID_".$_SESSION['userid']."_1_Monthly_Markov.txt";
	$document15 = file_get_contents($file15);
	$input15 = substr($document15,0,4);
	
	$file16 = "./script_outputs/CustID_".$_SESSION['userid']."_2_Monthly_Markov.txt";
	$document16 = file_get_contents($file16);
	$input16 = substr($document16,0,4);
	
	$file17 = "./script_outputs/CustID_".$_SESSION['userid']."_3_Monthly_Markov.txt";
	$document17 = file_get_contents($file17);
	$input17 = substr($document17,0,4);
	
	$file18 = "./script_outputs/CustID_".$_SESSION['userid']."_4_Monthly_Markov.txt";
	$document18 = file_get_contents($file18);
	$input18 = substr($document18,0,4);
	
	$file19 = "./script_outputs/CustID_".$_SESSION['userid']."_5_Monthly_Markov.txt";
	$document19 = file_get_contents($file19);
	$input19 = substr($document19,0,4);
	
	$file20 = "./script_outputs/CustID_".$_SESSION['userid']."_6_Monthly_Markov.txt";
	$document20 = file_get_contents($file20);
	$input20 = substr($document20,0,4);
	
	$file21 = "./script_outputs/CustID_".$_SESSION['userid']."_7_Monthly_Markov.txt";
	$document21 = file_get_contents($file21);
	$input21  = substr($document21,0,4);
	
	$file22 = "./script_outputs/CustID_".$_SESSION['userid']."_1_Daily_PredictedTransaction.txt";
	$document22 = file_get_contents($file22);
	
	$file23 = "./script_outputs/CustID_".$_SESSION['userid']."_2_Daily_PredictedTransaction.txt";
	$document23 = file_get_contents($file23);
	
	$file24 = "./script_outputs/CustID_".$_SESSION['userid']."_3_Daily_PredictedTransaction.txt";
	$document24 = file_get_contents($file24);
	
	$file25 = "./script_outputs/CustID_".$_SESSION['userid']."_4_Daily_PredictedTransaction.txt";
	$document25 = file_get_contents($file25);
	
	$file26 = "./script_outputs/CustID_".$_SESSION['userid']."_5_Daily_PredictedTransaction.txt";
	$document26 = file_get_contents($file26);
	
	$file27 = "./script_outputs/CustID_".$_SESSION['userid']."_6_Daily_PredictedTransaction.txt";
	$document27 = file_get_contents($file27);
	
	$file28 = "./script_outputs/CustID_".$_SESSION['userid']."_7_Daily_PredictedTransaction.txt";
	$document28 = file_get_contents($file28);

	$file29 = "./script_outputs/CustID_".$_SESSION['userid']."_1_Weekly_PredictedTransaction.txt";
	$document29 = file_get_contents($file29);
	
	$file30 = "./script_outputs/CustID_".$_SESSION['userid']."_2_Weekly_PredictedTransaction.txt";
	$document30 = file_get_contents($file30);
	
	$file31 = "./script_outputs/CustID_".$_SESSION['userid']."_3_Weekly_PredictedTransaction.txt";
	$document31 = file_get_contents($file31);
	
	$file32 = "./script_outputs/CustID_".$_SESSION['userid']."_4_Weekly_PredictedTransaction.txt";
	$document32 = file_get_contents($file32);
	
	$file33 = "./script_outputs/CustID_".$_SESSION['userid']."_5_Weekly_PredictedTransaction.txt";
	$document33 = file_get_contents($file33);
	
	$file34 = "./script_outputs/CustID_".$_SESSION['userid']."_6_Weekly_PredictedTransaction.txt";
	$document34 = file_get_contents($file34);
	
	$file35 = "./script_outputs/CustID_".$_SESSION['userid']."_7_Weekly_PredictedTransaction.txt";
	$document35 = file_get_contents($file35);

	$file36 = "./script_outputs/CustID_".$_SESSION['userid']."_1_Monthly_PredictedTransaction.txt";
	$document36 = file_get_contents($file36);
	
	$file37 = "./script_outputs/CustID_".$_SESSION['userid']."_2_Monthly_PredictedTransaction.txt";
	$document37 = file_get_contents($file37);
	
	$file38 = "./script_outputs/CustID_".$_SESSION['userid']."_3_Monthly_PredictedTransaction.txt";
	$document38 = file_get_contents($file38);
	
	$file39 = "./script_outputs/CustID_".$_SESSION['userid']."_4_Monthly_PredictedTransaction.txt";
	$document39 = file_get_contents($file39);
	
	$file40 = "./script_outputs/CustID_".$_SESSION['userid']."_5_Monthly_PredictedTransaction.txt";
	$document40 = file_get_contents($file40);
	
	$file41 = "./script_outputs/CustID_".$_SESSION['userid']."_6_Monthly_PredictedTransaction.txt";
	$document41 = file_get_contents($file41);
	
	$file42 = "./script_outputs/CustID_".$_SESSION['userid']."_7_Monthly_PredictedTransaction.txt";
	$document42 = file_get_contents($file42);
	
	$file43 = "./script_outputs/CustID_".$_SESSION['userid']."_1_Daily_FunctionSelector.txt";
	$document43 = file_get_contents($file43);
	$input43 = substr($document43,2,strlen($document43));
	$output43 = preg_replace("/[\s]/", "±", $input43);
	
	$file44 = "./script_outputs/CustID_".$_SESSION['userid']."_2_Daily_FunctionSelector.txt";
	$document44 = file_get_contents($file44);
	$input44 = substr($document44,2,strlen($document44));
	$output44 = preg_replace("/[\s]/", "±", $input44);
	
	$file45 = "./script_outputs/CustID_".$_SESSION['userid']."_3_Daily_FunctionSelector.txt";
	$document45 = file_get_contents($file45);
	$input45 = substr($document45,2,strlen($document45));
	$output45 = preg_replace("/[\s]/", "±", $input45);
	
	$file46 = "./script_outputs/CustID_".$_SESSION['userid']."_4_Daily_FunctionSelector.txt";
	$document46 = file_get_contents($file46);
	$input46 = substr($document46,2,strlen($document46));
	$output46 = preg_replace("/[\s]/", "±", $input46);
	
	$file47 = "./script_outputs/CustID_".$_SESSION['userid']."_5_Daily_FunctionSelector.txt";
	$document47 = file_get_contents($file47);
	$input47 = substr($document47,2,strlen($document47));
	$output47 = preg_replace("/[\s]/", "±", $input47);
	
	$file48 = "./script_outputs/CustID_".$_SESSION['userid']."_6_Daily_FunctionSelector.txt";
	$document48 = file_get_contents($file48);
	$input48 = substr($document48,2,strlen($document48));
	$output48 = preg_replace("/[\s]/", "±", $input48);
	
	$file49 = "./script_outputs/CustID_".$_SESSION['userid']."_7_Daily_FunctionSelector.txt";
	$document49 = file_get_contents($file49);
	$input49 = substr($document49,2,strlen($document49));
	$output49 = preg_replace("/[\s]/", "±", $input49);

	$file50 = "./script_outputs/CustID_".$_SESSION['userid']."_1_Weekly_FunctionSelector.txt";
	$document50 = file_get_contents($file50);
	$input50 = substr($document50,2,strlen($document50));
	$output50 = preg_replace("/[\s]/", "±", $input50);
	
	$file51 = "./script_outputs/CustID_".$_SESSION['userid']."_2_Weekly_FunctionSelector.txt";
	$document51 = file_get_contents($file51);
	$input51 = substr($document51,2,strlen($document51));
	$output51 = preg_replace("/[\s]/", "±", $input51);
	
	$file52 = "./script_outputs/CustID_".$_SESSION['userid']."_3_Weekly_FunctionSelector.txt";
	$document52 = file_get_contents($file52);
	$input52 = substr($document52,2,strlen($document52));
	$output52 = preg_replace("/[\s]/", "±", $input52);
	
	$file53 = "./script_outputs/CustID_".$_SESSION['userid']."_4_Weekly_FunctionSelector.txt";
	$document53 = file_get_contents($file53);
	$input53 = substr($document53,2,strlen($document53));
	$output53 = preg_replace("/[\s]/", "±", $input53);

	$file54 = "./script_outputs/CustID_".$_SESSION['userid']."_5_Weekly_FunctionSelector.txt";
	$document54 = file_get_contents($file54);
	$input54 = substr($document54,2,strlen($document54));
	$output54 = preg_replace("/[\s]/", "±", $input54);
	
	$file55 = "./script_outputs/CustID_".$_SESSION['userid']."_6_Weekly_FunctionSelector.txt";
	$document55 = file_get_contents($file55);
	$input55 = substr($document55,2,strlen($document55));
	$output55 = preg_replace("/[\s]/", "±", $input55);
	
	$file56 = "./script_outputs/CustID_".$_SESSION['userid']."_7_Weekly_FunctionSelector.txt";
	$document56 = file_get_contents($file56);
	$input56 = substr($document56,2,strlen($document56));
	$output56 = preg_replace("/[\s]/", "±", $input56);
	
	$file57 = "./script_outputs/CustID_".$_SESSION['userid']."_1_Monthly_FunctionSelector.txt";
	$document57 = file_get_contents($file57);
	$input57 = substr($document57,2,strlen($document57));
	$output57 = preg_replace("/[\s]/", "±", $input57);
	
	$file58 = "./script_outputs/CustID_".$_SESSION['userid']."_2_Monthly_FunctionSelector.txt";
	$document58 = file_get_contents($file58);
	$input58 = substr($document58,2,strlen($document58));
	$output58 = preg_replace("/[\s]/", "±", $input58);
	
	$file59 = "./script_outputs/CustID_".$_SESSION['userid']."_3_Monthly_FunctionSelector.txt";
	$document59 = file_get_contents($file59);
	$input59 = substr($document59,2,strlen($document59));
	$output59 = preg_replace("/[\s]/", "±", $input59);
	
	$file60 = "./script_outputs/CustID_".$_SESSION['userid']."_4_Monthly_FunctionSelector.txt";
	$document60 = file_get_contents($file60);
	$input60 = substr($document60,2,strlen($document60));
	$output60 = preg_replace("/[\s]/", "±", $input60);

	$file61 = "./script_outputs/CustID_".$_SESSION['userid']."_5_Monthly_FunctionSelector.txt";
	$document61 = file_get_contents($file61);
	$input61 = substr($document61,2,strlen($document61));
	$output61 = preg_replace("/[\s]/", "±", $input61);
	
	$file62 = "./script_outputs/CustID_".$_SESSION['userid']."_6_Monthly_FunctionSelector.txt";
	$document62 = file_get_contents($file62);
	$input62 = substr($document62,2,strlen($document62));
	$output62 = preg_replace("/[\s]/", "±", $input62);
	
	$file63 = "./script_outputs/CustID_".$_SESSION['userid']."_7_Monthly_FunctionSelector.txt";
	$document63 = file_get_contents($file63);
	$input63 = substr($document63,2,strlen($document63));
	$output63 = preg_replace("/[\s]/", "±", $input63);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/c33a37a99e.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sansita:700i" rel="stylesheet">
  </head>

	
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="ig.php">Virtual Financier</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="ig.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>       
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
                        
            <li><a href="#contact" data-toggle="modal"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
			<li><a href="logout.php" class="btn btn-warning btn-md"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
		<div class="container">
			<div class="jumbotron text-center bg1">
				<h2>Here's your forecast for the day!!.</h2>
					<table class="table table-bordered table-stripped">
						<thead>
							<tr>
								<th class="text-center">Category ID</th>
								<th class="text-center">Category</th>
								<th class="text-center">Probability</th>
								<th class="text-center">Average Expense</th>
								<th class="text-center">Predicted Value</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td> Fuel/Taxi</td>
								<td><?php echo $input1;  ?></td>
								<td><?php echo $document22;  ?></td>
								<td><?php echo $output43;  ?></td>
							</tr>
							<tr>
								<td>2</td>
								<td> Frivolities and Outings</td>
								<td><?php echo $input2;  ?></td>
								<td><?php echo $document23;  ?></td>
								<td><?php echo $output44;  ?></td>
							</tr>
							<tr>
								<td>3</td>
								<td> Bills/Groceries</td>
								<td><?php echo $input3;  ?></td>
								<td><?php echo $document24;  ?></td>
								<td><?php echo $output45;  ?></td>
							</tr>
							<tr>
								<td>4</td>
								<td> Grooming</td>
								<td><?php echo $input4;  ?></td>
								<td><?php echo $document25;  ?></td>
								<td><?php echo $output46;  ?></td>
							</tr>
							<tr>
								<td>5</td>
								<td> Stationery</td>
								<td><?php echo $input5;  ?></td>
								<td><?php echo $document26;  ?></td>
								<td><?php echo $output47;  ?></td>
							</tr>
							<tr>
								<td>6</td>
								<td> Gifts</td>
								<td><?php echo $input6;  ?></td>
								<td><?php echo $document27;  ?></td>
								<td><?php echo $output48;  ?></td>
							</tr>
							<tr>
								<td>7</td>
								<td> Irregular Purchases</td>
								<td><?php echo $input7;  ?></td>
								<td><?php echo $document28;  ?></td>
								<td><?php echo $output49;  ?></td>
							</tr>
						</tbody>
					</table>
					<h2>Here's your forecast for the week!!.</h2>
					<table class="table table-bordered table-stripped">
						<thead>
							<tr>
								<th class="text-center">Category ID</th>
								<th class="text-center">Category</th>
								<th class="text-center">Probability</th>
								<th class="text-center">Average Expense</th>
								<th class="text-center">Predicted Value</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td> Fuel/Taxi</td>
								<td><?php echo $input8;  ?></td>
								<td><?php echo $document29;  ?></td>
								<td><?php echo $output50;  ?></td>
							</tr>
							<tr>
								<td>2</td>
								<td> Frivolities and Outings</td>
								<td><?php echo $input9;  ?></td>
								<td><?php echo $document30;  ?></td>
								<td><?php echo $output51;  ?></td>
							</tr>
							<tr>
								<td>3</td>
								<td> Bills/Groceries</td>
								<td><?php echo $input10;  ?></td>
								<td><?php echo $document31;  ?></td>
								<td><?php echo $output52;  ?></td>
							</tr>
							<tr>
								<td>4</td>
								<td> Grooming</td>
								<td><?php echo $input11;  ?></td>
								<td><?php echo $document32;  ?></td>
								<td><?php echo $output53;  ?></td>
							</tr>
							<tr>
								<td>5</td>
								<td> Stationery</td>
								<td><?php echo $input12;  ?></td>
								<td><?php echo $document33;  ?></td>
								<td><?php echo $output54;  ?></td>
							</tr>
							<tr>
								<td>6</td>
								<td> Gifts</td>
								<td><?php echo $input13;  ?></td>
								<td><?php echo $document34;  ?></td>
								<td><?php echo $output55;  ?></td>
							</tr>
							<tr>
								<td>7</td>
								<td> Irregular Purchases</td>
								<td><?php echo $input14;  ?></td>
								<td><?php echo $document35;  ?></td>
								<td><?php echo $output56;  ?></td>
							</tr>
						</tbody>
					</table>
					<h2>Here's your forecast for the month!!.</h2>
					<table class="table table-bordered table-stripped">
						<thead>
							<tr>
								<th class="text-center">Category ID</th>
								<th class="text-center">Category</th>
								<th class="text-center">Probability</th>
								<th class="text-center">Average Expense</th>
								<th class="text-center">Predicted Value</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td> Fuel/Taxi</td>
								<td><?php echo $input15;  ?></td>
								<td><?php echo $document36;  ?></td>
								<td><?php echo $output57;  ?></td>
							</tr>
							<tr>
								<td>2</td>
								<td> Frivolities and Outings</td>
								<td><?php echo $input16;  ?></td>
								<td><?php echo $document37;  ?></td>
								<td><?php echo $output58;  ?></td>
							</tr>
							<tr>
								<td>3</td>
								<td> Bills/Groceries</td>
								<td><?php echo $input17;  ?></td>
								<td><?php echo $document38;  ?></td>
								<td><?php echo $output59;  ?></td>
							</tr>
							<tr>
								<td>4</td>
								<td> Grooming</td>
								<td><?php echo $input18;  ?></td>
								<td><?php echo $document39;  ?></td>
								<td><?php echo $output60;  ?></td>
							</tr>
							<tr>
								<td>5</td>
								<td> Stationery</td>
								<td><?php echo $input19;  ?></td>
								<td><?php echo $document40;  ?></td>
								<td><?php echo $output61;  ?></td>
							</tr>
							<tr>
								<td>6</td>
								<td> Gifts</td>
								<td><?php echo $input20;  ?></td>
								<td><?php echo $document41;  ?></td>
								<td><?php echo $output62;  ?></td>
							</tr>
							<tr>
								<td>7</td>
								<td> Irregular Purchases</td>
								<td><?php echo $input21;  ?></td>
								<td><?php echo $document42;  ?></td>
								<td><?php echo $output63;  ?></td>
							</tr>
						</tbody>
					</table>
			</div>
		
		</div>
	
	
		<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
			<div class="container">
				<div class="navbar-text pull-left">
					<i class="fa fa-copyright"></i> 2017 Virtual Financier
				</div>
			</div>
		</div>
	
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
    <script src="js/bootstrap.min.js"></script>
		
</body>
</html>





sign in to get personalised

body {
  color: #fff;
  font-size: 1.5em;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", sans-serif;
  font-weight: 100;
  text-align: center;
}



<div class="form-container">
            <form id="sign-form" class="sign-form">
                <ol class="questions">
                    <li>
                        <span><label for="name">Hi, What is your Name?</label></span>
						<input class="active" id="name" name="name" type="text" placeholder="Enter your full name" autofocus/>
                    </li>
                    <li>
				        <span><label for="uname">& what shall we call you?</label></span>
                        <input id="uname" name="username" type="text" placeholder="Enter a username" autofocus/>
					</li>
                    <li>
				        <span><label for="email">Enter you email</label></span>
                        <input id="email" name="email" type="text" placeholder="Email"  autofocus/>
					</li>
                    <li>
                        <span><label for="password">Choose a password</label></span>
                        <input id="viewpswd" name="password" type="text" placeholder="this your password"/>
                        <input id="password" name="password" type="password" placeholder="make sure you dont forget" autofocus/>
                        <span id="show-pwd" class="view"></span>
					</li>
                    <li>
                        <span><label for="phone">Enter your phone number</label></span>
                            <select name="countryCode" class="country"  >
                                <option data-countryCode="GB" value="91">(+91) INDIA </option>
                                <option data-countryCode="GB" value="44">(+44) UK </option>
                                <option data-countryCode="US" value="1">(+1) USA </option>
                                <optgroup label="Other countries">
                                   <option data-countryCode="DZ" value="213"> (+213)Algeria</option>
                                   <option data-countryCode="AD" value="376"> (+376) Andorra</option>
                                   <option data-countryCode="AO" value="244">(+244) Angola </option>
                                   <option data-countryCode="AI" value="1264"> (+1264) Anguilla</option>
                                   <option data-countryCode="AG" value="1268">(+1268) Antigua &amp; Barbuda </option>
                                   <option data-countryCode="AR" value="54">(+54) Argentina </option>
                                   <option data-countryCode="AM" value="374"> (+374) Armenia</option>
                                   <option data-countryCode="AW" value="297">(+297) Aruba </option>
                                   <option data-countryCode="AU" value="61"> (+61) Australia</option>
                                   <option data-countryCode="AT" value="43">(+43) Austria </option>
                                   <option data-countryCode="AZ" value="994"> (+994) Azerbaijan</option>
                                   <option data-countryCode="BS" value="1242">(+1242)Bahamas </option>
                                </optgroup>
                            </select>
                            <input id="phone" name="phone" type="text" autofocus/>
                    </li>
                    <li><p style="margin-top: 45px;font-size: 32pt;float:right">
                        <a href="#" style="color:white;text-decoration:none" id="signup">sign up</a></p>    </li>
                
                    
                </ol>
                <div id="next-page" alt="Kiwi standing on oval"></div>
                <div class="error-message"></div>
                
            </form>
        <h1 id="wf" style="opacity:0;width: 600px; margin-top:1.1em;display:none; margin-bottom:1em">Thank you</h1>
	  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
	<script  src="js/index.js"></script>
	
		
            </div>
          </div>

        </div>
      </div>
    </header>

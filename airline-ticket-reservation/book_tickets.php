<?php
	session_start();
?>
<html>
	<head>
		<title>View Available Flights</title>
		<style>
			input {
    			border: 1px solid #000;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #000;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1px solid #000;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="https://thumbs.dreamstime.com/t/plane-logo-vector-plane-logo-vector-template-120466030.jpg"/>   
		<h1 id="title">Gringotts Airlines</h1>
		<div>
			<ul>
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i><span style="padding-left:10px;">Home</span></a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i><span style="padding-left:10px;">Dashboard</span></a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i><span style="padding-left:10px;">About Us</span></a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i><span style="padding-left:10px;">Contact Us</span></a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span style="padding-left:10px;">Logout</span></a></li>
			</ul>
		</div>
		<form action="view_flights_form_handler.php" method="post">
			<h2>Search for Available Flights</h2>
			<table cellpadding="5" cellspacing="15">
				<tr>
					<td class="fix_table"><span style="padding-left:10px;">Enter the Origin</span></td>
					<td class="fix_table"><span style="padding-left:10px;">Enter the Destination</span></td>
				</tr>
				<tr>
					<td class="fix_table">
						<input list="origins" name="origin" placeholder="From" required>
  						<datalist id="origins">
  						</datalist>
						</td>
					<td class="fix_table">
						<input list="destinations" name="destination" placeholder="To" required>
  						<datalist id="destinations">
  						</datalist>
						</td>
				</tr>
			</table>
			<br>
			<table cellpadding="5" cellspacing="15">
				<tr>
					<td class="fix_table"><span style="padding-left:10px;">Enter the Departure Date</span></td>
					<td class="fix_table"><span style="padding-left:10px;">Enter the No. of Passengers</span></td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" min=
						<?php 
							$todays_date=date('Y-m-d'); 
							echo $todays_date;
						?> 
						max=
						<?php 
							$max_date=date_create(date('Y-m-d'));
							date_add($max_date,date_interval_create_from_date_string("90 days")); 
							echo date_format($max_date,"Y-m-d");
						?> required>
					</td>
					<td class="fix_table"><input type="number" name="no_of_pass" placeholder="Eg. 5" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5" cellspacing="15">
				<tr>
					<td class="fix_table"><span style="padding-left:10px;">Enter the Class</span></td>
				</tr>
				<tr>
					<td class="fix_table">
						<select name="class">
  							<option value="economy"><span style="padding-left:10px;">Economy</span></option>
  							<option value="business"><span style="padding-left:10px;">Business</span></option>
  						</select>
  					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Search for Available Flights" name="Search">
		</form>
	</body>
</html>
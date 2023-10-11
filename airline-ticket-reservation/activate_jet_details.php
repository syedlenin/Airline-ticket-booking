<?php
	session_start();
?>
<html>
	<head>
		<title>
			Activate Aircraft
		</title>
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
    			margin: 0px 67px;
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
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i><span style="padding-left:10px;">Home</span></a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i><span style="padding-left:10px;">Dashboard</span></a></li>
				<li><a href="home_page.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span style="padding-left:10px;">Logout</span></a></li>
			</ul>
		</div>
		<form action="activate_jet_details_form_handler.php" method="post">
			<h2>ENTER THE AIRCRAFT TO BE ACTIVATED</h2>
			<div>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The Aircraft has been successfully activated.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color:red'>*Invalid Jet ID entered, please enter again.</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5" cellspacing="15" style="padding-left: 20px;">
				<tr>
					<td class="fix_table">Enter a Valid Jet ID</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="jet_id" required></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Activate" name="Activate">
			</div>
		</form>
	</body>
</html>
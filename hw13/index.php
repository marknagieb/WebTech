<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Form</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../hw13/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../hw13/assets/css/styles.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
<div id="page-wrapper">
<div id="page-inner">
<?php
	if(!isset($_POST['submit']))
	{
	echo '
	<form id="contact" method="post" action="">
		<div class="form-group">
		<label for="email">Email Address</label>
		<input name="email" type="email" class="form-control" id="email" placeholder="Email">
		<p id="emailStatus"></p>
		</div>
		<div class="form-group">
    	<label for="firstName">First Name</label>
    	<input name="Fname"type="text" class="form-control" id="firstName" placeholder="First Name">
    	<p id="firstNameStatus"></p>
		</div>
		<div class="form-group">
		<label for="lastName">Last Name</label>
		<input name="Lname" type="text" class="form-control" id="lastName" placeholder="Last Name">
		<p id="lastNameStatus"></p>
		</div>
		<div class="form-group">
		<label for="phoneNumber">Phone Number</label>
		<input name="PhoneNum" type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
		<p id="phoneStatus"></p>
		</div>
		<div class="form-group">
		<label for="comments">Comments</label>
		<textarea name="comments" class="form-control" id="comments" placeholder="Comments"></textarea>
		<p id="commentsStatus"></p>
		</div>
		<button name="submit" type="submit" value="submit">Submit</button>
	</form>';	
	}
	if(isset($_POST['submit']))
	{
		if($_POST['submit']=="submit")
		{
			echo "<div>Email is: $_POST[email]</div>";
			echo "<div> First Name is $_POST[Fname]</div>";
			echo "<div> Last Name is $_POST[Lname]</div>";
			echo "<div> Phone Number is $_POST[PhoneNum]</div>";
			echo "<div> Comment is $_POST[comments]</div>";
			echo "<div> Submit is $_POST[submit]</div>";
		}
		else
			echo "<h3>Please go Back and fill out the form.</h3>";
	}
	?>
</div>	
</div>
</div>
</html>
<script src="assets/js/validation.js"></script>
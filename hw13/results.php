<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Results Data</title>
</head>

<body>
<?php
	if(isset($_POST['submit'])&& $_POST['submit']=="submit")
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
?>
</body>
</html>
<script src="assets/js/validation.js"></script>
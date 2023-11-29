<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Results Data</title>
</head>

<body>
<?php
	if(isset($_GET['submit'])&& $_GET['submit']=="submit")
	{
		echo "<div>Email is: $_GET[email]</div>";
		echo "<div> First Name is $_GET[Fname]</div>";
		echo "<div> Last Name is $_GET[Lname]</div>";
		echo "<div> Phone Number is $_GET[PhoneNum]</div>";
		echo "<div> Comment is $_GET[comments]</div>";
		echo "<div> Submit is $_GET[submit]</div>";
	}
	else
		echo "<h3>Please go Back and fill out the form.</h3>";
?>
</body>
</html>
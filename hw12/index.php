<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Form</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../hw12/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../hw12/assets/css/styles.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
<div id="page-wrapper">
<div id="page-inner">
	<form id="contact" method="get" action="results.php">
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
	</form>
</div>	
</div>
</div>
</body>
</html>
<script src="../hw10 - Copy/assets/js/validation.js"></script>
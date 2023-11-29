<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Form</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/hw14/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="/hw14/assets/css/styles.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
<div id="page-wrapper">
<div id="page-inner">
<?php
	if(!isset($_POST['submit']))
	{
		echo ' <form id="contact" method="post" action="">';
		if (!isset($_GET['email']))
		{
			if(isset($_SESSION['email'])){
				echo '<div class="form-group">';
				echo '<label for="email">Email Address</label>';
				echo '<input name="email" type="email" class="form-control" id="email" value="'.$_SESSION['email'].'">';
				echo '<p id="emailStatus"></p>';
				echo '</div>';
			}
			else{
				echo '<div class="form-group">';
				echo '<label for="email">Email Address</label>';
				echo '<input name="email" type="email" class="form-control" id="email" placeholder="Email">';
				echo '<p id="emailStatus"></p>';
				echo '</div>';
			}
		}
		elseif (isset($_GET['email'])){
				echo '<div class="form-group has-error">';
				echo '<label for="inputError1">Email</label>';
				echo '<input name="email"type="text" class="form-control" id="inputError1" placeholder="Email">';
				echo '<p class="alert-danger" id="emailStatus">Email cannot be Blank</p>';
				echo '</div>';
			}
			
		
		if (!isset($_GET['fname']))
		{
			if(isset($_SESSION['fname'])){
				echo '<div class="form-group">';
				echo '<label for="firstName">First Name</label>';
				echo '<input name="Fname"type="text" class="form-control" id="firstName" value="'.$_SESSION['fname'].'">';
				echo '<p id="firstNameStatus"></p>';
				echo '</div>';
			}
			else{
				echo '<div class="form-group">';
				echo '<label for="firstName">First Name</label>';
				echo '<input name="Fname"type="text" class="form-control" id="firstName" placeholder="First Name">';
				echo '<p id="firstNameStatus"></p>';
				echo '</div>';
			}
		}
		elseif (isset($_GET['fname'])){
				echo '<div class="form-group has-error">';
				echo '<label for="inputError1">First Name</label>';
				echo '<input name="Fname"type="text" class="form-control" id="inputError1" placeholder="First Name">';
				echo '<p class="alert-danger" id="firstNameStatus">First Name cannot be Blank</p>';
				echo '</div>';
			
		}
		if (!isset($_GET['lname']))
		{
			if(isset($_SESSION['lname'])){
				echo '<div class="form-group">';
				echo '<label for="lastName">Last Name</label>';
				echo '<input name="Lname" type="text" class="form-control" id="lastName" value="'.$_SESSION['email'].'">';
				echo '<p id="lastNameStatus"></p>';
				echo '</div>';
			}
			else{
				echo '<div class="form-group">';
				echo '<label for="lastName">Last Name</label>';
				echo '<input name="Lname" type="text" class="form-control" id="lastName" placeholder="Last Name">';
				echo '<p id="lastNameStatus"></p>';
				echo '</div>';
			}
		}
		elseif (isset($_GET['lname'])){
				echo '<div class="form-group has-error">';
				echo '<label for="inputError1">Last Name</label>';
				echo '<input name="Lname" type="text" class="form-control" id="inputError1" placeholder="Last Name">';
				echo '<p class="alert-danger" id="lastNameStatus">Last Name cannot be Blank</p>';
				echo '</div>';
			}
		
			
		if (!isset($_GET['Pnum'])){
			if(isset($_SESSION['Pnum'])){
				echo '<div class="form-group">';
				echo '<label for="phoneNumber">Phone Number</label>';
				echo '<input name="PhoneNum" type="text" class="form-control" id="phoneNumber" value="'.$_SESSION['Pnum'].'">';
				echo '<p id="phoneStatus"></p>';
				echo '</div>';
			}
			else{
				echo '<div class="form-group">';
				echo '<label for="phoneNumber">Phone Number</label>';
				echo '<input name="PhoneNum" type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">';
				echo '<p id="phoneStatus"></p>';
				echo '</div>';	
			}
		}
		elseif (isset($_GET['Pnum'])){
				echo '<div class="form-group has-error">';
				echo '<label for="inputError1">Phone Number</label>';
				echo '<input name="PhoneNum" type="text" class="form-control" id="inputError1" placeholder="Phone Number">';
				echo '<p class="alert-danger" id="PhoneNumStatus">Phone Number cannot be Blank</p>';
				echo '</div>';
			
		}
		if (!isset($_GET['comment'])){
			if(isset($_SESSION['comment'])){
				echo '<div class="form-group">';
				echo '<label for="comment">Comments</label>';
				echo '<textarea name="comment" class="form-control" id="comments" value="'.$_SESSION['comment'].'"></textarea>';
				echo '<p id="commentsStatus"></p>';
				echo '</div>';
			}
			else{
				echo '<div class="form-group">';
				echo '<label for="comment">Comments</label>';
				echo '<textarea name="comment" class="form-control" id="comments" placeholder="Comments"></textarea>';
				echo '<p id="commentsStatus"></p>';
				echo '</div>';
			}
		}
		elseif (isset($_GET['comment'])){
				echo '<div class="form-group has-error">';
				echo '<label for="inputError1">Comments</label>';
				echo '<textarea name="comment" type="text" class="form-control" id="inputError1" placeholder="Comments"></textarea>';
				echo '<p class="alert-danger" id="commentStatus">Comment cannot be Blank</p>';
				echo '</div>';
		
		}
		echo '<button name="submit" type="submit" value="submit">Submit</button>';
		echo '</form>';	
	}
	if(isset($_POST['submit']))
	{
		if($_POST['submit']=="submit")
		{
			$errStatus=array();
			$email=$_POST['email'];
			$Fname=$_POST['Fname'];
			$Lname=$_POST['Lname'];
			$PhoneNum=$_POST['PhoneNum'];
			$comment=$_POST['comment'];
			if ($email==NULL)
				$errStatus[]="email=emailErr";
			else
				$_SESSION['email']=$email;
			
			if ($Fname==NULL)
				$errStatus[]="fname=fnameErr";
			else
				$_SESSION['fname']=$Fname;
			
			if ($Lname==NULL)
				$errStatus[]="lname=lnameErr";
			else
				$_SESSION['lname']=$Lname;
			
			if ($PhoneNum==NULL)
				$errStatus[]="Pnum=PnumErr";
			else
				$_SESSION['Pnum']=$PhoneNum;
			
			if ($comment==NULL)
				$errStatus[]="comment=commentErr";
			else
				$_SESSION['comment']=$comment;
			
			if (count($errStatus)>0){
				$errString=implode("&",$errStatus);
				header("Location: /hw14/index.php?$errString");
			}
			echo "<div>Email is: 
			$_POST[email]</div>";
			echo "<div> First Name is $_POST[Fname]</div>";
			echo "<div> Last Name is $_POST[Lname]</div>";
			echo "<div> Phone Number is $_POST[PhoneNum]</div>";
			echo "<div> Comment is $_POST[comment]</div>";
			echo "<div> Submit is $_POST[submit]</div>";
		}
	}
?>
</div>	
</div>
</div>
</html>
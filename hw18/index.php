<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="file:///C|/Users/markn/OneDrive/Desktop/Important/School/Submissions/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/justified-nav/">
	<title>Mark's Homepage!</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/justified-nav.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Welcome to my Homepage!</h3>
		<?php
		  	  include("functions.php");
		      include("navigation.php");
		  ?>
      </div>
		<?php
			$dblink=db_connect("content");
			if (!isset($_GET['page']))
				$page="index";
			else
				$page=$_GET['page'];
			$pageClean=addslashes($page);
			if ($pageClean!="contact")
			{
				$sql="Select * from `pages` where `page_name`='$pageClean'";
				$result=$dblink->query($sql) or
					die("<p>Something went wrong with: $sql</p>".$dblink->error);
				$data=$result->fetch_array(MYSQLI_ASSOC);
				echo $data['content_data'];	
			}
			else
			{
				include("contact.php");
			}
		?>
  </body>
</html>

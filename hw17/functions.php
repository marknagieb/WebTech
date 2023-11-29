<?php

function db_connect($database)
{
	$username="webuser";
	$password="fk/zDlCJg-!JMYuS";
	$hostname="localhost";
	$dblink=new mysqli($hostname,$username,$password,$database);
	if (mysqli_connect_errno())
	{
		die("Error connecting to database: ".mysqli_connect_error());
	}
	return $dblink;
}

function redirect ($uri)
{ ?>
	<script type="text/javascript">
		document.location.href="<?php echo $uri; ?>";
	</script>
<?php die;
}
?>

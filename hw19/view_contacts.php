<?php
$dblink=db_connect("contact");
$sql="Select * from `contact_info` where 1";
$result=$dblink->query($sql) or
	die("<p>Something went wrong with <br>$sql<br>".$dblink->error);
echo'<table>';
echo'<tr><td>First Name</td><td>Last Name</td><td>Email</td><td>Phone Number</td><td>Comments</td></tr>';
while ($data=$result->fetch_array(MYSQLI_ASSOC))
{
	echo'<tr>';
	echo'<td>'.$data['first_name'].'</td>';
	echo'<td>'.$data['last_name'].'</td>';
	echo'<td>'.$data['email'].'</td>';
	echo'<td>'.$data['pnum'].'</td>';
	echo'<td>'.$data['comments'].'</td>';
	echo'</tr>';
}
echo'</table>';
?>
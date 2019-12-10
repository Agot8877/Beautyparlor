<?php
	include('php/update_serv.php');





if(isset($_GET['ServiceID'])){ //Getting id number on the link
		$ServiceID = $_GET['ServiceID'];

    	
/* Query for selected id to delete */
$query = "DELETE FROM Services WHERE ServiceID = '$ServiceID'"; 
$result = mysqli_query($db, $query);
/* link when the process is done */
header("location:Services.php");
}
?>
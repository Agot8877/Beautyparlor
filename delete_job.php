<?php
	include('php/update_job.php');





if(isset($_GET['JobID'])){ //Getting id number on the link
		$JobID = $_GET['JobID'];

    	
/* Query for selected id to delete */
$query = "DELETE FROM Job WHERE JobID = '$JobID'"; 
$result = mysqli_query($db, $query);
/* link when the process is done */
header("location:job.php");
}
?>
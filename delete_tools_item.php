<?php
	include('php/update_tools_item.php');





if(isset($_GET['id_no'])){ //Getting id number on the link
	$id_no = $_GET['id_no'];
	/* Query for selected id to delete */
	$query = "DELETE FROM Tools_Item WHERE id_no = '$id_no'"; 
	$result = mysqli_query($db, $query);
	if($result){
		header("location:tools_item.php");
	}else{
		echo "
			<script>
				alert('This item cannot be delete because it is use in another operation');
				window.location.href='tools_item.php';
			</script>
		";
	}
}
?>
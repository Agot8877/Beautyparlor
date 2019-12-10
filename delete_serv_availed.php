<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');
  //check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  if (isset($_GET['reciept_no'])) {
    
    $reciept_no = $_GET['reciept_no'];
    $get_contact = "SELECT * FROM Services_availed WHERE reciept_no = '$reciept_no'";
    $get_Salary = mysqli_query($db, "SELECT * FROM Services_availed WHERE reciept_no = '$reciept_no'");
    $row = mysqli_fetch_array($get_Salary);
  }
  if(isset($_GET['reciept_no'])){ //Getting id number on the link
		$reciept_no = $_GET['reciept_no'];
    	
/* Query for selected id to delete */
$query =  "DELETE FROM `Services_availed` WHERE `Services_availed`.`reciept_no` = '$reciept_no'"; 
$result = mysqli_query($db, $query);
/* link when the process is done */
// header("location:service_availed.php");
if($result){
    header("location:service_availed.php");
  }else{
    echo "
      <script>
        alert('This item cannot be delete because it is use in another operation');
        window.location.href='service_availed.php';
      </script>
    ";
  }
}
?>
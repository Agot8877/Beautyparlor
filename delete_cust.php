<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');

  //check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }


  if (isset($_GET['customer_id'])) {
    
    $customer_id = $_GET['customer_id'];

    $get_contact = "SELECT * FROM Customer WHERE customer_id = '$customer_id'";

    $get_cust = mysqli_query($db, "SELECT * FROM Customer WHERE customer_id = '$customer_id'");

    $row = mysqli_fetch_array($get_cust);
  }
  if(isset($_GET['customer_id'])){ //Getting id number on the link
		$customer_id = $_GET['customer_id'];

    	
/* Query for selected id to delete */
$query =  "DELETE FROM `Customer` WHERE `Customer`.`customer_id` = '$customer_id'"; 
$result = mysqli_query($db, $query);
/* link when the process is done */
// header("location:customer.php");
if($result){
    header("location:customer.php");
  }else{
    echo "
      <script>
        alert('This item cannot be delete because it is use in another operation');
        window.location.href='customer.php';
      </script>
    ";
  }
}
?>
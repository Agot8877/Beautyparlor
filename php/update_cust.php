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
?>

<?
/* Updating existing data from database */
    if(isset($_POST['update'])){
      
      $customer_id = $_POST['customer_id'];
      $first_name  = mysqli_real_escape_string($db, $_POST['first_name']);
      $middle_name  = mysqli_real_escape_string($db, $_POST['middle_name']);
      $last_name  = mysqli_real_escape_string($db, $_POST['last_name']);
      $Contact_no  = mysqli_real_escape_string($db, $_POST['Contact_no']);
      $purok  = mysqli_real_escape_string($db, $_POST['purok']);
      $barangay  = mysqli_real_escape_string($db, $_POST['barangay']);
      $city  = mysqli_real_escape_string($db, $_POST['city']);
      $zipcode  = mysqli_real_escape_string($db, $_POST['zipcode']);
        // mysql query to Update data
     $query = "UPDATE `Customer` SET `first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',`Contact_no.`=$Contact_no,`purok`='$purok',`barangay`='$barangay',`city`='$city',`zipcode`='$zipcode' WHERE customer_id = $customer_id";
     
     $result = mysqli_query($db, $query);
     
     if($result)
     {
         echo 'Data Updated';
     }else{
         echo 'Data Not Updated';
     }
      header('location: customer.php?customer_id='.$row['customer_id'].'&updated=1'); 

    }
?>

<?php
$cell_phone_number_err="";
$user_id = $_SESSION['username'];

// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');

//check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// adding contact
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $reciept_no = $_POST['reciept_no'];
  $customer_id = $_POST['customer_id'];
  

  $sql = "INSERT INTO `Services_availed` (`reciept_no`, `customer_id`) VALUES ('$reciept_no', '$customer_id')";
    $result = mysqli_query($db, $sql);
    if($result == true){
      header('Location: service_availed.php');
    }else{
      echo "Somthing went wrong";
    }

  
}


<?php
$user_id = $_SESSION['username'];

// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');

//check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// adding Employee
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $customer_id = $_POST['customer_id'];
  $first_name = $_POST['first_name'];
  $middle_name = $_POST['middle_name'];
  $last_name = $_POST['last_name'];
  $Contact_no = $_POST['Contact_no'];
  $purok = $_POST['purok'];
  $barangay = $_POST['barangay'];
  $city = $_POST['city'];
  $zipcode = $_POST['zipcode'];

  $sql = "INSERT INTO `Customer` (`customer_id`, `first_name`, `middle_name`, `last_name`, `Contact_no.`, `purok`, `barangay`, `city`, `zipcode`) VALUES ('$customer_id', '$first_name', '$middle_name', '$last_name', '$Contact_no', '$purok', '$barangay', '$city', '$zipcode')";
    $result = mysqli_query($db, $sql);
    if($result == true){
      header('Location: customer.php');
    }else{
      echo "Something went wrong";
    }

  }
?>

<?php
session_start();

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
  $chk=$_POST["chk"];   
  print_r($_POST);
  for($i=0; $i<sizeof($chk); $i++)
  {
    $sql = "INSERT INTO `service_item` (`service_item_id`, `reciept_no`, `Services_checked`) VALUES (NULL, '$reciept_no', '$chk[$i]')";

    $result = mysqli_query($db, $sql);
  }

  if($result == true){
    header('Location:../service_item.php');
  }else{
    echo "Somthing went wrong";
  }
  
}
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
  $ServiceID = $_POST['ServiceID'];
  $Serv_Name = $_POST['Serv_Name'];
  $Price = $_POST['Price'];

  $sql = "INSERT INTO `Services` (`ServiceID`, `Serv_Name`, `Price`) VALUES ('$ServiceID', '$Serv_Name', '$Price')";
    $result = mysqli_query($db, $sql);
    if($result == true){
      header('Location: Services.php');
    }else{
      echo "Somthing went wrong";
    }

  
}


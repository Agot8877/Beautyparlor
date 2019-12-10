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
  $id_no = $_POST['id_no'];
  $Description = $_POST['Description'];
  $Amount = $_POST['Amount'];
  $quantity = $_POST['quantity'];
  $unit = $_POST['unit'];
  

  $sql = "INSERT INTO `Tools_Item` (`id_no`, `timestamp`, `description`, `amount`, `quantity`, `unit`) VALUES ('$id_no', CURRENT_TIMESTAMP, '$Description', '$Amount', '$quantity', '$unit')";
    $result = mysqli_query($db, $sql);
    if($result == true){
      header('Location: tools_item.php');
    }else{
      echo "Something went wrong";
    }

  }
?>

<?php 
  session_start();
  // connect to the database
  $db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');

  //check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  } 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
  if(isset($_GET['ser_item']))
  {
    $ser_item = $_GET['ser_item'];
    $sql = "delete  FROM `service_item` where reciept_no = " .$ser_item;
    $result = mysqli_query($db, $sql);
    if($result == true){
      echo "<script>alert('Delete Successfully');window.location.href='service_item.php'</script>";
    }
  }

  if(isset($_GET['EmployeeID']))
  {
    $emp_id =  $_GET['EmployeeID'];
    $sql = "delete  FROM `employee` where EmployeeID = " .$emp_id;
    $result = mysqli_query($db, $sql);
    if($result == true){
      echo "<script>alert('Delete Successfully');window.location.href='employee.php'</script>";
    }else{
      echo "<script>alert('This data cannot be deleted because it use in another operation');window.location.href='employee.php'</script>";
    }
  }
?>
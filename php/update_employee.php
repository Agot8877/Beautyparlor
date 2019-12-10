<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');
  //check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
if(isset($_POST['update'])){
    $EmployeeID = mysqli_real_escape_string($db,$_POST['EmployeeID']);
    $FirstName   = mysqli_real_escape_string($db,$_POST['FirstName']);
    $LastName = mysqli_real_escape_string($db,$_POST['LastName']);
    $MiddleName    = mysqli_real_escape_string($db,$_POST['MiddleName']);
    $JobID     = mysqli_real_escape_string($db,$_POST['JobID']);
    $sql = "UPDATE `Employee` SET `EmployeeID` = '$EmployeeID', `FirstName` = '$FirstName', `LastName` = '$LastName', `MiddleName` = '$MiddleName', `Employee_JobID` = '$JobID' WHERE `Employee`.`EmployeeID` = '$EmployeeID'";
    $result = mysqli_query($db, $sql);
    if($result == true){
      $_SESSION['message'] = "updated!"; 
      header('location: employee.php');
    }else{
      echo "Error";
    }
    
  }
?>
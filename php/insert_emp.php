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
  $EmployeeID = $_POST['EmployeeID'];
  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $MiddleName = $_POST['MiddleName'];
  $JobID = $_POST['JobID'];
  $Tool_ID = $_POST['tool_empID'];

  $sql = "INSERT INTO `Employee` (`EmployeeID`, `FirstName`, `LastName`, `MiddleName`, `Employee_JobID`) VALUES ('$EmployeeID', '$FirstName', '$LastName', '$MiddleName', '$JobID')";
    $result = mysqli_query($db, $sql);
    if($result == true){
      header('Location: employee.php');
    }else{
      echo "Something went wrong";
    }

  }
?>

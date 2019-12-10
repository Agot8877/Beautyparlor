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
  $salaryID = $_POST['salaryID'];
  $salary = $_POST['salary'];
  

  $sql = "INSERT INTO `Salary` (`EmployeeID`,`salaryID`, `salary`) VALUES ('$EmployeeID', '$salaryID', '$salary')";
    $result = mysqli_query($db, $sql);
    if($result == true){
      header('Location: salary.php');
    }else{
      echo "Something went wrong";
    }

  }
?>

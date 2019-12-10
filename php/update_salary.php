<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');

  //check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }


  if (isset($_GET['salaryID'])) {
    
    $salaryID = $_GET['salaryID'];

    $get_contact = "SELECT * FROM Salary WHERE salaryID = '$salaryID'";

    $get_salary = mysqli_query($db, "SELECT * FROM Salary WHERE salaryID = '$salaryID'");

    $row = mysqli_fetch_array($get_salary);
  }
?>

<?
/* Updating existing data from database */
    if(isset($_POST['update'])){
      
      $salaryID = $_POST['salaryID'];
      
      $Salary  = mysqli_real_escape_string($db, $_POST['Salary']);
        // mysql query to Update data
     $query = "UPDATE Salary SET salary='$Salary'WHERE salaryID = $salaryID";
     
     $result = mysqli_query($db, $query);
     
     if($result)
     {
         echo 'Data Updated';
     }else{
         echo 'Data Not Updated';
     }
      header('location: salary.php?salaryID='.$row['salaryID'].'&updated=1'); 

    }
?>

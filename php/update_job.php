<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');

  //check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }


  if (isset($_GET['JobID'])) {
    
    $JobID = $_GET['JobID'];

    $get_contact = "SELECT * FROM Job WHERE JobID = '$JobID'";

    $get_job = mysqli_query($db, "SELECT * FROM Job WHERE JobID = '$JobID'");

    $row = mysqli_fetch_array($get_job);
  }
?>

<?
/* Updating existing data from database */
    if(isset($_POST['update'])){
      
      $JobID = $_POST['JobID'];
      
      $JobName  = mysqli_real_escape_string($db, $_POST['JobName']);
      $Description  = mysqli_real_escape_string($db, $_POST['Description']);
        // mysql query to Update data
     $query = "UPDATE Job SET JobName='$JobName',Description='$Description' WHERE JobID = $JobID";
     
     $result = mysqli_query($db, $query);
     
     if($result)
     {
         echo 'Data Updated';
     }else{
         echo 'Data Not Updated';
     }
      header('location: job.php?JobID='.$row['JobID'].'&updated=1'); 

    }
?>

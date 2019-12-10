<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');

  //check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }


  if (isset($_GET['ServiceID'])) {
    
    $ServiceID = $_GET['ServiceID'];

    $get_contact = "SELECT * FROM Services WHERE ServiceID = '$ServiceID'";
    $get_Services = mysqli_query($db, "SELECT * FROM Services WHERE ServiceID = '$ServiceID'");

    $row = mysqli_fetch_array($get_Services);
  }
?>

<?
/* Updating existing data from database */
    if(isset($_POST['update'])){
      
      $ServiceID = $_POST['ServiceID'];
      
      $Serv_Name  = mysqli_real_escape_string($db, $_POST['Serv_Name']);
      $Price  = mysqli_real_escape_string($db, $_POST['Price']);
        // mysql query to Update data
     $query = "UPDATE Services SET Serv_Name='$Serv_Name',Price='$Price' WHERE ServiceID = $ServiceID";
     
     $result = mysqli_query($db, $query);
     
     if($result)
     {
         echo 'Data Updated';
     }else{
         echo 'Data Not Updated';
     }
      header('location: Services.php?ServiceID='.$row['ServiceID'].'&updated=1'); 

    }
?>

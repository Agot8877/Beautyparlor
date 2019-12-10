<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');

  //check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }


  if (isset($_GET['tool_id'])) {
    
    $tool_id = $_GET['tool_id'];
    $get_contact = "SELECT * FROM Tools_Employee WHERE tool_id = '$tool_id'";
    $get_tool_id = mysqli_query($db, "SELECT * FROM Tools_Employee WHERE tool_id = '$tool_id'");

    $row = mysqli_fetch_array($get_tool_id);
  }
?>

<?
/* Updating existing data from database */
      
?>

<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');

  //check connection
  if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }


  if (isset($_GET['id_no'])) {
    
    $id_no = $_GET['id_no'];

    $get_contact = "SELECT * FROM Tools_Item WHERE id_no = '$id_no'";

    $get_id = mysqli_query($db, "SELECT * FROM Tools_Item WHERE id_no = '$id_no'");

    $row = mysqli_fetch_array($get_id);
  }


/* Updating existing data from database */
if(isset($_POST['update']))
{
  $id_no       = $_POST['id_no'];
  $description = mysqli_real_escape_string($db, $_POST['Description']);
  $amount      = mysqli_real_escape_string($db, $_POST['Amount']);
  $quantity    = mysqli_real_escape_string($db, $_POST['Quantity']);
  $unit        = mysqli_real_escape_string($db, $_POST['unit']);
  // mysql query to Update data
  $query = "UPDATE `Tools_Item` SET `description` = '$description', `amount` = '$amount', `quantity` = '$quantity', `unit` = '$unit' WHERE `Tools_Item`.`id_no` = $id_no";

  $update_tools_item = mysqli_query($db, $query);
  if($update_tools_item)
  {
    header("location: tools_item.php");
  }else{
    echo "<script>return confirm('Failed to Update'); window.location.href='http://localhost/Beautyparlor/tools_item.php'</script>";
  }
}else{
  echo 1;

}

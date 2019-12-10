<?php
$errors="";
$user_id = $_SESSION['username'];

// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');

//check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// adding contact
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $JobID = $_POST['JobID'];
  $JobName = $_POST['JobName'];
  $Description = $_POST['Description'];

  $sql = "INSERT INTO `Job` (`JobID`, `JobName`, `Description`) VALUES ('$JobID', '$JobName', '$Description')";
    $result = mysqli_query($db, $sql);
    if ($result == true) {
    echo "
      <script>
        alert('New Record Inserted');
        window.location.href='job.php';
      </script>
      
    ";
  }else{
      echo "Somthing went wrong";
    }

  
}


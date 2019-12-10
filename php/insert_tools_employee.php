<?php
$user_id = $_SESSION['username'];

// connect to the database
$db = mysqli_connect('localhost', 'root', '@Jtaclasher143', 'beautysalon');

//check connection
if ($db === false) {
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

// adding Employee
if (isset($_POST['insert_tools_employee'])) {
  // receive all input values from the form
  $tool_empID = $_POST['EmployeeID'];
  $id_no      = $_POST['id_no'];
  $quantity   = $_POST['quantity'];

  $sql = "Select * from tools_item where  id_no = $id_no";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result);
  $tool_item_quantity = $row["quantity"] - $quantity;

  $update_tool_quantity = mysqli_query($db, "Update tools_item set quantity = $tool_item_quantity where id_no = $id_no");
  $insert_tools_employee = mysqli_query($db, "INSERT INTO `tools_employee` (`tool_id`, `tool_empID`, `id_no`, `quantity`, `timestamp`) VALUES (NULL, $tool_empID, $id_no, $quantity, CURRENT_TIMESTAMP)");
  if ($insert_tools_employee == true) {
    echo "
      <script>
        alert('New Record Inserted');
        window.location.href='tools_emp.php';
      </script>
      
    ";
  } else {
    echo "Something went wrong";
  }
}

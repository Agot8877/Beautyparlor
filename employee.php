<?php include('assets/session.php'); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautysalon | Employee</title>
    <?php include('assets/style.php') ?>
  </head>
<body>
  <!-- Topbar -->
  <?php include('assets/topbar_index.php') ?>
  
  <table>
    <thead>
      <tr>
        <th width="200">Employee ID</th>
        <th width="200">Full Name</th>
        <th width="200">Job Name</th>
        <th width="200">Operation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
    <?php
      $user_id = $_SESSION['username'];
      $conn = mysqli_connect("localhost", "root", "", "beautysalon");
        // Check connection
        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT Employee.EmployeeID, Employee.FirstName, Employee.LastName, Employee.MiddleName,Job.JobName as JobName FROM Employee JOIN Job ON Employee.Employee_JobID=Job.JobID";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["EmployeeID"]. "</td>
          <td>" . $row["FirstName"] . " ". $row["MiddleName"]." ".$row["LastName"]."</td>
          <td>". $row["JobName"]. "</td>";
            ?>
          <td> <a name='edit' href='update_employee.php?EmployeeID=<?php echo $row["EmployeeID"];?>' class='button hollow warning'>Edit</a>
          <a onclick="return confirm('Are you sure you want to delete?')" href='?EmployeeID=<?php echo $row["EmployeeID"];?>' class='button hollow alert'>Delete</a></td></tr>
      <?php }
      echo "</table>";
      } else { echo "0 results"; }
      $conn->close();
    ?>
  </table>
    <!--Floating Button -->
      <a type="button" href="create_emp.php" class="button hollow success"  style="position: absolute;right: 2%;bottom: 3%">Add Employee</a>
  <?php include('assets/down-bar_index.php') ?>
    <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/vendor/what-input.js"></script>
    <script src="foundation/js/vendor/foundation.js"></script>
    <script src="foundation/js/app.js"></script>
  </body>

</html>
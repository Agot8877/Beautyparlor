<?php include('assets/session.php'); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautysalon | Salary</title>
    <?php include('assets/style.php') ?>
  </head>
<body>
  <!-- Topbar -->
  <?php include('assets/topbar_index.php') ?>
  
  <table>
    <thead>
      <tr>
        <th width="200">Salary ID</th>
        <th width="200">Employee Name</th>
        <th width="200">Salary</th>
        <th width="200">Time Stamp</th>
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
        $sql = "SELECT Employee.FirstName, Employee.LastName,salaryID, Salary, timestamp FROM Salary JOIN Employee ON Employee.EmployeeID=Salary.EmployeeID";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["salaryID"] . "</td>
          <td>" . $row["FirstName"]. " ".$row["LastName"]."</td>
          <td>₱" . $row["Salary"] . "</td>
          <td>". $row["timestamp"]. "</td>";
            ?>
          <td> <a name='update' href='update_salary.php?salaryID=<?php echo $row["salaryID"];?>' class='button hollow warning'>Edit</a>
          <a onclick="confirm('Do you want to delete this data?')" href='delete_salary.php?salaryID=<?php echo $row["salaryID"];?>' class='button hollow alert'>Delete</a></td></tr>
      <?php }
      echo "</table>";
      } else { echo "0 results"; }
      $conn->close();
    ?>
  </table>
    <!--Floating Button -->
      <a type="button" href="create_salary.php" class="button hollow success"  style="position: absolute;right: 2%;bottom: 3%">Add Salary</a>
  <?php include('assets/down-bar_index.php') ?>
    <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/vendor/what-input.js"></script>
    <script src="foundation/js/vendor/foundation.js"></script>
    <script src="foundation/js/app.js"></script>
  </body>
</html>
<?php include('assets/session.php'); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautysalon | Customer</title>
    <?php include('assets/style.php') ?>
  </head>
<body>
  <!-- Topbar -->
  <?php include('assets/topbar_index.php') ?>
  
  <table>
    <thead>
      <tr>
        <th width="auto">Customer ID</th>
        <th width="auto">First Name</th>
        <th width="auto">Middle Name</th>
        <th width="auto">Last Name</th>
        <th width="auto">Contact Number</th>
        <th width="auto">Purok</th>
        <th width="auto">Barangay</th>
        <th width="auto">City</th>
        <th width="auto">Zip Code</th>
        <th width="auto">Operation</th>
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
        $sql = "SELECT * FROM `Customer`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["customer_id"]. "</td><td>" . $row["first_name"] . "</td>
          <td>". $row["middle_name"]. "</td>
          <td>". $row["last_name"]. "</td>
          <td>". $row["Contact_no."]. "</td>
          <td>". $row["purok"]. "</td>
          <td>". $row["barangay"]. "</td>
          <td>". $row["city"]. "</td>
          <td>". $row["zipcode"]. "</td>";
            ?>
          <td> <a name='edit' href='update_cust.php?customer_id=<?php echo $row["customer_id"];?>' class='button hollow warning'>Edit</a>
          <a onclick="confirm('Do you want to delete this data?')" href='delete_cust.php?customer_id=<?php echo $row["customer_id"];?>' class='button hollow alert'>Delete</a></td></tr>
      <?php }
      echo "</table>";
      } else { echo "0 results"; }
      $conn->close();
    ?>
  </table>
    <!--Floating Button -->
      <a type="button" href="create_cust.php" class="button hollow success"  style="position: absolute;right: 2%;bottom: 3%">Add Customer</a>
  </body>
  <?php include('assets/down-bar_index.php') ?>
    <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/vendor/what-input.js"></script>
    <script src="foundation/js/vendor/foundation.js"></script>
    <script src="foundation/js/app.js"></script>

</html>

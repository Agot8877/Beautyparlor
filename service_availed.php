<?php include('assets/session.php'); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautysalon | Service-Availed</title>
    <?php include('assets/style.php') ?>
  </head>
<body>
  <!-- Topbar -->
  <?php include('assets/topbar_index.php') ?>
  
  <table>
    <thead>
      <tr>
        <th width="auto">Reciept No.</th>
        <th width="auto">Customer Name</th>
        <th width="auto">Timestamp</th>
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
        $sql = "SELECT reciept_no,Customer.first_name,Customer.last_name,timestamp FROM `Services_availed` JOIN Customer ON Customer.customer_id=Services_availed.customer_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
          echo "<tr>
          <td>". $row["reciept_no"]. "</td>
          <td>" . $row["first_name"]. "".$row["last_name"]."</td>
          <td>" . $row["timestamp"] . "</td>
          ";
            ?>
          <td> 
          <a onclick="confirm('Do you want to delete this data?')" href='delete_serv_availed.php?reciept_no=<?php echo $row["reciept_no"];?>' class='button hollow alert'>Delete</a></td></tr>
      <?php }
      echo "</table>";
      } else { echo "0 results"; }
      $conn->close();
    ?>
  </table>
    <!--Floating Button -->
      <a type="button" href="create_serviceAvailed.php" class="button hollow success"  style="position: absolute;right: 2%;bottom: 3%">Add Service Availed</a>
  </body>
  <?php include('assets/down-bar_index.php') ?>
    <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/vendor/what-input.js"></script>
    <script src="foundation/js/vendor/foundation.js"></script>
    <script src="foundation/js/app.js"></script>

</html>

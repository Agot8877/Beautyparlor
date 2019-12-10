<?php include('assets/session.php'); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beautysalon | Tools-Items</title>
  <?php include('assets/style.php') ?>
</head>

<body>
  <!-- Topbar -->
  <?php include('assets/topbar_index.php') ?>

  <table>
    <thead>
      <tr>
        <th width="200">ID No.</th>
        <th width="200">Timestamp</th>
        <th width="200">Description</th>
        <th width="200">Amount</th>
        <th width="200">Quantity</th>
        <th width="200">Unit</th>
        <th colspan="2" width="200">Operation</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $user_id = $_SESSION['username'];
      $conn = mysqli_connect("localhost", "root", "", "beautysalon");
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 
       $sql = "SELECT *  FROM tools_item";
        
        $result = $conn->query($sql);
        if ($result->num_rows > 0):
         while($row = $result->fetch_assoc()):
    ?>
          <tr>
            <td><?php echo $row["id_no"]; ?></td>
            <td><?php echo date_format(date_create($row["timestamp"]),'M d, Y h:i:s a'); ?></td>
            <td><?php echo $row["description"]; ?></td>
            <td><?php echo $row["amount"]; ?></td>
            <td><?php echo $row["quantity"]; ?></td>
            <td><?php echo $row["unit"]; ?></td>
            <td><a name='edit' href='update_tools_item.php?id_no=<?php echo $row["id_no"];?>' class='button hollow warning'>Edit</a></td>
            <td><a onclick="confirm('Do you want to delete this data?')" href='delete_tools_item.php?id_no=<?php echo $row["id_no"];?>' class='button hollow alert'>Delete</a></td>
          </tr>
    <?php
         endwhile;
        endif;

         // output data of each row
    ?>
    </tbody>
  </table>
  <!--Floating Button -->
  <a type="button" href="create_tools_item.php" class="button hollow success"
    style="position: absolute;right: 2%;bottom: 3%">Add Tool-Item</a>
  <?php include('assets/down-bar_index.php') ?>
  <script src="foundation/js/vendor/jquery.js"></script>
  <script src="foundation/js/vendor/what-input.js"></script>
  <script src="foundation/js/vendor/foundation.js"></script>
  <script src="foundation/js/app.js"></script>
</body>

</html>
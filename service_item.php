<?php include('assets/session.php'); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautysalon | Service-Items</title>
    <?php include('assets/style.php') ?>
  </head>
<body>
  <!-- Topbar -->
  <?php include('assets/topbar_index.php') ?>
  
  <table>
    <thead>
      <tr>
        <th width="auto">Reciept No.</th>
        <th width="auto">Service Availed</th>
        <th width="auto">Amount Total</th>
        <th width="auto">Operation</th>
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
        $sql = "Select DISTINCT reciept_no from service_item";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         // output data of each row
         
          while($row = $result->fetch_assoc()) {
            $services = '';
            echo "<tr>";
            echo "<td>".$row["reciept_no"]."</td>";

            $q = "SELECT Serv_Name from services, service_item WHERE services.ServiceID = service_item.Services_checked and reciept_no = " . $row["reciept_no"] ;
            $res = $conn->query($q); 
            if ($res->num_rows > 0) {
              while($q = $res->fetch_assoc()) {
              $services .= $q["Serv_Name"] . ",";
              }
            }
            echo "<td>" . $services. "</td>";


            $amount = "SELECT SUM(Price) as Price from services, service_item WHERE services.ServiceID = service_item.Services_checked and reciept_no = " . $row["reciept_no"] ;

          $totalamount = $conn->query($amount);  
          $amount = $totalamount->fetch_assoc()['Price']; 
          echo " <td>". $amount . "</td> "; 

          echo "<td><a onclick='confirm('Do you want to delete this data?')' href='?ser_item=".$row["reciept_no"]."' class='button hollow alert'>Delete</a></td></tr>";
          }
        } 
        else { 
          echo "<tr>
            <td colspan='4'><center>No Record</center></td>
          </tr>";

         }
    ?>
  </table>
    <!--Floating Button -->
      <a type="button" href="create_services_item.php" class="button hollow success"  style="position: absolute;right: 2%;bottom: 3%">Add Service Item</a>
  </body>
  <?php include('assets/down-bar_index.php') ?>
    <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/vendor/what-input.js"></script>
    <script src="foundation/js/vendor/foundation.js"></script>
    <script src="foundation/js/app.js"></script>

</html>

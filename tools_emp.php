<?php include('assets/session.php'); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beautysalon | Tools-Employee</title>
  <?php include('assets/style.php') ?>
</head>

<body>
  <!-- Topbar -->
  <?php include('assets/topbar_index.php') ?>

  <table>
    <thead>
      <tr>
        <th width="200">Tool ID</th>
        <th width="200">Employee Name</th>
        <th width="200">Tool Name</th>
        <th width="200">Quantity</th>
        <th width="200">Timestamp</th>
        <th colspan="2" ="200">Operation</th>
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

        $sql = "
          SELECT
          tools_item.id_no as id_no,
          tools_employee.tool_id,
          CONCAT(
              employee.FirstName,
              ' ',
              employee.MiddleName,
              ' ',
              employee.LastName
          ) AS 'Employee Name',
          tools_item.description AS 'tool name',
          tools_employee.quantity,
          tools_employee.timestamp
          FROM
              employee,
              tools_item,
              tools_employee
          WHERE
              tools_employee.tool_empID = employee.EmployeeID AND tools_employee.id_no = tools_item.id_no
            
        ";
        
        $result = $conn->query($sql);
        if ($result->num_rows > 0):
          while($row = $result->fetch_assoc()):
      ?>
        <tr>
          
          <td><?php echo $row["tool_id"]; ?></td>
          <td><?php echo $row["Employee Name"]; ?></td>
          <td><?php echo $row["tool name"]; ?></td>
          <td><?php echo $row["quantity"]; ?></td>
          <td><?php echo date_format(date_create($row["timestamp"]),'M d, Y h:i:s a'); ?></td>
          <td><a name='edit' href='update_tools_employee.php?tool_id=<?php echo $row["tool_id"];?>' class='button hollow warning'>Edit</a></td>
          <td> <a onclick="confirm('Do you want to delete this data?')" href='delete_tools_emp.php?tool_id=<?php echo $row["tool_id"];?>&id_no=<?php echo $row["id_no"]; ?>' class='button hollow alert'>Delete</a></td>
        </tr>
      <?php
          endwhile;
        endif;
       
      
      ?>
    </tbody>
  </table>
  <!--Floating Button -->
  <a type="button" href="create_tools_employee.php" class="button hollow success"
    style="position: absolute;right: 2%;bottom: 3%">Add Tool-</a>
  <?php include('assets/down-bar_index.php') ?>
  <script src="foundation/js/vendor/jquery.js"></script>
  <script src="foundation/js/vendor/what-input.js"></script>
  <script src="foundation/js/vendor/foundation.js"></script>
  <script src="foundation/js/app.js"></script>
</body>

</html>
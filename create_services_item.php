<?php include('assets/session.php'); ?>


<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Availed Item</title>
    <?php include('assets/style.php') ?>
  </head>
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Add Service Item</h2>
  	</div>
	<form action="php/insert_serviceItem.php" method="post">
	  <div class="grid-container">
	  	<div class="small-12 cell">
	          <label> Reciept No.
	            <select name="reciept_no">
	             <?php
	             	include('php/insert_serviceItem.php');
	             	$sql = "SELECT * FROM `Services_availed`";
	  				$result = mysqli_query($db, $sql);
			        if(mysqli_num_rows($result)){
			          while($row = mysqli_fetch_array($result)){
			      ?>
			      <option value="<?php echo $row['reciept_no'];?>"><?php echo $row['reciept_no'];?></option>
			      <?php
			          }
			        }
			      ?>
	            </select>
	          </label>
	        </div>
	        <fieldset class="fieldset">
			  <legend>Services</legend>
			  	<table border="1" align="center">
				<tr>

				<td>Service ID</td>
				<td>Service Name</td>
				<td>Price</td>
				
				</tr>


				<?php
				$sql="select * from Services";
				$result = mysqli_query($db, $sql);
				$rowcount=mysqli_num_rows($result);
				for($i=1;$i<=$rowcount;$i++)
				{
					  $row=mysqli_fetch_array($result);
				?>
				<tr>
				<td><?php echo $row["ServiceID"] ?></td>
				<td><?php echo $row["Serv_Name"] ?></td>
				<td><?php echo $row["Price"] ?></td>
				<td> 
					<input type="checkbox" name="chk[]" value="<?php echo $row["ServiceID"]; ?>"></td>

				</tr>
				<?php
				}
				?>

				</table>	  
			</fieldset>
	  </div>
	  <button class="button expanded" value="submit" type="submit" name="submit" id="submit">Save</button>
	</form>
	<!-- Scripts -->
	<script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/vendor/what-input.js"></script>
    <script src="foundation/js/vendor/foundation.js"></script>
    <script src="foundation/js/app.js"></script>
</body>	
</html>

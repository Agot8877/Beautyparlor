<?php include('assets/session.php') ?>
<?php include('php/update_tools_item.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Update Tool-Item</title>
				<?php include('assets/style.php') ?>
	</head>
	
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Update Tool Item</h2>
  	</div>
	<form action="" method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	      <div class="medium-12 cell">
	        <label>Description
	          <input type="text" name="Description" value="<?php echo $row['description']; ?>" placeholder="Description">
	        </label>
	      </div>
	      <div class="medium-12 cell">
	        <label>Amount
	          <input type="number" name="Amount" value="<?php echo $row['amount']; ?>" placeholder="Amount">
	        </label>
	      </div>
	      <div class="medium-12 cell">
	        <label>Update Quantity
	          <input type="number" name="Quantity" value="<?php echo $row['quantity']; ?>" placeholder="Salary">
	        </label>
	      </div>
	      <div class="small-12 cell">
          <label> Job Name
            <select name="unit">
            	 <option value="<?php echo $row['unit'];?>" selected><?php echo $row['unit'];?></option>
                  <?php
  				  $query = "SELECT * FROM unit";
				  $result = mysqli_query($db, $query);
			      if(mysqli_num_rows($result)){
			          while($row1 = mysqli_fetch_array($result)){
			      ?> 

			      <option value="<?php echo $row1['unit'];?>"><?php echo $row1['unit'];?></option>
			      <?php
			          }
			        }
			      ?>
            </select>
          </label>
        </div>
	    </div>
	  </div>
	  <input type="hidden" name="id_no" value="<?php echo $row['id_no'];?>">
		<!-- <button class="button expanded" type="submit" name="update">Update</button> -->
		<input type="submit" class="button expanded" name="update" value="Update">
	</form>
		<!-- Scripts -->
		<script src="foundation/js/vendor/jquery.js"></script>
	    <script src="foundation/js/vendor/what-input.js"></script>
	    <script src="foundation/js/vendor/foundation.js"></script>
	    <script src="foundation/js/app.js"></script>
</body>		
</html>
<?php include('assets/session.php'); ?>
<?php include('php/insert_tools_item.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tool-Item</title>
    <?php include('assets/style.php') ?>
  </head>
<body>
	<?php include('assets/topbar_index.php'); ?>
	<div class="header">
  		<h2>Add Tool-Item</h2>
  	</div>
	<form method="post">
	  <div class="grid-container">
	    <div class="grid-x grid-padding-x">
	    	<div class="small-12 cell">
	        <label>ID No.
	          <input type="text" name="id_no" placeholder="id number" required>
	        </label>
	      </div>
	      <div class="small-12 cell">
	        <label> Description
	          <input type="text" name="Description" placeholder="Description" required="">
	        </label>
	      </div>
	      <div class="small-12 cell">
	        <label> Amount
	          <input type="number" name="Amount" placeholder="Amount" required>
	        </label>
	      </div>
	      <div class="small-12 cell">
	        <label> Quantity
	          <input type="number" name="quantity" placeholder="Quantity" required>
	        </label>
	      </div>
	      <div class="small-12 cell">
	          <label> unit
	            <select name="unit">
	             <?php
	             	$sql = "SELECT * FROM unit";
	  				$result = mysqli_query($db, $sql);
			        if(mysqli_num_rows($result)){
			          while($row = mysqli_fetch_array($result)){
			      ?>
			      <option value="<?php echo $row['unit'];?>"><?php echo $row['unit'];?></option>
			      <?php
			          }
			        }
			      ?>
	            </select>
	          </label>
	        </div>
	      
	    </div>
	  </div>
	  <button class="button expanded" type="submit" name="submit">Save</button>
	</form>
	<!-- Scripts -->
	<script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/vendor/what-input.js"></script>
    <script src="foundation/js/vendor/foundation.js"></script>
    <script src="foundation/js/app.js"></script>
</body>	
</html>
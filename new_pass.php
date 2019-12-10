<?php include('server.php') ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Password Reset</title>
        <?php include('assets/style.php') ?>
  </head>
  
<body>
  <?php include('assets/topbar_login.php'); ?>
  <div class="header">
      <h2>Password Reset</h2>
    </div>
  <form action="forget.php" method="post">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <?php include('errors.php'); ?>
        <div class="medium-12 cell">
          <label>New Password
            <input type="password" name="new_pass"  placeholder="password">
          </label>
        </div>
        <div class="medium-12 cell">
          <label>Confirm New Password
            <input type="password" name="new_pass_c"  placeholder="password">
          </label>
        </div>
  
      </div>
    </div>
    <button class="button expanded" type="submit" name="new_password">Submit</button>
  </form>

    <script src="foundation/js/vendor/jquery.js"></script>
      <script src="foundation/js/vendor/what-input.js"></script>
      <script src="foundation/js/vendor/foundation.js"></script>
      <script src="foundation/js/app.js"></script>
</body>   
</html>

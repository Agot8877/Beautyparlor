<?php include('server.php') ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeautySalon | Log In</title>
    <?php include('assets/style.php') ?>
  </head>
  <?php include('assets/topbar_login.php') ?>
  <body>
    <div class="header">
    <h2>Login Form</h2>
  </div>
  
  <form method="post" action="login.php">
    <div data-abide-error class="alert callout" style="display: none;">
      <p><i class="fi-alert"></i> There are some errors in your form.</p>
    </div>
    <?php include('errors.php'); ?>
    <!-- new Form -->
    <div class="grid-x grid-padding-x">
      <div class="small-4 cell">
        <label for="right-label" class="text-right">User Name:</label>
      </div>
      <div class="small-8 cell">
        <input id="right-label" type="text" name="username" placeholder="Enter Your User Name" required>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="small-4 cell">
        <label for="right-label" class="text-right">Password:</label>
      </div>
      <div class="small-8 cell">
        <input id="right-label" type="password" name="password" placeholder="Enter Your Password" required>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <button type="submit" class="button hollow expanded" name="login_user">Login</button>
    </div>
    <p><a href="forget.php">Forgot your password?</a></p>
  </form>
    

        <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/vendor/what-input.js"></script>
    <script src="foundation/js/vendor/foundation.js"></script>
    <script src="foundation/js/app.js"></script>
    <?php include('assets/down-bar_index.php') ?>
  </body>
</html>

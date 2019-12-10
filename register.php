<?php include('server.php') ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeautySalon | Register</title>
    <?php include('assets/style.php') ?>
  </head>
  <body>
    <?php include('assets/topbar_reg.php') ?>

  <!-- Register Form -->
  
  <div class="header">
    <h2>Register Form</h2>
  </div>
  
  <form method="post" action="register.php" data-abide novalidate>
    <div data-abide-error class="alert callout" style="display: none;">
      <p><i class="fi-alert"></i> Please fill up the red area.</p>
    </div>
    <?php include('errors.php');
          include('success.php'); ?>
    <!-- new form -->
    <div class="grid-x grid-padding-x">
      <div class="small-4 cell">
        <label for="right-label" class="text-right">User Name:</label>
      </div>
      <div class="small-8 cell">
        <input id="right-label" aria-errormessage="usernameerr" pattern="text" type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter Username first" required>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="small-4 cell">
        <label for="right-label" class="text-right">Email:</label>
      </div>
      <div class="small-8 cell">
        <input id="right-label" aria-errormessage="usernameerr" pattern="email" type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter Email first" required>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="small-4 cell">
        <label for="right-label" class="text-right">Password:</label>
      </div>
      <div class="small-8 cell">
        <input id="right-label" aria-errormessage="usernameerr" pattern="password" type="password" name="password_1" placeholder="Enter Password" required>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="small-5 cell">
        <label for="right-label" class="text-right">Confirm Password:</label>
      </div>
      <div class="small-7 cell">
        <input id="right-label" aria-errormessage="usernameerr" pattern="password" type="password" name="password_2" placeholder="Confirm Password" required>
      </div>
    </div>
    <!-- end -->
    <div class="grid-x grid-padding-x">
      <button class="button hollow expanded" name="reg_user">Register</button>
    </div>
  </form>
</body>


    <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/vendor/what-input.js"></script>
    <script src="foundation/js/vendor/foundation.js"></script>
    <script src="foundation/js/app.js"></script>
    <?php include('assets/down-bar_index.php') ?>
</html>
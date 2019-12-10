  <!--Menu Text Phonebook -->
  <div class="top-bar" id="responsive-menu">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li> 
          <a class="menu-text" style="font-family: Cantarell">Mariel's Beauty Salon</a>
        </li>
        <li> 
          <a href="index.php">Home</a>
        <li>
          <div class="row">
            <div class="columns">
              <ul class="dropdown menu" data-dropdown-menu>
                <li>
                  <a href="Services.php">Services</a>
                  <ul class="menu">
                    <li><a href="service_availed.php">Service Availed</a></li>
                    <li><a href="service_item.php">Service Items</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li> 
          <a href="employee.php">Employee</a>
        </li>
        <li> 
          <a href="job.php">Job</a>
        </li>
        <li> 
          <a href="salary.php">Salary</a>
        </li>
        <li>
          <div class="row">
            <div class="columns">
              <ul class="dropdown menu" data-dropdown-menu>
                <li>
                  <a href="#">Tools</a>
                  <ul class="menu">
                    <li><a href="tools_emp.php">Tools Employee</a></li>
                    <li><a href="tools_item.php">Tools Items</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li>
          <a href="customer.php">Customer</a>
        </li>   
      </ul>

            
    </div>
    <!--Username Display -->

    <div class="top-bar-right">
      <ul class="menu">
        <li><?php  if (isset($_SESSION['username'])) : ?>
          <p style="color: black;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        </li>
        <!--Logout Button -->
        <li>
          <div class="row">
            <div class="columns">
              <ul class="dropdown menu" data-dropdown-menu>
                <li>
                  <a href="#">Options</a>
                  <ul class="menu">
                    <li><a onclick="return Confirm('Are you sure to logout?')" class="alert button hollow" type="button"  href="index.php?logout='1'" style="color: black; border-radius:10px; ">logout</a><?php endif ?></li>
                    <li><a href="change_password.php" class="button hollow" type="button" style="color: black; border-radius:10px; ">Change Password</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          
        </li>
      </ul>
    </div>
  </div>
</div>
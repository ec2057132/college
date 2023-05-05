<!-- Base Template -->
<?php include("includes/base.php"); ?>
    <!-- Title -->
    <title>Admin Login | Netbook</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_login_admin.css">
  </head>
  <body>
    <!-- Title Bar -->
    <div id="titlebar">
      <h3 id="titlebar-text">Netbook</h3>
    </div>
    <!-- Main Content Section -->
    <div id="content">
      <!-- Form 1 -->
      <div class="main-sec" id="form-1">
        <div class="panel-box">
          <div class="heading-title">
            <h3 class="title">Admin Login</h3>
          </div>
          <!-- Line Break -->
          <div class="horizontal-line"></div>
          <div id="form-sec-1">
            <form onsubmit="return sendFormData()">

              <input type="text" class="input input-top" id="e" placeholder="Email Address" autocomplete="off">
              <input type="password" class="input" id="pwd" placeholder="Password" autocomplete="off">
              <input type="submit" value="Login" id="login-btn">
              
              <div id="forgot-password-section">
                <a href="forgot_password.php" id="forgot-password">Forgotten Password?</a>
              </div>
              <div class="horizontal-line"></div>
              
              <div id="register-btn-section">
                <a href="index.php" id="register-btn">
                  Back
                </a>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="flashbar"></div>
    <script src="javascript/login_admin_script.js"></script>
  </body>
</html>
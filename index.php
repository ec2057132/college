<!-- Base Template -->
<?php include("includes/base.php"); ?>
    <!-- Title -->
    <title>Netbook</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_landing.css">
  </head>
  <body>
    <div class="container">
      <div class="row">

        <!--Left-->
        <div class="col-md-5 center-me-sec-n">
          <div class="center-me">
            <h1 id="welcome-text">Netbook</h1>
            <h5 id="tagLine">Join us. Thrive.</h5>
          </div>
        </div>

        <!--Middle-->
        <div class="col-2 center-me-sec-l">
          <div class="center-me">
            <div id="line"></div>
          </div>
        </div>
        
        <!--Right-->
        <div class="col-md-5 center-me-sec-b">
          <div class="center-me" id="link-sec">
            <div id="login-form">
              <form onsubmit="return sendFormData()">
                <input type="text" name="email" class="inputField" id="e" placeholder="Email Address" autocomplete="off">
                <input type="password" name="password" class="inputField" id="pwd" placeholder="Password" autocomplete="off">
                <input type="submit" value="Login" id="login-btn">
              </form>
              
              <div id="forgot-password-section">
                <a href="forgot_password.php" id="forgot-password">Forgotten Password?</a>
              </div>

              <div id="horizontal-line"></div>

              <div id="register-btn-section">
                <a href="register.php" id="register-btn">
                  Create new account
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="flashbar"></div>
    <script src="javascript/login_script.js"></script>
  </body>
</html>
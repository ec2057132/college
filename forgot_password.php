<?php include("includes/base.php") ?>
    <!-- Title -->
    <title>Netbook | Forgotten Password</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_forgot_password.css">
    <script src="javascript/forgotten_password_script.js"></script>
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
            <h3 class="title">Forgot Your Password?</h3>
          </div>
          <div id="heading-tagline">
            <h5 id="tagline">No Problem</h5>
          </div>
          <!-- Line Break -->
          <div class="horizontal-line"></div>
          <div id="form-sec-1">
            <div id="info-sec">
              <p id="info">
                Please enter the email of the account you are trying to reset the password for.
              </p>
            </div>
            <form onsubmit="return emailSearch()">

              <input type="email" class="input" id="e" required placeholder="Email Address" autocomplete="off">
              <div class="horizontal-line"></div>
              <div id="btn-sec">
                <input type="submit" value="Submit" class="recover-btn" id="findEmail">
                <a href="index.php" id="login-link">
                  I've Remembered
                </a>
              </div>

            </form>
          </div>
        </div>
      </div>
      
      <!-- Form 2 -->
      <div class="main-sec" id="form-2" style="display: none;">
        <div class="panel-box">
          <div class="heading-title">
            <h3 class="title">Your Security Questions</h3>
          </div>
          <!-- Line Break -->
          <div class="horizontal-line"></div>

          <div id="form-sec-2">
            <form onsubmit="return verifyAnswers()">

              <div class="question-sec">
                <p class="question-text" id="q1-text">
                  Placeholder Question?
                </p>
              </div>
              <input type="text" required class="input" id="q1-a" placeholder="Your Answer..." autocomplete="off">
  
              <div class="question-sec">
                <p class="question-text" id="q2-text">
                  Placeholder Question?
                </p>
              </div>
              <input type="text" required class="input" id="q2-a" placeholder="Your Answer..." autocomplete="off">
  
              <div class="horizontal-line"></div>
              
              <div id="btn-sec">
                <input type="submit" value="Submit" class="recover-btn">
                <a href="index.php" id="login-link">
                  I've Remembered
                </a>
              </div>
              
            </form>
          </div>

        </div>
      </div>

      <!-- Form 3 -->
      <div class="main-sec" id="form-3" style="display: none;">
        <div class="panel-box">
          <div class="heading-title">
            <h3 class="title">Create Your New Password</h3>
          </div>
          <!-- Line Break -->
          <div class="horizontal-line"></div>

          <div id="form-sec-2">
            <form onsubmit="return changePassword()">

              <input type="password" required class="input" id="np1" placeholder="New Password" autocomplete="off">
              <input type="password" required class="input input-3" id="np2" placeholder="Confirm Password" autocomplete="off">

              <div class="horizontal-line"></div>
              
              <div id="btn-sec">
                <input type="submit" value="Submit" class="recover-btn">
                <a href="index.php" id="login-link">
                  I've Remembered
                </a>
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- Flashbar -->
    <div id="flashbar"></div>
  </body>
</html>
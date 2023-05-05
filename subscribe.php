<?php include("includes/base.php");
//Checks id login variable has a variable.
session_start();
if (isset($_SESSION["u_id"])) {
  if ($_SESSION["sub_status"] == 1) {
    Header("Location: home.php");
  }
}
else {
  Header("Location: index.php");
}
?>
    <title>Subscribe | Netbook</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_navbar.css">
    <link rel="stylesheet" href="styles/style_subscribe.css">
  </head>
  <body>
    <!--Navigation Bar-->
    <?php include("includes/navbar.php");?>
    <div id="main-sec" class="content">
      <div id="box-sec">
        <div class="box-item" id="left-box">
          <div id="box-left">

            <div class="title-sec">
              <div class="title">
                Plan Upgrade
              </div>
            </div>

            <div class="horizontal-line-sec">
              <div class="horizontal-line"></div>
            </div>
            
            <div id="sub-title-sec">
              <div id="sub-container">
                <div id="sub-title">
                  Premium
                </div>
              </div>
            </div>

            <div id="price-sec">
                <div id="price-text">
                  <sup>£</sup>99<sub>/yr</sub>
                </div>
            </div>

            <div class="horizontal-line-sec">
              <div class="horizontal-line"></div>
            </div>

            <div id="sub-info-sec">

              <div class="sub-info-item">
                <div class="sub-info">
                  <div class="info">
                    Access all Netbook Content
                  </div>
                  <div class="tick-container">
                    <img src="img/check.png" alt="A tick Symbol." class="tick">
                  </div>
                </div>
              </div>

              <div class="sub-info-item">
                <div class="sub-info">
                  <div class="info">
                    Bookmark your Favourites
                  </div>
                  <div class="tick-container">
                    <img src="img/check.png" alt="A tick Symbol." class="tick">
                  </div>
                </div>
              </div>

              <div class="sub-info-item">
                <div class="sub-info">
                  <div class="info">
                    Influence your Recommended
                  </div>
                  <div class="tick-container">
                    <img src="img/check.png" alt="A tick Symbol." class="tick">
                  </div>
                </div>
              </div>

              <div class="sub-info-item">
                <div class="sub-info">
                  <div class="info">
                    Rate Our Content
                  </div>
                  <div class="tick-container">
                    <img src="img/check.png" alt="A tick Symbol." class="tick">
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
        <div class="box-item" id="right-box">
          <div id="box-right">

            <div class="title-sec">
              <div class="title">
                Card Payment
              </div>
            </div>

            <div class="horizontal-line-sec">
              <div class="horizontal-line"></div>
            </div>
            
            <div id="form-sec">
              <?php
              echo '
              <form onsubmit="return changeSubStatus('.$_SESSION["u_id"].')">
                <input type="text" name="number" class="input input-top" id="cardNum" placeholder="Card Number" autocomplete="off">
                <input type="text" name="name" class="input" id="cardName" placeholder="Name on Card" autocomplete="off">
                
                <div id="expiry-label-sec">
                  <div id="expiry-label">Expiry Date</div>
                </div>
                <div id="card-details-sec">
                  <div id="card-details-item-left">
                    <select name="exMonth" size="1" class="input-drop" id="ex-month">
                      <option value="1">01</option>
                      <option value="2">02</option>
                      <option value="3">03</option>
                      <option value="4">04</option>
                      <option value="5">05</option>
                      <option value="6">06</option>
                      <option value="7">07</option>
                      <option value="8">08</option>
                      <option value="9">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                    <select name="exYear" size="1" class="input-drop" id="ex-year">
                      <option value="2023">23</option>
                      <option value="2024">24</option>
                      <option value="2025">25</option>
                      <option value="2026">26</option>
                      <option value="2027">27</option>
                      <option value="2028">28</option>
                      <option value="2029">29</option>
                      <option value="2030">30</option>
                      <option value="2031">31</option>
                      <option value="2032">32</option>
                      <option value="2033">33</option>
                    </select>
                  </div>
                  <div id="card-details-item-right">
                    <input type="text" name="cvc" class="input input-top" id="cardCVC" placeholder="CVC" autocomplete="off">
                  </div>
                </div>
                <input type="submit" name="payment" id="payment-btn" value="Upgrade Now" autocomplete="off">
              </form>
              ';
              ?>
            </div>
          </div>
        </div>

        <div class="box-item-confirm" id="confirm-box">
          <div id="box-confirm">

            <div class="title-sec-confirm">
              <div class="sub-container-confirm">
                <div class="confirm-title">
                  Welcome to Premium!
                </div>
              </div>
              <div class="confirm-sub-title">
                Payment Successful
              </div>
            </div>

            <div class="horizontal-line-sec">
              <div class="horizontal-line"></div>
            </div>

            <div id="confirm-text-sec">
              <div class="confirm-text-item-top">
                Thank you for upgrading to Netbook Premium. Your card details have been stored for the recurring anual fee only, which can be canceled at any time.
              </div>

              <div class="confirm-text-item-bottom">
                <div id="benefits-title-sec">
                  <span id="benefits-title">All of the following benefits are now yours!</span>
                </div>
              </div>
            </div>

            <div id="sub-info-sec">

              <div class="sub-info-item">
                <div class="sub-info">
                  <div class="info">
                    Access all Netbook Content
                  </div>
                  <div class="tick-container">
                    <img src="img/check.png" alt="A tick Symbol." class="tick">
                  </div>
                </div>
              </div>

              <div class="sub-info-item">
                <div class="sub-info">
                  <div class="info">
                    Bookmark your Favourites
                  </div>
                  <div class="tick-container">
                    <img src="img/check.png" alt="A tick Symbol." class="tick">
                  </div>
                </div>
              </div>

              <div class="sub-info-item">
                <div class="sub-info">
                  <div class="info">
                    Influence your Recommended
                  </div>
                  <div class="tick-container">
                    <img src="img/check.png" alt="A tick Symbol." class="tick">
                  </div>
                </div>
              </div>

              <div class="sub-info-item">
                <div class="sub-info">
                  <div class="info">
                    Rate Our Content
                  </div>
                  <div class="tick-container">
                    <img src="img/check.png" alt="A tick Symbol." class="tick">
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <script src="javascript/navbar_script.js"></script>
    <script src="javascript/subscribe_script.js"></script>
  </body>
</html>
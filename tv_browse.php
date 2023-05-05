<?php include("includes/base.php");
//Checks id login variable has a variable.
session_start();
if (!isset( $_SESSION["u_id"] ) ) {
  Header("Location: index.php");
}
?>
    <title>TV Shows | Netbook</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_navbar.css">
    <link rel="stylesheet" href="styles/style_tv_browse.css">
  </head>
  <body>
    <!--Navigation Bar-->
    <?php include("includes/navbar.php");?>
    
    <div id="main-sec" class="content">
      <div class="box">
        <div class="box-container">
          <div class="heading-sec">
            <div class="heading">Recently Added</div>
          </div>
          <div class="horizontal-line-sec">
            <div class="horizontal-line"></div>
          </div>
          <div class="media-scroller snaps-inline">
            <?php
            require ("includes/connect_db.php");

            $recentTvSql = "SELECT `tv_id`, `tv_title`, `tv_thumbnail`, `tv_age`
              FROM `tv`
              ORDER BY `tv_id` DESC
              LIMIT 10;";
            $recentTvResult = mysqli_query($conn, $recentTvSql);
            if (mysqli_num_rows($recentTvResult) >= 1) {
              while($recentTvRow = mysqli_fetch_array($recentTvResult, MYSQLI_ASSOC)) {
                $sTvId = $recentTvRow["tv_id"];
                $recentTvSResult = "SELECT `s_id`
                FROM `episode`
                WHERE `tv_id` = '$sTvId'
                ORDER BY `s_id` DESC;";
                $recentTvSResult = mysqli_query($conn, $recentTvSResult);
                $recentTvSRow = mysqli_fetch_array($recentTvSResult, MYSQLI_ASSOC);

              echo '
              <div class="scroll-item">
                <div class="content-info">
                  <img src="img/tv_shows/'.$recentTvRow["tv_thumbnail"].'.png">
                  <p>'.$recentTvRow["tv_title"].'</p>
                </div>
                <div class="content-num-len">
                  <p><span class="length">';
                  if ($recentTvSRow["s_id"] == 1) {
                    $epNum = mysqli_num_rows($recentTvSResult);
                    if ($epNum == 1) {
                      echo $epNum.' Episode';
                    }
                    else {
                      echo $epNum.' Episodes';
                    }
                  }
                  else {
                    echo $recentTvSRow["s_id"].' Seasons';
                  }
                  echo'</span>
                  </p>
                  <img src="img/age_rating/'.$recentTvRow["tv_age"].'.png" class="age-icon">
                </div>
              </div>
              ';
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>

    <script src="javascript/navbar_script.js"></script>
    <script src="javascript/tv_browse_script.js"></script>
  </body>
</html>
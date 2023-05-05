<?php include("includes/base.php");
//Checks id login variable has a variable.
session_start();
if (!isset( $_SESSION["u_id"] ) ) {
  Header("Location: index.php");
}
?>
    <title>Homepage | Netbook</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_navbar.css">
    <link rel="stylesheet" href="styles/style_home.css">
    <link rel="stylesheet" href="styles/style_tv_browse.css">
  </head>
  <body>
    <!--Navigation Bar-->
    <?php include("includes/navbar.php");?>

    <div id="featured-trailer-sec" class="content">
      <div style="width: 80%;">
        <div id="featured-trailer-container">
          <!--?controls=0&autoplay=1&mute=1&loop=1&playlist=aCv29JKmHNY-->
          <iframe id="trailer" width="1024" height="720" src="https://www.youtube-nocookie.com/embed/aCv29JKmHNY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
        </div>
      </div>
    </div>

    <div id="greeting-sec">
      <div class="greeting-item">
        <p id="greeting-text"></p>
      </div>
      <div class="greeting-item">
        <div id="greeting-line"></div>
      </div>
    </div>

    <div id="main-sec" class="content">
      <div class="box">
        <div class="box-container">
          <div class="heading-sec">
            <div class="heading">Recently Added Movies</div>
          </div>
          <div class="horizontal-line-sec">
            <div class="horizontal-line"></div>
          </div>
          <div class="media-scroller snaps-inline">
            <?php
            require ("includes/connect_db.php");

            $movieSql = "SELECT `m_title`, `m_duration`, `m_thumbnail`, `m_age`
              FROM `movie`
              ORDER BY `m_id` DESC
              LIMIT 10;";
            $movieResult = mysqli_query($conn, $movieSql);
            if (mysqli_num_rows($movieResult) == 10) {
              while($movieRow = mysqli_fetch_array($movieResult, MYSQLI_ASSOC)) {
              echo '
              <div class="scroll-item">
                <div class="content-info">
                  <img src="img/movies/'.$movieRow["m_thumbnail"].'.png">
                  <p>'.$movieRow["m_title"].'</p>
                </div>
                <div class="content-num-len">
                  <p><span class="length">'.$movieRow["m_duration"].'</span></p>
                  <img src="img/age_rating/'.$movieRow["m_age"].'.png" class="age-icon">
                </div>
              </div>
              ';
              }
            }
            ?>
          </div>
        </div>
      </div>
      
      <div class="box">
        <div class="box-container">
          <div class="heading-sec">
            <div class="heading">Recently Added Shows</div>
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
                  <p>';
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
                  echo'
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
    
    <!-- Flashbar -->
    <div id="flashbar"></div>

    <!-- Payment Screen Button -->
    <?php
      if ($_SESSION["sub_status"] == 0) {
        echo '<a href="subscribe.php" id="subscribe-btn">Join Premium</a>';
      }
    ?>
    <script src="javascript/navbar_script.js"></script>
    <script src="javascript/home_script.js"></script>
    <script src="javascript/tv_browse_script.js"></script>
    <script src="javascript/movie_browse_script.js"></script>
  </body>
</html>
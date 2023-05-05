<?php include("includes/base.php");
//Checks id login variable has a variable.
session_start();
if (!isset( $_SESSION["u_id"] ) ) {
  Header("Location: index.php");
}
?>
    <title>Movies | Netbook</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_navbar.css">
    <link rel="stylesheet" href="styles/style_movie_browse.css">
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
    </div>
    
    <script src="javascript/navbar_script.js"></script>
    <script src="javascript/movie_browse_script.js"></script>
  </body>
</html>
<?php include("includes/base.php");
//Checks id login variable has a variable.
session_start();
if (!isset( $_SESSION["a_id"] ) ) {
  Header("Location: index.php");
}
?>
    <title>Dashboard | Netbook Admin</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_admin_dashboard.css">
  </head>
  <body>
    <!--Title Bar -->
    <div id="titlebar">
      <div id="titlebar-item-1">
        <h3 id="titlebar-name">Netbook</h3>
      </div>
      <div id="titlebar-item-2">
        <h5 id="titlebar-heading">Admin Dashboard</h5>
      </div>
    </div>

    <div id="control-sec">

      <div id="top-button">
        <div class="button-container" onclick="linkClicked('admin_users.php')">
          <div class="button-image-sec">
            <img src="img/user.png" alt="" class="button-image">
          </div>
          <div class="button-text-sec">
            <div class="button-text">
              Users
            </div>
          </div>
        </div>
      </div>

      <div id="bottom-buttons-sec">
        <div id="top-half">
          
          <div class="bottom-button" onclick="linkClicked('admin_movies.php')">
            <div class="button-container">
              <div class="button-image-sec">
                <img src="img/admin/movies.png" alt="" class="button-image">
              </div>
              <div class="button-text-sec">
                <div class="button-text">
                  Movies
                </div>
              </div>
            </div>
          </div>
          <div class="bottom-button" onclick="linkClicked('admin_tv.php')">
            <div class="button-container">
              <div class="button-image-sec">
                <img src="img/admin/tv_shows.png" alt="" class="button-image">
              </div>
              <div class="button-text-sec">
                <div class="button-text">
                  TV Shows
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="bottom-half">
          
          <div class="bottom-button" onclick="linkClicked('admin_documentaries.php')">
            <div class="button-container">
              <div class="button-image-sec">
                <img src="img/admin/documentaries.png" alt="" class="button-image">
              </div>
              <div class="button-text-sec">
                <div class="button-text">
                  Documentaries
                </div>
              </div>
            </div>
          </div>
          <div class="bottom-button" onclick="linkClicked('admin_genre.php')">
            <div class="button-container">
              <div class="button-image-sec">
                <img src="img/admin/genres.png" alt="" class="button-image">
              </div>
              <div class="button-text-sec">
                <div class="button-text">
                  Genres
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="php-background/logout_action.php" id="logout-btn">Logout</a>
    <script src="javascript/admin_edit_script.js"></script>
  </body>
</html>
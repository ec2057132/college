<?php include("includes/base.php");
//Checks id login variable has a variable.
session_start();
if (!isset( $_SESSION["a_id"] ) ) {
  Header("Location: index.php");
}
?>
<title>TV Shows | Netbook Admin</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_admin_users.css">
    <link rel="stylesheet" href="styles/style_table.css">
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

    <div id="back-btn-sec">
      <div id="back-btn" onclick="linkClicked('admin_dashboard.php')">
        Back
      </div>
    </div>
    
    <div id="user-display-sec">
      <div class="box">

        <div id="main-sec">
          <div id="headings-sec">
            <div id="headings-left">
              <div id="heading-item-id">
                ID
              </div>
              <div id="heading-item-name">
                TV Show Title
              </div>
            </div>
            <div id="heading-right">
              <div id="heading-item-action">
                Action
              </div>
            </div>
          </div>
          
          <?php
            require ("includes/connect_db.php");

            $sql = "SELECT `tv_id`, `tv_title`
                    FROM `tv`;";

            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) >= 1) {
              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo '
                <div class="tabel-sec">
                  <div class="tabel-left">
                    <div class="tabel-item-id">
                      '.$row["tv_id"].'
                    </div>
                    <div class="tabel-item-name">
                    '.$row["tv_title"].'
                    </div>
                  </div>
                  <div class="tabel-right">
                    <div class="tabel-item-action-sec">
                      <div class="edit-btn-container" onclick='.'editView('.$row["tv_id"].',\'t\')'.'>
                        <div class="action-btn-text-sec">
                          <div class="action-btn-text">
                            Edit
                          </div>
                        </div>
                      </div>
                      <div class="delete-btn-container" onclick="deleteTVShow(\''.$row['tv_id'].'\')">
                        <div class="action-btn-text-sec">
                          <div class="action-btn-text">
                            Delete
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                ';
              }
            }
            else {
              Header("Location: admin_dashboard.php");
            }
          ?>

        </div>
      </div>
    </div>

    <a href="php-background/logout_action.php" id="logout-btn">Logout</a>
    <script src="javascript/admin_edit_script.js"></script>
  </body>
</html>
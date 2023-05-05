<?php include("includes/base.php");
//Checks id login variable has a variable.
session_start();
if (!isset($_SESSION["u_id"]) ) {
  Header("Location: index.php");
}
?>
    <title>Movie Details | Netbook</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_navbar.css">
    <link rel="stylesheet" href="styles/style_movie_details.css">
  </head>
  <body>
    <!--Navigation Bar-->
    <?php include("includes/navbar.php");?>
    
    <!--Main Content-->
    <?php
      if (!isset($_GET['id'])) {
        Header("Location: movie_browse.php");
      }
      else {
        $id = $_GET['id'];
        require ("includes/connect_db.php");
        
        $sql = "SELECT `m_title`, `m_description`, `m_year`, `g_id_1`, `g_id_2`, `g_id_3`, `m_duration`, `m_trailer`, `m_director`, `m_actors`, `m_age`
          FROM `movie`
          WHERE `m_id` = '$id';";

        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
        else {
          Header("Location: movie_browse.php");
        }
        if ($_SESSION["sub_status"] ==  1) {
          echo '
            <div id="main-sec" class="content">
              <div id="box">

                <div id="top-half">

                  <div id="top-half-item-left">
                    <div id="movie-sec">
                      <div id="movie-container">
                        <div id="movie-frame">
                          <img src="img/play-button.png" alt="Play icon" id="play-icon">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="top-half-item-right">
                    <div id="title-sec">
                      <p id="title">'.$row["m_title"].'</p>
                    </div>
                      
                    <div class="user-item">
                      <div id="rating-text">
                        Rating: 89%
                      </div>
                    </div>

                    <div class="user-item">
                      <div id="extra-features-btns-sec">
                        <div class="extra-feature-btn-item">
                          <div class="icon-box" onclick='.'changeIcon("favourite-icon")'.'>
                            <img src="img/star-empty.png" alt="Star icon" class="btn-icon" id="favourite-icon">
                          </div>
                        </div>
                        <div class="extra-feature-btn-item">
                        <div class="icon-box" onclick='.'changeIcon("like-icon")'.'>
                          <img src="img/like-empty.png" alt="Thumbs-up icon" class="btn-icon" id="like-icon">
                        </div>
                        </div>
                        <div class="extra-feature-btn-item">
                        <div class="icon-box" onclick='.'changeIcon("dislike-icon")'.'>
                          <img src="img/dislike-empty.png" alt="Thumbs-down icon" class="btn-icon" id="dislike-icon">
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="horizontal-line-sec">
                  <div class="horizontal-line"></div>
                </div>

                <div id="bottom-half">
                  <div class="bottom-half-item">
                    <div id="info-sec">
                      <div id="info-item">
                        <div id="description">
                        '.$row["m_description"].'
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="horizontal-line-sec">
                  <div class="horizontal-line"></div>
                </div>

                <div id="extra-info-sec">
                  <div id="extra-info-container">
                    
                      <div id="genre-extra">
                        <div id="genre-sec">
                        ';
                        $g_1 = $row["g_id_1"];

                        $sqlt = "SELECT `g_name`, `g_description`
                        FROM `genre`
                        WHERE `g_id` = '$g_1';";

                        if ($row["g_id_2"] != null) {
                          $g_2 = $row["g_id_2"];
                          $sqlt = "SELECT `g_name`, `g_description`
                          FROM `genre`
                          WHERE `g_id` = '$g_1' OR `g_id` = '$g_2'
                          ORDER BY `g_name`;";

                          if ($row["g_id_3"] != null) {
                            $g_3 = $row["g_id_3"];
                            $sqlt = "SELECT `g_name`, `g_description`
                            FROM `genre`
                            WHERE `g_id` = '$g_1' OR `g_id` = '$g_2' OR `g_id` = '$g_3'
                            ORDER BY `g_name`;";
                          }
                        }

                        $resultt = mysqli_query($conn, $sqlt);
                        
                        if (mysqli_num_rows($resultt) >= 1) {

                          while ($rowt = mysqli_fetch_array($resultt, MYSQLI_ASSOC)) {
                            echo '
                            <div class="genre-item">
                              <span class="bolden">'.$rowt["g_name"].'</span>
                            </div>';
                          }
                        }
                        
                        echo '
                        </div>
                        
                        <div id="people-sec">
                          <div class="other-info-item">
                              <span class="bolden">Director:</span> '.$row["m_director"].'
                            </div>
                            <div class="other-info-item">
                              <span class="bolden">Actors:</span> '.$row["m_actors"].'
                            </div>
                          </div>
                          <div id="details-sec">
                            <div class="detail-item">
                              <span class="bolden">Released:</span> '.$row["m_year"].'
                            </div>
                            <div class="detail-item">
                              <span class="bolden">Age:</span> '.$row["m_age"].'
                            </div>
                            <div class="detail-item">
                              <span class="bolden">Length:</span> <span id="movie-length">'.$row["m_duration"].'</span>
                            </div>
                          </div>
                        </div>

                    <div class="extra-info-item">
                      <div id="trailer-sec">
                        <div id="trailer-container">
                          <iframe id="trailer-frame" width="1024" height="720" src="https://www.youtube.com/embed/'.$row["m_trailer"].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; fullscreen; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
                        </div>
                      </div>
                      </div>
                    </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
        ';
        }
        else {
          echo '
          <div id="main-sec" class="content">
            <div id="box">

              <div id="top-half">

                <div id="top-half-item-left">
                  <div id="trailer-sec">
                    <div id="trailer-container">
                      <iframe id="trailer-frame" width="1024" height="720" src="https://www.youtube.com/embed/qEVUtrk8_B4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; fullscreen; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
                    </div>
                  </div>
                </div>

                <div id="top-half-item-right">
                  <div id="title-sec">
                    <p id="title">'.$row["m_title"].'</p>
                  </div>
                    
                  <div class="user-item">
                    <div id="rating-text">
                      Rating: 89%
                    </div>
                  </div>

                  <div class="user-item">
                    <div id="extra-features-btns-sec-free">
                      <span class="bolden">Save to Favourites:</span>
                      <div class="extra-feature-btn-item-free">
                        <div class="icon-box" onclick='.'changeIcon("favourite-icon")'.'>
                          <img src="img/star-empty.png" alt="Star icon" class="btn-icon" id="favourite-icon">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="horizontal-line-sec">
                <div class="horizontal-line"></div>
              </div>

              <div id="bottom-half">
                <div class="bottom-half-item">
                  <div id="info-sec">
                    <div id="info-item">
                      <div id="description">
                      '.$row["m_description"].'
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="horizontal-line-sec">
                <div class="horizontal-line"></div>
              </div>

              <div id="extra-info-sec">
                <div id="extra-info-container-free">
                  
                    <div id="genre-extra-free">
                      <div id="genre-sec">
                      ';
                      $g_1 = $row["g_id_1"];

                      $sqlt = "SELECT `g_name`, `g_description`
                      FROM `genre`
                      WHERE `g_id` = '$g_1';";

                      if ($row["g_id_2"] != null) {
                        $g_2 = $row["g_id_2"];
                        $sqlt = "SELECT `g_name`, `g_description`
                        FROM `genre`
                        WHERE `g_id` = '$g_1' OR `g_id` = '$g_2';";

                        if ($row["g_id_3"] != null) {
                          $g_3 = $row["g_id_3"];
                          $sqlt = "SELECT `g_name`, `g_description`
                          FROM `genre`
                          WHERE `g_id` = '$g_1' OR `g_id` = '$g_2' OR `g_id` = '$g_3';";
                        }
                      }

                      $resultt = mysqli_query($conn, $sqlt);
                      
                      if (mysqli_num_rows($resultt) >= 1) {

                        while ($rowt = mysqli_fetch_array($resultt, MYSQLI_ASSOC)) {
                          echo '
                          <div class="genre-item">
                            <span class="bolden">'.$rowt["g_name"].'</span>
                          </div>';
                        }
                      }
                      
                      echo '
                      </div>
                      
                      <div id="people-sec">
                        <div class="other-info-item">
                            <span class="bolden">Director:</span> '.$row["m_director"].'
                          </div>
                          <div class="other-info-item">
                            <span class="bolden">Actors:</span> '.$row["m_actors"].'
                          </div>
                        </div>
                        <div id="details-sec">
                          <div class="detail-item">
                            <span class="bolden">Released:</span> '.$row["m_year"].'
                          </div>
                          <div class="detail-item">
                            <span class="bolden">Age:</span> '.$row["m_age"].'
                          </div>
                          <div class="detail-item">
                            <span class="bolden">Length:</span> <span id="movie-length">'.$row["m_duration"].'</span>
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          ';
        }
        
        echo '
        <!-- Flashbar -->
        <div id="flashbar"></div>

        <script src="javascript/navbar_script.js"></script>
        <script src="javascript/movie_detail_script.js"></script>
    ';
    }
    ?>
  </body>
</html>
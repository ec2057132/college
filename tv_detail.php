<?php include("includes/base.php");
//Checks id login variable has a variable.
session_start();
if (!isset( $_SESSION["u_id"] ) ) {
  Header("Location: index.php");
}
?>
    <title>TV Show Details | Netbook</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_navbar.css">
    <link rel="stylesheet" href="styles/style_tv_detail.css">
  </head>
  <body>
    <!--Navigation Bar-->
    <?php include("includes/navbar.php");?>
    <!-- Subscribed Content -->
    <!--Main Content-->
    <?php
      if (!isset($_GET['t'])) {
        Header("Location: tv_browse.php");
      }
      else {
        $id = $_GET['t'];
        require ("includes/connect_db.php");

        $sql = "SELECT `tv_title`, `tv_description`, `tv_year`, `g_id_1`, `g_id_2`, `g_id_3`, `tv_thumbnail`, `tv_trailer`, `tv_creator`, `tv_actors`, `tv_age`
                FROM `tv`
                WHERE `tv_id` = '$id';";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

          $sql = "SELECT `s_id`, `e_number`, `e_title`, `e_description`, `e_duration`
          FROM `episode`
          WHERE `tv_id` = '$id';";

          $eIResult = mysqli_query($conn, $sql);
          if (mysqli_num_rows($eIResult) >= 1) {
            $eIRow = mysqli_fetch_array($eIResult, MYSQLI_ASSOC);
          }
          else {
            Header("Location: tv_browse.php");
          }
        }
        else {
          Header("Location: tv_browse.php");
        }

        if ($_SESSION["sub_status"] ==  1) {
        echo'
          <div id="main-sec" class="content">
            <div id="box">

              <div id="top-half">

                <div id="top-half-item-left">
                  <div id="show-sec">
                    <div id="show-container">
                      <div id="show-frame">
                        <img src="img/play-button.png" alt="Play icon" id="play-icon">
                        <div id="show-info">
                          <div id="ep-title">
                            S';
                            if (isset($_GET['s']) && isset($_GET['e'])) {
                              echo $_GET['s'].':E'.$_GET['e'].' - ';
                              $season = $_GET['s'];
                              $episode = $_GET['e'];

                              $sql = "SELECT `e_title`
                              FROM `episode`
                              WHERE `tv_id` = '$id' AND `s_id` = '$season' AND `e_number` = '$episode';";

                              $eTResult = mysqli_query($conn, $sql);
                              if (mysqli_num_rows($eTResult) == 1) {
                                $eTRow = mysqli_fetch_array($eTResult, MYSQLI_ASSOC);
                                echo $eTRow["e_title"];
                              }
                              else {
                                $sql = "SELECT `e_title`
                                FROM `episode`
                                WHERE `tv_id` = '$id' AND `s_id` = 1 AND `e_number` = 1;";

                                $eTResult = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($eTResult) == 1) {
                                  $eTRow = mysqli_fetch_array($eTResult, MYSQLI_ASSOC);
                                  echo $eTRow["e_title"];
                                }
                              }
                            }
                            else {
                              $sql = "SELECT `e_title`
                              FROM `episode`
                              WHERE `tv_id` = '$id' AND `s_id` = 1 AND `e_number` = 1;";

                              $eTResult = mysqli_query($conn, $sql);
                              if (mysqli_num_rows($eTResult) == 1) {
                                $eTRow = mysqli_fetch_array($eTResult, MYSQLI_ASSOC);
                                echo '1:E1 - '.$eTRow["e_title"];
                              }
                            }
                            
                          echo '
                          </div>
                          <div id="ep-description">
                            ';
                            if (isset($_GET['s']) && isset($_GET['e'])) {
                              $sql = "SELECT `e_description`
                              FROM `episode`
                              WHERE `tv_id` = '$id' AND `s_id` = '$season' AND `e_number` = '$episode';";

                              $eDResult = mysqli_query($conn, $sql);
                              if (mysqli_num_rows($eDResult) == 1) {
                                $eDRow = mysqli_fetch_array($eDResult, MYSQLI_ASSOC);
                                echo $eDRow["e_description"];
                              }
                              else {
                                $sql = "SELECT `e_description`
                                FROM `episode`
                                WHERE `tv_id` = '$id' AND `s_id` = 1 AND `e_number` = 1;";

                                $eDResult = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($eDResult) == 1) {
                                  $eDRow = mysqli_fetch_array($eDResult, MYSQLI_ASSOC);
                                  echo $eDRow["e_description"];
                                }
                              }
                            }
                            else {
                              $sql = "SELECT `e_description`
                                FROM `episode`
                                WHERE `tv_id` = '$id' AND `s_id` = 1 AND `e_number` = 1;";

                                $eTResult = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($eTResult) == 1) {
                                  $eTRow = mysqli_fetch_array($eTResult, MYSQLI_ASSOC);
                                  echo $eTRow["e_description"];
                                }
                            }
                            echo '
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="top-half-item-right">
                  <div id="title-sec">
                    <p id="title">'.$row["tv_title"].'</p>
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

              <div class="media-content-selector-sec">
                <div class="media-content-selector-container">
                  <select name="season" size="1" class="input-drop" id="season-select" onchange='.'changeSeason('.$id.')'.'>
                  ';
                  $sql = "SELECT `s_id`
                  FROM `episode`
                  WHERE `tv_id` = '$id'
                  ORDER BY `s_id` DESC
                  LIMIT 1;";

                  $sNResult = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($sNResult) == 1) {
                    $sNRow = mysqli_fetch_array($sNResult, MYSQLI_ASSOC);
                    $sNum = $sNRow["s_id"];
                    $sCount = 1;
                    
                    while ($sCount <= $sNum) {
                      echo '<option ';
                      if (isset($_GET['s']) != null && $sCount == $_GET['s']) {
                        echo 'selected ';
                      }
                      echo 'value="'.$sCount.'">Season '.$sCount.'</option>';
                      $sCount++;
                    }
                  }

                  echo '
                  </select>
                </div>
              </div>

              <div class="media-scroller snaps-inline" id="e-sec">
              ';
              if (isset($_GET['s'])) {
                $sql = "SELECT `s_id`, `e_number`, `e_title`, `e_description`, `e_duration`
                FROM `episode`
                WHERE `tv_id` = '$id' AND `s_id` = '$season';";
              }
              else {
                $sql = "SELECT `s_id`, `e_number`, `e_title`, `e_description`, `e_duration`
                FROM `episode`
                WHERE `tv_id` = '$id' AND `s_id` = 1;";
              }

              $eIResult = mysqli_query($conn, $sql);
              if (mysqli_num_rows($eIResult) >= 1) {
                while ($eIRow = mysqli_fetch_array($eIResult, MYSQLI_ASSOC)) {
                  echo '
                  <div class="scroll-item" onclick='.'linkClicked("tv_detail.php?t='.$id.'&s='.$eIRow["s_id"].'&e='.$eIRow["e_number"].'")'.'>
                    <div class="episode-info">
                      <img src="img/tv_shows/'.$row["tv_thumbnail"].'.png">
                      <p>'.$eIRow["e_title"].'</p>
                    </div>
                    <div class="episode-num-len">
                      <p>Episode '.$eIRow["e_number"].'</p>
                      <p>'.$eIRow["e_duration"].'m</p>
                    </div>
                  </div>';
                }
              }
              else {
                Header("Location: tv_browse.php");
              }
                
              echo '
              </div>
              <div class="horizontal-line-sec">
                <div class="horizontal-line"></div>
              </div>

              <div id="bottom-half">
                <div class="bottom-half-item">
                  <div id="info-sec">
                    <div id="info-item">
                      <div id="description">
                        '.$row["tv_description"].'
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
                      if ($row["g_id_1"] != null && $row["g_id_2"] != null && $row["g_id_3"] != null) {
                        $g_1 = $row["g_id_1"];
                        $g_2 = $row["g_id_2"];
                        $g_3 = $row["g_id_3"];

                        $sqlt = "SELECT `g_name`, `g_description`
                        FROM `genre`
                        WHERE `g_id` = '$g_1' OR `g_id` = '$g_2' OR `g_id` = '$g_3'
                        ORDER BY `g_name`;";
                      }
                      else if ($row["g_id_1"] != null && $row["g_id_2"] != null) {
                        $g_1 = $row["g_id_1"];
                        $g_2 = $row["g_id_2"];
                        $sqlt = "SELECT `g_name`, `g_description`
                        FROM `genre`
                        WHERE `g_id` = '$g_1' OR `g_id` = '$g_2'
                        ORDER BY `g_name`;";
                      }
                      else {
                        $g_1 = $row["g_id_1"];

                        $sqlt = "SELECT `g_name`, `g_description`
                        FROM `genre`
                        WHERE `g_id` = '$g_1';";
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
                            <span class="bolden">Creator:</span> '.$row["tv_creator"].'
                          </div>
                          <div class="other-info-item">
                            <span class="bolden">Actors:</span> '.$row["tv_actors"].'
                          </div>
                        </div>
                        <div id="details-sec">
                          <div class="detail-item">
                            <span class="bolden">Released:</span> '.$row["tv_year"].'
                          </div>
                          <div class="detail-item">
                            <span class="bolden">Age:</span> '.$row["tv_age"].'
                          </div>
                        </div>
                      </div>

                  <div class="extra-info-item">
                    <div id="trailer-sec">
                      <div id="trailer-container">
                        <iframe id="trailer-frame" width="1024" height="720" src="https://www.youtube.com/embed/'.$row["tv_trailer"].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; fullscreen; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
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
                        <iframe id="trailer-frame" width="1024" height="720" src="https://www.youtube.com/embed/'.$row["tv_trailer"].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; fullscreen; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
                      </div>
                    </div>
                  </div>

                  <div id="top-half-item-right">
                    <div id="title-sec">
                      <p id="title">'.$row["tv_title"].'</p>
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
                          '.$row["tv_description"].'
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
                      if ($row["g_id_1"] != null && $row["g_id_2"] != null && $row["g_id_3"] != null) {
                        $g_1 = $row["g_id_1"];
                        $g_2 = $row["g_id_2"];
                        $g_3 = $row["g_id_3"];

                        $sqlt = "SELECT `g_name`, `g_description`
                        FROM `genre`
                        WHERE `g_id` = '$g_1' OR `g_id` = '$g_2' OR `g_id` = '$g_3'
                        ORDER BY `g_name`;";
                      }
                      else if ($row["g_id_1"] != null && $row["g_id_2"] != null) {
                        $g_1 = $row["g_id_1"];
                        $g_2 = $row["g_id_2"];
                        $sqlt = "SELECT `g_name`, `g_description`
                        FROM `genre`
                        WHERE `g_id` = '$g_1' OR `g_id` = '$g_2'
                        ORDER BY `g_name`;";
                      }
                      else {
                        $g_1 = $row["g_id_1"];

                        $sqlt = "SELECT `g_name`, `g_description`
                        FROM `genre`
                        WHERE `g_id` = '$g_1';";
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
                              <span class="bolden">Director:</span> '.$row["tv_creator"].'
                            </div>
                            <div class="other-info-item">
                              <span class="bolden">Actors:</span> '.$row["tv_actors"].'
                            </div>
                          </div>
                          <div id="details-sec">
                            <div class="detail-item">
                              <span class="bolden">Released:</span> '.$row["tv_year"].'
                            </div>
                            <div class="detail-item">
                              <span class="bolden">Age:</span> '.$row["tv_age"].'
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
          <div id="flashbar"></div>

          <script src="javascript/navbar_script.js"></script>
          <script src="javascript/tv_detail_script.js"></script>
    ';
    }
    ?>
  </body>
</html>
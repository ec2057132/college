<?php include("includes/base.php");
//Checks id login variable has a variable.
session_start();
if (!isset( $_SESSION["a_id"] ) ) {
  Header("Location: index.php");
}
?>
<title>Edit | Netbook Admin</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_admin_edit.css">
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
    
    <div id="main-sec">
      <div id="box">
        <?php
        // --- MOVIE SECTION SECTION --- //
          if (isset($_GET["m"])) {
            $mID = $_GET["m"];

            require ("includes/connect_db.php");
            $sql = "SELECT *
                    FROM `movie`
                    WHERE `m_id` = '$mID';";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($row['m_id'] == null) Header("Location: admin_movies.php");
            echo '
              <div id="title-sec">
                <div id="title-container">
                  <div id="title-text">
                    Editing Movie \''.$row['m_title'].'\'
                  </div>
                </div>
              </div>
      
              <div class="horizontal-line-sec h-bottom">
                <div class="horizontal-line"></div>
              </div>
              
              <div class="details-sec">

                <div class="details-item">
                  <div class="details-title-sec">
                    <div class="details-title-container">
                      <div class="details-title">
                        Movie Details:
                      </div>
                    </div>
                    <div class="add-new-container" id="movie-btn" onclick="prepMovie()">
                      <div class="add-new-text">
                        + New Movie
                      </div>
                    </div>
                  </div>
                </div>

                <div class="details-item">
                  <div class="details-input-sec">
      
                    <div class="details-input-item">
                      <div id="title-genre-sec">
                        <div class="details-input-heading">
                          Movie Title
                        </div>
                        <input type="text" class="input" id="m-title" value="'.$row['m_title'].'">
                        <div class="details-input-heading">
                          Genres
                        </div>
                        <div id="movie-genre-sec">
                          <select name="genre-1" class="input-drop input-third" id="g-1">';
      
                            $genreSql = "SELECT `g_id`, `g_name`
                                    FROM `genre`
                                    ORDER BY `g_name` ASC;";
                            $genreResult = mysqli_query($conn, $genreSql);
                            while ($genreRow = mysqli_fetch_array($genreResult, MYSQLI_ASSOC)) {
                              if ($row['g_id_1'] == $genreRow['g_id']) {
                                echo '<option selected value="'.$genreRow['g_id'].'">'.$genreRow["g_name"].'</option>';
                              }
                              else {
                                echo '<option value="'.$genreRow["g_id"].'">'.$genreRow["g_name"].'</option>';
                              }
                            }
                            echo'
                          </select>
                          <select name="genre-2" class="input-drop input-third" id="g-2">
                            <option value="0">No Genre</option>';
      
                            $genreSql = "SELECT `g_id`, `g_name`
                                    FROM `genre`
                                    ORDER BY `g_name` ASC;";
                            $genreResult = mysqli_query($conn, $genreSql);
                            while ($genreRow = mysqli_fetch_array($genreResult, MYSQLI_ASSOC)) {
                              if ($row['g_id_2'] == $genreRow['g_id']) {
                                echo '<option selected value="'.$genreRow['g_id'].'">'.$genreRow["g_name"].'</option>';
                              }
                              else {
                                echo '<option value="'.$genreRow["g_id"].'">'.$genreRow["g_name"].'</option>';
                              }
                            }
                            echo '
                          </select>
                          <select name="genre-3" class="input-drop input-third" id="g-3">
                            <option value="0">No Genre</option>';
      
                            $genreSql = "SELECT `g_id`, `g_name`
                                    FROM `genre`
                                    ORDER BY `g_name` ASC;";
                            $genreResult = mysqli_query($conn, $genreSql);
                            while ($genreRow = mysqli_fetch_array($genreResult, MYSQLI_ASSOC)) {
                              if ($row['g_id_3'] == $genreRow['g_id']) {
                                echo '
                                  <option selected value="'.$genreRow["g_id"].'">'.$genreRow["g_name"].'</option>
                                ';
                              }
                              else {
                                echo '
                                  <option value="'.$genreRow["g_id"].'">'.$genreRow["g_name"].'</option>
                                ';
                              }
                            }
                            echo '
                          </select>
                        </div>
                      </div>
                    </div>
      
                    <div class="details-input-item">
                      <div class="details-input-heading">
                        Movie Description
                      </div>
                      <textarea rows="4" class="input-area" id="m-description">'.$row['m_description'].'</textarea>
                    </div>

                    <div class="details-input-item">
                      <div id="movie-thumbnail-trailer-sec">
                        <div class="movie-thumbnail-trailer-item">
                          <div class="details-input-heading input-half">
                            Thumbnail File Name
                          </div>
                          <div class="details-input-heading input-half">
                            Trailer Link ID
                          </div>
                        </div>
                        <div class="movie-thumbnail-trailer-item">
                          <input type="text" class="input input-half" id="m-thumbnail" value="'.$row['m_thumbnail'].'">
                          <input type="text" class="input input-half" id="m-trailer" value="'.$row['m_trailer'].'">
                        </div>
                      </div>
                    </div>
      
                    <div class="details-input-item">
                      <div class="details-input-heading">
                        Director
                      </div>
                      <input type="text" class="input input-full" id="m-director" value="'.$row['m_director'].'">
                    </div>
      
                    <div class="details-input-item">
                      <div class="details-input-heading input-full">
                        Actors
                      </div>
                      <input type="text" class="input" id="m-actors" value="'.$row['m_actors'].'">
                    </div>
                      
                    <div class="details-input-item">
                      <div id="movie-duration-year-age-sec">
                        <div class="movie-duration-year-age-item">
                          <div class="details-input-heading input-third">
                            Duration (minutes)
                          </div>
                          <div class="details-input-heading input-third">
                            Release Year
                          </div>
                          <div class="details-input-heading input-third">
                            Age Rating
                          </div>
                        </div>
                        <div class="movie-duration-year-age-item">
                          <input type="text" class="input input-third" id="m-duration"value="'.$row['m_duration'].'">
                          <input type="text" class="input input-third" id="m-year"value="'.$row['m_year'].'">
                          <select name="age-rating" class="input-drop input-third" id="m-age">
                          ';
                          switch ($row['m_age']) {
                            case 21:
                              echo '
                              <option selected value="21">U</option>
                              <option value="23">PG</option>
                              <option value="12">12</option>
                              <option value="15">15</option>
                              <option value="18">18</option>';
                              break;
                            case 23:
                              echo '
                              <option value="21">U</option>
                              <option selected value="23">PG</option>
                              <option value="12">12</option>
                              <option value="15">15</option>
                              <option value="18">18</option>';
                              break;
                            case 12:
                              echo '
                              <option value="21">U</option>
                              <option value="23">PG</option>
                              <option selected value="12">12</option>
                              <option value="15">15</option>
                              <option value="18">18</option>';
                              break;
                            case 15:
                              echo '
                              <option value="21">U</option>
                              <option value="23">PG</option>
                              <option value="12">12</option>
                              <option selected value="15">15</option>
                              <option value="18">18</option>';
                              break;
                            case 18:
                              echo '
                              <option value="21">U</option>
                              <option value="23">PG</option>
                              <option value="12">12</option>
                              <option value="15">15</option>
                              <option selected value="18">18</option>';
                              break;
                          }
                          echo'
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="horizontal-line-sec h-bottom">
                <div class="horizontal-line"></div>
              </div>

              <div class="panel-btn-sec">
                <div class="panel-btn-item">
                  <div id="save-btn" onclick="updateMovie(\''.$row["m_id"].'\')">
                    Save
                  </div>
                </div>
                <div class="panel-btn-item">
                  <div id="cancel-btn" onclick="linkClicked(\'admin_movies.php\');">
                    Cancel
                  </div>
                </div>
              </div>
            ';
          }
          // --- TV SHOW SECTION --- //
          else if (isset($_GET["t"])) {
            $tID = $_GET["t"];

            require ("includes/connect_db.php");
            $sql = "SELECT *
                    FROM `tv`
                    WHERE `tv_id` = '$tID';";
            $result = mysqli_query($conn, $sql);
            $tvRow = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($tvRow['tv_id'] == null) Header("Location: admin_tv.php");
            echo '
              <div id="title-sec">
                <div id="title-container">
                  <div id="title-text">
                    Editing TV Show \''.$tvRow["tv_title"].'\'
                  </div>
                </div>
              </div>
      
              <div class="horizontal-line-sec h-bottom">
                <div class="horizontal-line"></div>
              </div>
              
              <div class="details-sec">
                <div class="details-item">
                  <div class="details-title-sec">
                    <div class="details-title-container">
                      <div class="details-title">
                        TV Show Details:
                      </div>
                    </div>
                    <div class="add-new-container" id="tv-btn" onclick="prepTVShow()">
                      <div class="add-new-text">
                        + New TV Show
                      </div>
                    </div>
                  </div>
                </div>
                <div class="details-item">
                  <div class="details-input-sec">

                    <input hidden value="'.$tvRow["tv_age"].':'.$tvRow["g_id_1"].':'.$tvRow["g_id_2"].':'.$tvRow["g_id_3"].'" id="tv-data">
      
                    <div class="details-input-item">
                      <div id="title-genre-sec">
                        <div class="details-input-heading">
                          Show Title
                        </div>
                        <input type="text" class="input" id="t-title" value="'.$tvRow["tv_title"].'">
                        <div class="details-input-heading">
                          Genres
                        </div>
                        <div id="movie-genre-sec">
                          <select name="genre" class="input-drop input-third" id="g-1">';
                            require ("includes/connect_db.php");
                            $sql = "SELECT `tv_title`, `tv_description`, `tv_year`, `g_id_1`, `g_id_2`, `g_id_3`, `tv_thumbnail`, `tv_trailer`, `tv_creator`, `tv_actors`, `tv_age`
                                    FROM `tv`
                                    WHERE `tv_id` = '$id';";
      
                            $result = mysqli_query($conn, $sql);
      
                            $sql = "SELECT `g_id`, `g_name`
                                    FROM `genre`
                                    ORDER BY `g_name` ASC;";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                              echo '
                                <option value="'.$row["g_id"].'">'.$row["g_name"].'</option>
                              ';
                            }
                          echo '
                          </select>
                          <select name="genre" class="input-drop input-third" id="g-2">
                            <option value="0">No Genre</option>';

                            require ("includes/connect_db.php");
      
                            $sql = "SELECT `g_id`, `g_name`
                                    FROM `genre`
                                    ORDER BY `g_name` ASC;";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                              echo '
                                <option value="'.$row["g_id"].'">'.$row["g_name"].'</option>
                              ';
                            }
                          echo '
                          </select>
                          <select name="genre" class="input-drop input-third" id="g-3">
                            <option value="0">No Genre</option>';
                            require ("includes/connect_db.php");
      
                            $sql = "SELECT `g_id`, `g_name`
                                    FROM `genre`
                                    ORDER BY `g_name` ASC;";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                              echo '
                                <option value="'.$row["g_id"].'">'.$row["g_name"].'</option>
                              ';
                            }
                          echo '
                          </select>
                        </div>
                      </div>
                      </div>
      
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Show Description
                        </div>
                        <textarea rows="4" class="input-area" id="t-description">'.$tvRow["tv_description"].'</textarea>
                      </div>
                      <div class="details-input-item">
                        <div id="movie-thumbnail-trailer-sec">
                          <div class="movie-thumbnail-trailer-item">
                            <div class="details-input-heading input-half">
                              Thumbnail File Name
                            </div>
                            <div class="details-input-heading input-half">
                              Trailer Link ID
                            </div>
                          </div>
                          <div class="movie-thumbnail-trailer-item">
                            <input type="text" class="input input-half" id="t-thumbnail" value="'.$tvRow["tv_thumbnail"].'">
                            <input type="text" class="input input-half" id="t-trailer" value="'.$tvRow["tv_trailer"].'">
                          </div>
                        </div>
                      </div>
      
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Creator
                        </div>
                        <input type="text" class="input input-full" id="t-creator" value="'.$tvRow["tv_creator"].'">
                      </div>
      
                      <div class="details-input-item">
                        <div class="details-input-heading input-full">
                          Actors
                        </div>
                        <input type="text" class="input" id="t-actors" value="'.$tvRow["tv_actors"].'">
                      </div>
                      
                      <div class="details-input-item">
                        <div id="movie-duration-year-age-sec">
                          <div class="movie-duration-year-age-item">
                            <div class="details-input-heading input-half">
                              Release Year
                            </div>
                            <div class="details-input-heading input-half">
                              Age Rating
                            </div>
                          </div>
                          <div class="movie-duration-year-age-item">
                            <input type="text" class="input input-half" id="t-year" value="'.$tvRow["tv_year"].'">
                            <select name="age-rating" class="input-drop input-half" id="age-rating">
                              <option value="21">U</option>
                              <option value="23">PG</option>
                              <option value="12">12</option>
                              <option value="15">15</option>
                              <option value="18">18</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <div class="horizontal-line-sec h-both">
                  <div class="horizontal-line"></div>
                </div>
      
              <div class="panel-btn-sec">
                <div class="panel-btn-item">
                  <div id="save-btn" onclick="updateTVShow(\''.$tvRow['tv_id'].'\')">
                    Save Show Details
                  </div>
                </div>
                <div class="panel-btn-item">
                  <div id="cancel-btn" onclick="linkClicked(\'admin_tv.php\');">
                    Back
                  </div>
                </div>
              </div>
      
              <div class="horizontal-line-sec h-both" id="episode-line-1">
                <div class="horizontal-line"></div>
              </div>
      
              <div class="details-sec">
                <div class="details-item">
                  <div class="details-title-sec">
                    <div class="details-title-container">
                      <div class="details-title">
                        TV Show Episode Details:
                      </div>
                    </div>
                  </div>
                </div>
                <div class="details-item">
                  <div class="details-input-sec">
                    <div class="details-input-item input-full">';
                      //Finds the correct TV SHow in the Database and prints 
                      //it to the admin TV Show template page
                        $tId = $_GET['t'];// Gets ID for the bellow SQL statement
                        $sql = "SELECT `tv_title`, `tv_description`, `tv_year`, `g_id_1`, `g_id_2`, `g_id_3`, `tv_thumbnail`, `tv_trailer`, `tv_creator`, `tv_actors`, `tv_age`
                        FROM `tv`
                        WHERE `tv_id` = '$tId';";
                      //Stores the retrievced row from the database
                        $result = mysqli_query($conn, $sql);
                      //Gets thee content and allows access using the associative method.
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                      //Finds the correct episodes in for the TV Show in the Database and prints 
                      //it to the admin TV Show template page
                        $sql = "SELECT `s_id`, `e_number`, `e_title`, `e_duration`
                        FROM `episode`
                        WHERE `tv_id` = '$tId';";
              
                        $eIResult = mysqli_query($conn, $sql);
                        $eIRow = mysqli_fetch_array($eIResult, MYSQLI_ASSOC);
                        echo '
                        <div class="media-content-selector-sec">
                          <div class="media-content-selector-container">
                            <select name="season" size="1" class="input-drop-season" id="season-select" onchange='.'changeSeason('.$tId.')'.'>
                            ';
                            $sql = "SELECT `s_id`
                            FROM `episode`
                            WHERE `tv_id` = '$tId'
                            ORDER BY `s_id` DESC
                            LIMIT 1;";
      
                            $sNResult = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($sNResult) == 1) {
                              $sNRow = mysqli_fetch_array($sNResult, MYSQLI_ASSOC);
                              $sNum = $sNRow["s_id"];
                              $sCount = 1;
                              
                              while ($sCount <= $sNum) {
                                echo '<option value="'.$sCount.'">Season '.$sCount.'</option>';
                                $sCount++;
                              }
                            }
                            echo '
                            </select>
                          </div>
                        </div>
      
                        <div class="media-scroller snaps-inline" id="e-sec">
                        ';
                          $sql = "SELECT `s_id`, `e_number`, `e_title`, `e_duration`
                          FROM `episode`
                          WHERE `tv_id` = '$tId' AND `s_id` = 1;";
      
                          $eIResult = mysqli_query($conn, $sql);
                          if (mysqli_num_rows($eIResult) >= 1) {
                            while ($eIRow = mysqli_fetch_array($eIResult, MYSQLI_ASSOC)) {
                              echo '
                              <div class="scroll-item" onclick='.'loadEpisodeDetail('.$tId.','.$eIRow["s_id"].','.$eIRow["e_number"].')'.'>
                                <div class="episode-info">
                                  <img src="img/tv_shows/'.$row["tv_thumbnail"].'.png">
                                  <p id="scroll-ep-'.$eIRow["e_number"].'">'.$eIRow["e_title"].'</p>
                                </div>
                                <div class="episode-num-len">
                                  <p>Episode '.$eIRow["e_number"].'</p>
                                  <p id="scroll-ep-time-'.$eIRow["e_number"].'">'.$eIRow["e_duration"].'m</p>
                                </div>
                              </div>';
                            }
                            echo'
                            <div class="scroll-item" id="add-new-ep" onclick="prepEpisode()">
                              <div class="episode-info">
                                <div id="ep-img-sec">
                                  <img src="img/admin/plus.png" id="ep-img">
                                </div>
                              </div>
                              <div id="ep-add-new">
                                Add New Episode
                              </div>
                            </div>';
                          }
                        echo '
                      </div>
                    </div>
      
                    <div class="horizontal-line-sec h-both" id="episode-line-2">
                      <div class="horizontal-line"></div>
                    </div>';
                    $sql = "SELECT *
                            FROM `episode`
                            WHERE `tv_id` = '$tID';";
                    $result = mysqli_query($conn, $sql);
                    $episodeRow = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    echo '
                    <div id="episode-details-sec">
                      <div class="details-input-item">
                        <div id="episode-title-season-episode-sec">
                          <div class="details-input-heading">
                            Episode Title
                          </div>
                          <input type="text" class="input" id="e-title" value="'.$episodeRow["e_title"].'">
                          <div class="episode-title-season-episode-sec">
                            <div class="details-input-heading input-third">
                              Season Number
                            </div>
                            <div class="details-input-heading input-third">
                              Episode
                            </div>
                            <div class="details-input-heading input-third">
                              Duration (minutes)
                            </div>
                          </div>
                          <div id="episode-season-episode-sec">
                            <input type="text" class="input input-third" id="e-season" value="'.$episodeRow["s_id"].'">
                            <input type="text" class="input input-third" id="e-number" value="'.$episodeRow["e_number"].'">
                            <input type="text" class="input input-third" id="e-duration" value="'.$episodeRow["e_duration"].'">
                          </div>
                        </div>
                      </div>
                      
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Episode Description
                        </div>
                        <textarea rows="4" class="input-area" id="e-description">'.$episodeRow["e_description"].'</textarea>
                      </div>
                    </div>
      
                  </div>
                </div>
              </div>
              <div class="horizontal-line-sec h-both">
                  <div class="horizontal-line"></div>
                </div>
      
                <div class="panel-btn-sec">
                <div class="panel-btn-item">
                  <div id="save-btn-episode" onclick="updateEpisode(\''.$tId.'\')">
                    Save Episode Details
                  </div>
                </div>
                <div class="panel-btn-item">
                  <div id="cancel-btn-episode" onclick="linkClicked(\'admin_tv.php\');">
                    Back
                  </div>
                </div>
              </div>
              
              <div id="snackbar-show">TV Show Updated</div>
              <div id="snackbar-episode">Episode Updated</div>
            ';
          }
          // --- GENRE SECTION --- //
          else if (isset($_GET["g"])) {
            $gID = $_GET["g"];

            require ("includes/connect_db.php");
            $sql = "SELECT *
                    FROM `genre`
                    WHERE `g_id` = '$gID';";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($row['g_id'] == null) Header("Location: admin_genre.php");
            echo '
              <div id="title-sec">
                <div id="title-container">
                  <div id="title-text">
                    Editing Genre \''.$row['g_name'].'\'
                  </div>
                </div>
              </div>
              
              <div class="horizontal-line-sec h-bottom">
                <div class="horizontal-line"></div>
              </div>
      
              <div class="details-sec">
                <div class="details-item">
                  <div class="details-title-sec">
                    <div class="details-title-container">
                      <div class="details-title">
                        Genre Details:
                      </div>
                    </div>
                    <div class="add-new-container" id="genre-btn" onclick="prepGenre()">
                      <div class="add-new-text">
                        + New Genre
                      </div>
                    </div>
                  </div>
                </div>
                <div class="details-item">
                  <div class="details-input-sec">
      
                    <div class="details-input-item">
                      <div class="details-input-heading">
                        Genre Name
                      </div>
                      <input type="text" class="input" id="genre-input" value="'.$row['g_name'].'">
                    </div>
      
                    <div class="details-input-item">
                      <div class="details-input-heading">
                        Genre Description
                      </div>
                      <textarea rows="4" class="input-area" id="genre-description-input">'.$row['g_description'].'</textarea>
                    </div>
                    
                  </div>
                </div>
              </div>
      
              <div class="horizontal-line-sec h-both">
                  <div class="horizontal-line"></div>
                </div>
      
                <div class="panel-btn-sec">
                <div class="panel-btn-item">
                  <div id="save-btn-episode" onclick="updateGenre(\''.$row["g_id"].'\')">
                    Save Genre Details
                  </div>
                </div>
                <div class="panel-btn-item">
                  <div id="cancel-btn-episode" onclick='.'linkClicked("admin_genre.php")'.'>
                    Back
                  </div>
                </div>
              </div>
            ';
          }
          // --- USER SECTION --- //
          else if (isset($_GET["u"])) {
            $uID = $_GET["u"];

            require ("includes/connect_db.php");
            $sql = "SELECT *
                    FROM `user`
                    WHERE `u_id` = '$uID';";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($row['u_id'] == null) Header("Location: admin_users.php");
            echo '
              <div id="title-sec">
                <div id="title-container">
                  <div id="title-text">
                    Editting User \''.$row["f_name"].' '.$row["s_name"].'\'
                  </div>
                </div>
              </div>
      
              <div class="horizontal-line-sec h-bottom">
                <div class="horizontal-line"></div>
              </div>
              
              <div class="details-sec">
                <div class="details-item">
                  <div class="details-title-sec">
                    <div class="details-title-container">
                      <div class="details-title">
                        Personal Details:
                      </div>
                    </div>
                  </div>
                </div>

                <div class="details-item">
                  <div class="details-input-sec">

                    <input hidden value="'.$row["cntry"].':'.$row["dob_d"].':'.$row["dob_m"].':'.$row["dob_y"].':'.$row["sec_q_1"].':'.$row["sec_q_2"].':'.$row["sub_status"].':'.$row["act_status"].':'.$row["a_id"].'" id="u-data">
      
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          First Name
                        </div>
                        <input type="text" class="input" id="f-name" value="'.$row["f_name"].'">
                      </div>
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Second Name
                        </div>
                        <input type="text" class="input" id="s-name" value="'.$row["s_name"].'">
                      </div>
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Email
                        </div>
                        <input type="text" class="input" id="email" value="'.$row["email"].'">
                      </div>
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Phone Number
                        </div>
                        <input type="text" class="input" id="p-num" value="'.$row["p_num"].'">
                      </div>
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Country
                        </div>
                        <select name="country" required size="1" class="input-drop input-full" id="country">
                          <option value="Afghanistan">Afghanistan</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                          <option value="Andorra">Andorra</option>
                          <option value="Angola">Angola</option>
                          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Armenia">Armenia</option>
                          <option value="Australia">Australia</option>
                          <option value="Austria">Austria</option>
                          <option value="Azerbaijan">Azerbaijan</option>
                          <option value="The Bahamas">The Bahamas</option>
                          <option value="Bahrain">Bahrain</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Barbados">Barbados</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Belgium">Belgium</option>
                          <option value="Belize">Belize</option>
                          <option value="Benin">Benin</option>
                          <option value="Bhutan">Bhutan</option>
                          <option value="Bolivia">Bolivia</option>
                          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                          <option value="Botswana">Botswana</option>
                          <option value="Brazil">Brazil</option>
                          <option value="Brunei">Brunei</option>
                          <option value="Bulgaria">Bulgaria</option>
                          <option value="Burkina Faso">Burkina Faso</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Cabo Verde">Cabo Verde</option>
                          <option value="Cambodia">Cambodia</option>
                          <option value="Cameroon">Cameroon</option>
                          <option value="Canada">Canada</option>
                          <option value="Central African Republic">Central African Republic</option>
                          <option value="Chad">Chad</option>
                          <option value="Chile">Chile</option>
                          <option value="China">China</option>
                          <option value="Colombia">Colombia</option>
                          <option value="Comoros">Comoros</option>
                          <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                          <option value="Congo, Republic of the">Congo, Republic of the</option>
                          <option value="Costa Rica">Costa Rica</option>
                          <option value="Côte d’Ivoire">Côte d’Ivoire</option>
                          <option value="Croatia">Croatia</option>
                          <option value="Cuba">Cuba</option>
                          <option value="Cyprus">Cyprus</option>
                          <option value="Czech Republic">Czech Republic</option>
                          <option value="Denmark">Denmark</option>
                          <option value="Djibouti">Djibouti</option>
                          <option value="Dominica">Dominica</option>
                          <option value="Dominican Republic">Dominican Republic</option>
                          <option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
                          <option value="Ecuador">Ecuador</option>
                          <option value="Egypt">Egypt</option>
                          <option value="El Salvador">El Salvador</option>
                          <option value="Equatorial Guinea">Equatorial Guinea</option>
                          <option value="Eritrea">Eritrea</option>
                          <option value="Estonia">Estonia</option>
                          <option value="Eswatini">Eswatini</option>
                          <option value="Ethiopia">Ethiopia</option>
                          <option value="Fiji">Fiji</option>
                          <option value="Finland">Finland</option>
                          <option value="France">France</option>
                          <option value="Gabon">Gabon</option>
                          <option value="The Gambia">The Gambia</option>
                          <option value="Georgia">Georgia</option>
                          <option value="Germany">Germany</option>
                          <option value="Ghana">Ghana</option>
                          <option value="Greece">Greece</option>
                          <option value="Grenada">Grenada</option>
                          <option value="Guatemala">Guatemala</option>
                          <option value="Guinea">Guinea</option>
                          <option value="Guinea-Bissau">Guinea-Bissau</option>
                          <option value="Guyana">Guyana</option>
                          <option value="Haiti">Haiti</option>
                          <option value="Honduras">Honduras</option>
                          <option value="Hungary">Hungary</option>
                          <option value="Iceland">Iceland</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Iran">Iran</option>
                          <option value="Iraq">Iraq</option>
                          <option value="Ireland">Ireland</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Jamaica">Jamaica</option>
                          <option value="Japan">Japan</option>
                          <option value="Jordan">Jordan</option>
                          <option value="Kazakhstan">Kazakhstan</option>
                          <option value="Kenya">Kenya</option>
                          <option value="Kiribati">Kiribati</option>
                          <option value="Korea, North">Korea, North</option>
                          <option value="Korea, South">Korea, South</option>
                          <option value="Kosovo">Kosovo</option>
                          <option value="Kuwait">Kuwait</option>
                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                          <option value="Laos">Laos</option>
                          <option value="Latvia">Latvia</option>
                          <option value="Lebanon">Lebanon</option>
                          <option value="Lesotho">Lesotho</option>
                          <option value="Liberia">Liberia</option>
                          <option value="Libya">Libya</option>
                          <option value="Liechtenstein">Liechtenstein</option>
                          <option value="Lithuania">Lithuania</option>
                          <option value="Luxembourg">Luxembourg</option>
                          <option value="Madagascar">Madagascar</option>
                          <option value="Malawi">Malawi</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="Maldives">Maldives</option>
                          <option value="Mali">Mali</option>
                          <option value="Malta">Malta</option>
                          <option value="Marshall Islands">Marshall Islands</option>
                          <option value="Mauritania">Mauritania</option>
                          <option value="Mauritius">Mauritius</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                          <option value="Moldova">Moldova</option>
                          <option value="Monaco">Monaco</option>
                          <option value="Mongolia">Mongolia</option>
                          <option value="Montenegro">Montenegro</option>
                          <option value="Morocco">Morocco</option>
                          <option value="Mozambique">Mozambique</option>
                          <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                          <option value="Namibia">Namibia</option>
                          <option value="Nauru">Nauru</option>
                          <option value="Nepal">Nepal</option>
                          <option value="Netherlands">Netherlands</option>
                          <option value="New Zealand">New Zealand</option>
                          <option value="Nicaragua">Nicaragua</option>
                          <option value="Niger">Niger</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="North Macedonia">North Macedonia</option>
                          <option value="Norway">Norway</option>
                          <option value="Oman">Oman</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Palau">Palau</option>
                          <option value="Palestine">Palestine</option>
                          <option value="Panama">Panama</option>
                          <option value="Papua New Guinea">Papua New Guinea</option>
                          <option value="Paraguay">Paraguay</option>
                          <option value="Peru">Peru</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Poland">Poland</option>
                          <option value="Portugal">Portugal</option>
                          <option value="Qatar">Qatar</option>
                          <option value="Romania">Romania</option>
                          <option value="Russia">Russia</option>
                          <option value="Rwanda">Rwanda</option>
                          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                          <option value="Saint Lucia">Saint Lucia</option>
                          <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                          <option value="Samoa">Samoa</option>
                          <option value="San Marino">San Marino</option>
                          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Senegal">Senegal</option>
                          <option value="Serbia">Serbia</option>
                          <option value="Seychelles">Seychelles</option>
                          <option value="Sierra Leone">Sierra Leone</option>
                          <option value="Singapore">Singapore</option>
                          <option value="Slovakia">Slovakia</option>
                          <option value="Slovenia">Slovenia</option>
                          <option value="Solomon Islands">Solomon Islands</option>
                          <option value="Somalia">Somalia</option>
                          <option value="South Africa">South Africa</option>
                          <option value="Spain">Spain</option>
                          <option value="Sri Lanka">Sri Lanka</option>
                          <option value="Sudan">Sudan</option>
                          <option value="Sudan, South">Sudan, South</option>
                          <option value="Suriname">Suriname</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Syria">Syria</option>
                          <option value="Taiwan">Taiwan</option>
                          <option value="Tajikistan">Tajikistan</option>
                          <option value="Tanzania">Tanzania</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Togo">Togo</option>
                          <option value="Tonga">Tonga</option>
                          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                          <option value="Tunisia">Tunisia</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Turkmenistan">Turkmenistan</option>
                          <option value="Tuvalu">Tuvalu</option>
                          <option value="Uganda">Uganda</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="United Kingdom" selected="selected">United Kingdom</option>
                          <option value="United States">United States</option>
                          <option value="Uruguay">Uruguay</option>
                          <option value="Uzbekistan">Uzbekistan</option>
                          <option value="Vanuatu">Vanuatu</option>
                          <option value="Vatican City">Vatican City</option>
                          <option value="Venezuela">Venezuela</option>
                          <option value="Vietnam">Vietnam</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                      </div>
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Date of Birth
                        </div>
                        <div id="dob-sec">
                          <select name="dob-d" class="input-drop input-third" id="dob-d">
                            <option value="1" default>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          <select name="dob-m" class="input-drop input-third" id="dob-m">
                            <option value="1" default>Jan</option>
                            <option value="2">Feb</option>
                            <option value="3">Mar</option>
                            <option value="4">Apr</option>
                            <option value="5">May</option>
                            <option value="6">Jun</option>
                            <option value="7">Jul</option>
                            <option value="8">Aug</option>
                            <option value="9">Sep</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>
                          </select>
                          <select name="dob-y" class="input-drop input-third" id="dob-y">
                            <option value=2023 default>2023</option>
                            <option value=2022>2022</option>
                            <option value=2021>2021</option>
                            <option value=2020>2020</option>
                            <option value=2019>2019</option>
                            <option value=2018>2018</option>
                            <option value=2017>2017</option>
                            <option value=2016>2016</option>
                            <option value=2015>2015</option>
                            <option value=2014>2014</option>
                            <option value=2013>2013</option>
                            <option value=2012>2012</option>
                            <option value=2011>2011</option>
                            <option value=2010>2010</option>
                            <option value=2009>2009</option>
                            <option value=2008>2008</option>
                            <option value=2007>2007</option>
                            <option value=2006>2006</option>
                            <option value=2005>2005</option>
                            <option value=2004>2004</option>
                            <option value=2003>2003</option>
                            <option value=2002>2002</option>
                            <option value=2001>2001</option>
                            <option value=2000>2000</option>
                            <option value=1999>1999</option>
                            <option value=1998>1998</option>
                            <option value=1997>1997</option>
                            <option value=1996>1996</option>
                            <option value=1995>1995</option>
                            <option value=1994>1994</option>
                            <option value=1993>1993</option>
                            <option value=1992>1992</option>
                            <option value=1991>1991</option>
                            <option value=1990>1990</option>
                            <option value=1989>1989</option>
                            <option value=1988>1988</option>
                            <option value=1987>1987</option>
                            <option value=1986>1986</option>
                            <option value=1985>1985</option>
                            <option value=1984>1984</option>
                            <option value=1983>1983</option>
                            <option value=1982>1982</option>
                            <option value=1981>1981</option>
                            <option value=1980>1980</option>
                            <option value=1979>1979</option>
                            <option value=1978>1978</option>
                            <option value=1977>1977</option>
                            <option value=1976>1976</option>
                            <option value=1975>1975</option>
                            <option value=1974>1974</option>
                            <option value=1973>1973</option>
                            <option value=1972>1972</option>
                            <option value=1971>1971</option>
                            <option value=1970>1970</option>
                            <option value=1969>1969</option>
                            <option value=1968>1968</option>
                            <option value=1967>1967</option>
                            <option value=1966>1966</option>
                            <option value=1965>1965</option>
                            <option value=1964>1964</option>
                            <option value=1963>1963</option>
                            <option value=1962>1962</option>
                            <option value=1961>1961</option>
                            <option value=1960>1960</option>
                            <option value=1959>1959</option>
                            <option value=1958>1958</option>
                            <option value=1957>1957</option>
                            <option value=1956>1956</option>
                            <option value=1955>1955</option>
                            <option value=1954>1954</option>
                            <option value=1953>1953</option>
                            <option value=1952>1952</option>
                            <option value=1951>1951</option>
                            <option value=1950>1950</option>
                            <option value=1949>1949</option>
                            <option value=1948>1948</option>
                            <option value=1947>1947</option>
                            <option value=1946>1946</option>
                            <option value=1945>1945</option>
                            <option value=1944>1944</option>
                            <option value=1943>1943</option>
                            <option value=1942>1942</option>
                            <option value=1941>1941</option>
                            <option value=1940>1940</option>
                            <option value=1939>1939</option>
                            <option value=1938>1938</option>
                            <option value=1937>1937</option>
                            <option value=1936>1936</option>
                            <option value=1935>1935</option>
                            <option value=1934>1934</option>
                            <option value=1933>1933</option>
                            <option value=1932>1932</option>
                            <option value=1931>1931</option>
                            <option value=1930>1930</option>
                            <option value=1929>1929</option>
                            <option value=1928>1928</option>
                            <option value=1927>1927</option>
                            <option value=1926>1926</option>
                            <option value=1925>1925</option>
                            <option value=1924>1924</option>
                            <option value=1923>1923</option>
                            <option value=1922>1922</option>
                            <option value=1921>1921</option>
                            <option value=1920>1920</option>
                            <option value=1919>1919</option>
                            <option value=1918>1918</option>
                            <option value=1917>1917</option>
                            <option value=1916>1916</option>
                            <option value=1915>1915</option>
                            <option value=1914>1914</option>
                            <option value=1913>1913</option>
                            <option value=1912>1912</option>
                            <option value=1911>1911</option>
                            <option value=1910>1910</option>
                            <option value=1909>1909</option>
                            <option value=1908>1908</option>
                            <option value=1907>1907</option>
                            <option value=1906>1906</option>
                            <option value=1905>1905</option>
                            <option value=1904>1904</option>
                            <option value=1903>1903</option>
                            <option value=1902>1902</option>
                            <option value=1901>1901</option>
                            <option value=1900>1900</option>
                            <option value=1899>1899</option>
                            <option value=1898>1898</option>
                          </select>
                        </div>
                      </div>
                  </div>
                </div>
                <?php/*
                  require ("includes/connect_db.php");
      
                  $sql = "SELECT *
                          FROM `user`
                          WHERE `u_id` = 1;";
                  $result = mysqli_query($conn, $sql);
                  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                  echo 
                    $row["u_id"].$row["f_name"].$row["s_name"].$row["dob_d"].$row["dob_m"].$row["dob_y"]
                  ;*/
                ?>
              </div>
              
              <div class="horizontal-line-sec h-both">
                <div class="horizontal-line"></div>
              </div>
      
              <div class="details-sec">
                <div class="details-item">
                  <div class="details-title-sec">
                    <div class="details-title-container">
                      <div class="details-title">
                        Security Details:
                      </div>
                    </div>
                  </div>
                </div>
                <div class="details-item">
                  <div class="details-input-sec">
      
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Password Hash
                        </div>
                        <div class="input-disabled" id="password">'.$row["pwd"].'</div>
                      </div>
                      <div class="details-input-item">
                        <div id="reset-pwd-sec">
                          <div class="action-button" onclick="passwordReset()">Reset Password</div>
                        </div>
                      </div>
                      
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Security Question 1
                        </div>
                        <select name="q-1" required size="1" class="input-drop input-full" id="q-1">
                          <option value="1">What is your mother\'s maiden name?</option>
                          <option value="2">What is your father\'s middle name?</option>
                          <option value="3">What highschool did you attend?</option>
                        </select>
                      </div>
      
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Security Question 1 - Answer
                        </div>
                        <input type="text" class="input-disabled" disabled value="'.$row["sec_q_1_a"].'" id="q-a-1">
                      </div>
      
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Security Question 2
                        </div>
                        <select name="q-2" required size="1" class="input-drop input-full" id="q-2">
                          <option value="4">What is the name of your favourite pet?</option>
                          <option value="5">What was your favourite food as a child?</option>
                          <option value="6">What city or town did your parents meet?</option>
                        </select>
                      </div>
      
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Security Question 2 - Answer
                        </div>
                        <input type="text" class="input-disabled" disabled value="'.$row["sec_q_2_a"].'" id="q-a-2">
                      </div>
                  </div>
                </div>
              </div>
      
              <div class="horizontal-line-sec h-both">
                <div class="horizontal-line"></div>
              </div>
      
              <div class="details-sec">
                <div class="details-item">
                  <div class="details-title-sec">
                    <div class="details-title-container">
                      <div class="details-title">
                        Other Details:
                      </div>
                    </div>
                  </div>
                </div>
                <div class="details-item">
                  <div class="details-input-sec">
                      
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Plan Level
                        </div>
                        <select name="plan" required size="1" class="input-drop input-full" id="plan">
                          <option value="0">Basic</option>
                          <option value="1">Premium</option>
                        </select>
                      </div>
      
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Account Activity
                        </div>
                        <select name="activity" required size="1" class="input-drop input-full" id="activity">
                          <option value="1">Active</option>
                          <option value="0">Blocked</option>
                        </select>
                      </div>
      
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Join Date
                        </div>
                        <div class="input-disabled">'.$row["j_date"].'</div>
                      </div>
      
                      <div class="details-input-item">
                        <div class="details-input-heading">
                          Admin Privileges
                        </div>
                        <div id="admin-sec">
                          <div class="input-disabled input-half" id="a-id">
                          '.$row["a_id"].'
                          </div>
                          <select name="admin" required size="1" class="input-drop input-half" id="admin-level">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                          </select>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
      
              <div class="horizontal-line-sec h-both">
                <div class="horizontal-line"></div>
              </div>
      
              <div class="panel-btn-sec">
                <div class="panel-btn-item">
                  <div id="save-btn" onclick="updateUser(\''.$row["u_id"].'\')">
                    Save
                  </div>
                </div>
                <div class="panel-btn-item">
                  <div id="cancel-btn" onclick="linkClicked(\'admin_users.php\');">
                    Cancel
                  </div>
                </div>
              </div>
            ';
          }
          else {
            Header("Location: admin_dashboard.php");
          }
          ?>

      </div>
    </div>

    <script src="javascript/admin_edit_script.js"></script>
  </body>
</html>
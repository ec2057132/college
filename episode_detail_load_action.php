<?php
require("../includes/connect_db.php");

$id = $_POST["t_id"];
$season = $_POST["s_id"];
$episode = $_POST["e_id"];

$sql = "SELECT `s_id`, `e_number`, `e_title`, `e_description`, `e_duration`
FROM `episode`
WHERE `tv_id` = '$id' AND `s_id` = '$season' AND `e_number` = '$episode';";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >= 1) {
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo '
    <div class="details-input-item">
      <div id="episode-title-season-episode-sec">
        <div class="details-input-heading">
          Episode Title
        </div>
        <input type="text" class="input" id="e-title" value="'.$row["e_title"].'">
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
          <input type="text" class="input input-third" id="e-season" value="'.$season.'">
          <input type="text" class="input input-third" id="e-number" value="'.$episode.'">
          <input type="text" class="input input-third" id="e-duration" value="'.$row["e_duration"].'">
        </div>
      </div>
    </div>
    
    <div class="details-input-item">
      <div class="details-input-heading">
        Episode Description
      </div>
      <textarea rows="4" class="input-area" id="e-description">'.$row["e_description"].'</textarea>
    </div>';
}
?>
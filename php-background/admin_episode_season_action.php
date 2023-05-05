<?php
require("../includes/connect_db.php");

$tId = $_POST["t_id"];
$season = $_POST["s_id"];

$sql = "SELECT `s_id`, `e_number`, `e_title`, `e_description`, `e_duration`
FROM `episode`
WHERE `tv_id` = '$tId' AND `s_id` = '$season';";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >= 1) {
  $sql = "SELECT `tv_thumbnail`
  FROM `tv`
  WHERE `tv_id` = '$tId';";
  $resultt = mysqli_query($conn, $sql);
  $rowt = mysqli_fetch_array($resultt, MYSQLI_ASSOC);
  
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo '
    <div class="scroll-item" onclick='.'loadEpisodeDetail('.$tId.','.$row["s_id"].','.$row["e_number"].')'.'>
      <div class="episode-info">
        <img src="img/tv_shows/'.$rowt["tv_thumbnail"].'.png">
        <p id="scroll-ep-'.$row["e_number"].'">'.$row["e_title"].'</p>
      </div>
      <div class="episode-num-len">
        <p>Episode '.$row["e_number"].'</p>
        <p id="scroll-ep-time-'.$row["e_number"].'">'.$row["e_duration"].'m</p>
      </div>
    </div>';
  }
  echo'
    <div class="scroll-item" id="add-new-ep" onclick='.''.'>
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
?>
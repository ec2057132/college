<?php
require("../includes/connect_db.php");

$id = $_POST["t_id"];
$season = $_POST["s_id"];

$sql = "SELECT `s_id`, `e_number`, `e_title`, `e_description`, `e_duration`
FROM `episode`
WHERE `tv_id` = '$id' AND `s_id` = '$season';";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >= 1) {
  $sql = "SELECT `tv_thumbnail`
  FROM `tv`
  WHERE `tv_id` = '$id';";
  $resultt = mysqli_query($conn, $sql);
  $rowt = mysqli_fetch_array($resultt, MYSQLI_ASSOC);
  
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo '
    <div class="scroll-item" onclick='.'linkClicked("tv_detail.php?t='.$id.'&s='.$row["s_id"].'&e='.$row["e_number"].'")'.'>
      <div class="episode-info">
        <img src="img/tv_shows/'.$rowt["tv_thumbnail"].'.png">
        <p>'.$row["e_title"].'</p>
      </div>
      <div class="episode-num-len">
        <p>Episode '.$row["e_number"].'</p>
        <p>'.$row["e_duration"].'m</p>
      </div>
    </div>';
  }
}
else {
  Header("Location: tv_detail.php?t=".$id."&s=".$season."&e=1");
}
?>
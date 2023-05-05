<?php
  require("../includes/connect_db.php");
  
  $title = $_POST["tv_title"];
  $desc = $_POST["tv_description"];
  $year = $_POST["tv_year"];
  $g1 = $_POST["g_id_1"];
  $g2 = $_POST["g_id_2"];
  $g3 = $_POST["g_id_3"];
  $thumb = $_POST["tv_thumbnail"];
  $trail = $_POST["tv_trailer"];
  $cor = $_POST["tv_creator"];
  $act = $_POST["tv_actors"];
  $age = $_POST["tv_age"];

  if ($g2 == 0 && $g3 == 0) {
    $sql = "INSERT INTO `tv` (`tv_title`, `tv_description`, `tv_year`, `g_id_1`, `g_id_2`, `g_id_3`, `tv_thumbnail`, `tv_trailer`, `tv_creator`, `tv_actors`, `tv_age`)
            VALUES ('$title', '$desc', '$year', '$g1', NULL, NULL, '$thumb', '$trail', '$cor', '$act', '$age');";

    $result = mysqli_query($conn, $sql);
  }
  else if ($g2 == 0) {
    $sql = "INSERT INTO `tv` (`tv_title`, `tv_description`, `tv_year`, `g_id_1`, `g_id_2`, `g_id_3`, `tv_thumbnail`, `tv_trailer`, `tv_creator`, `tv_actors`, `tv_age`)
            VALUES ('$title', '$desc', '$year', '$g1', NULL, '$g3', '$thumb', '$trail', '$cor', '$act', '$age');";

    $result = mysqli_query($conn, $sql);
  }
  else if ($g3 == 0) {
    $sql = "INSERT INTO `tv` (`tv_title`, `tv_description`, `tv_year`, `g_id_1`, `g_id_2`, `g_id_3`, `tv_thumbnail`, `tv_trailer`, `tv_creator`, `tv_actors`, `tv_age`)
            VALUES ('$title', '$desc', '$year', '$g1', '$g2', NULL, '$thumb', '$trail', '$cor', '$act', '$age');";

    $result = mysqli_query($conn, $sql);
}
else {
  $sql = "INSERT INTO `tv` (`tv_title`, `tv_description`, `tv_year`, `g_id_1`, `g_id_2`, `g_id_3`, `tv_thumbnail`, `tv_trailer`, `tv_creator`, `tv_actors`, `tv_age`)
            VALUES ('$title', '$desc', '$year', '$g1', '$g2', '$g3', '$thumb', '$trail', '$cor', '$act', '$age');";

  $result = mysqli_query($conn, $sql);
}
?>
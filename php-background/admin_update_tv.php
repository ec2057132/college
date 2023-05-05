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
    $sql = "UPDATE `tv`
            SET `tv_title` = '$title', 
            `tv_description` = '$desc', 
            `tv_year` = '$year', 
            `g_id_1` = '$g1', 
            `g_id_2` = NULL,
            `g_id_3` = NULL,
            `tv_thumbnail` = '$thumb', 
            `tv_trailer` = '$trail', 
            `tv_creator` = '$cor', 
            `tv_actors` = '$act', 
            `tv_age` = '$age'
            WHERE `tv_id` = '$tId';";

    $result = mysqli_query($conn, $sql);
  }
  else if ($g2 == 0) {
    $sql = "UPDATE `tv`
            SET `tv_title` = '$title', 
            `tv_description` = '$desc', 
            `tv_year` = '$year', 
            `g_id_1` = '$g1', 
            `g_id_2` = NULL,
            `g_id_3` = '$g3',
            `tv_thumbnail` = '$thumb', 
            `tv_trailer` = '$trail', 
            `tv_creator` = '$cor', 
            `tv_actors` = '$act', 
            `tv_age` = '$age'
            WHERE `tv_id` = '$tId';";

    $result = mysqli_query($conn, $sql);
  }
  else if ($g3 == 0) {
    $sql = "UPDATE `tv`
            SET `tv_title` = '$title', 
            `tv_description` = '$desc', 
            `tv_year` = '$year', 
            `g_id_1` = '$g1', 
            `g_id_2` = '$g2',
            `g_id_3` = NULL,
            `tv_thumbnail` = '$thumb', 
            `tv_trailer` = '$trail', 
            `tv_creator` = '$cor', 
            `tv_actors` = '$act', 
            `tv_age` = '$age'
            WHERE `tv_id` = '$tId';";

    $result = mysqli_query($conn, $sql);
}
else {
  $sql = "UPDATE `tv`
          SET `tv_title` = '$title', 
          `tv_description` = '$desc', 
          `tv_year` = '$year', 
          `g_id_1` = '$g1', 
          `g_id_2` = '$g2',
          `g_id_3` = '$g3',
          `tv_thumbnail` = '$thumb', 
          `tv_trailer` = '$trail', 
          `tv_creator` = '$cor', 
          `tv_actors` = '$act', 
          `tv_age` = '$age'
          WHERE `tv_id` = '$tId';";

  $result = mysqli_query($conn, $sql);
}
?>
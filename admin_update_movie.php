<?php
  require("../includes/connect_db.php");
  
  $mId = $_POST["m_id"];
  $title = $_POST["m_title"];
  $desc = $_POST["m_description"];
  $year = $_POST["m_year"];
  $g1 = $_POST["g_1"];
  $g2 = $_POST["g_2"];
  $g3 = $_POST["g_3"];
  $dur = $_POST["m_duration"];
  $thumb = $_POST["m_thumbnail"];
  $trail = $_POST["m_trailer"];
  $dir = $_POST["m_director"];
  $act = $_POST["m_actors"];
  $age = $_POST["m_age"];

  if ($g2 == 0 && $g3 == 0) {
    $sql = "UPDATE `movie`
            SET `m_title` = '$title', 
            `m_description` = '$desc', 
            `m_year` = '$year', 
            `g_id_1` = '$g1', 
            `g_id_2` = NULL,
            `g_id_3` = NULL, 
            `m_duration` = '$dur', 
            `m_thumbnail` = '$thumb', 
            `m_trailer` = '$trail', 
            `m_director` = '$dir', 
            `m_actors` = '$act', 
            `m_age` = '$age'
            WHERE `m_id` = '$mId';";

    $result = mysqli_query($conn, $sql);
  }
  else if ($g2 == 0) {
    $sql = "UPDATE `movie`
            SET `m_title` = '$title', 
            `m_description` = '$desc', 
            `m_year` = '$year', 
            `g_id_1` = '$g1', 
            `g_id_2` = NULL,
            `g_id_3` = '$g3',
            `m_duration` = '$dur',
            `m_thumbnail` = '$thumb',
            `m_trailer` = '$trail',
            `m_director` = '$dir',
            `m_actors` = '$act',
            `m_age` = '$age'
            WHERE `m_id` = '$mId';";

    $result = mysqli_query($conn, $sql);
  }
  else if ($g3 == 0) {
    $sql = "UPDATE `movie`
            SET `m_title` = '$title', 
            `m_description` = '$desc', 
            `m_year` = '$year', 
            `g_id_1` = '$g1', 
            `g_id_2` = '$g2',
            `g_id_3` = NULL, 
            `m_duration` = '$dur', 
            `m_thumbnail` = '$thumb', 
            `m_trailer` = '$trail', 
            `m_director` = '$dir', 
            `m_actors` = '$act', 
            `m_age` = '$age'
            WHERE `m_id` = '$mId';";

    $result = mysqli_query($conn, $sql);
}
else {
  $sql = "UPDATE `movie`
          SET `m_title` = '$title', 
          `m_description` = '$desc', 
          `m_year` = '$year', 
          `g_id_1` = '$g1', 
          `g_id_2` = '$g2',
          `g_id_3` = '$g3', 
          `m_duration` = '$dur', 
          `m_thumbnail` = '$thumb', 
          `m_trailer` = '$trail', 
          `m_director` = '$dir', 
          `m_actors` = '$act', 
          `m_age` = '$age'
          WHERE `m_id` = '$mId';";

  $result = mysqli_query($conn, $sql);
}
?>
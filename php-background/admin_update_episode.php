<?php
  require("../includes/connect_db.php");
  
  $tId = $_POST["tv_id"];
  $season = $_POST["s_id"];
  $episode = $_POST["e_number"];
  $title = $_POST["e_title"];
  $desc = $_POST["e_description"];
  $dur = $_POST["e_duration"];

  $sql = "UPDATE `episode`
          SET `s_id` = '$season', 
          `e_number` = '$episode', 
          `e_title` = '$title', 
          `e_description` = '$desc', 
          `e_duration` = '$dur'
          WHERE `tv_id` = '$tId' AND `s_id` = '$season' AND `e_number` = '$episode';";

  $result = mysqli_query($conn, $sql);
?>
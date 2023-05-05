<?php
  require("../includes/connect_db.php");

  $tId = $_POST["tv_id"];
  $sId = $_POST["s_id"];
  $eNum = $_POST["e_number"];
  $title = $_POST["e_title"];
  $desc = $_POST["e_description"];
  $dur = $_POST["e_duration"];

  $sql = "INSERT INTO `episode` (`tv_id`, `s_id`, `e_number`, `e_title`, `e_description`, `e_duration`)
          VALUES ('$tId', '$sId', '$eNum', '$title', '$desc', '$dur');";

  $result = mysqli_query($conn, $sql);
?>
<?php
  require("../includes/connect_db.php");
  
  $gId = $_POST["g_id"];
  $name = $_POST["g_name"];
  $desc = $_POST["g_description"];

  $sql = "UPDATE `genre`
          SET `g_name` = '$name', `g_description` = '$desc'
          WHERE `g_id` = '$gId';";

  $result = mysqli_query($conn, $sql);
?>
<?php
  require("../includes/connect_db.php");
  
  $gId = $_POST["g_id"];

  $sql = "DELETE FROM `genre` 
          WHERE `g_id`='$gId';";

  $result = mysqli_query($conn, $sql);
?>
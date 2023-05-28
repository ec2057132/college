<?php
  require("../includes/connect_db.php");
  
  $tId = $_POST["tv_id"];

  $sql = "DELETE FROM `tv`
          WHERE `tv_id`='$tId';";

  $result = mysqli_query($conn, $sql);
?>
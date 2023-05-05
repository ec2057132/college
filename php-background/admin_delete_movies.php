<?php
  require("../includes/connect_db.php");
  
  $mId = $_POST["m_id"];

  $sql = "DELETE FROM `movie` 
          WHERE `m_id`='$mId';";

  $result = mysqli_query($conn, $sql);
?>
<?php
  require("../includes/connect_db.php");
  
  $uId = $_POST["u_id"];

  $sql = "DELETE FROM `user`
          WHERE `u_id`='$uId';";

  $result = mysqli_query($conn, $sql);
?>
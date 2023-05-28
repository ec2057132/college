<?php
  require("../includes/connect_db.php");

  $e = $_POST["e"];

  $sql = "SELECT `email`, `sec_q_1`, `sec_q_2`
          FROM `user`
          WHERE `email` = '$e';";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result, MYSQLI_NUM);
    echo "FOUND:" . $row[1] . ":" . $row[2];
  }
  else {
    echo "INVALID";
  }

?>
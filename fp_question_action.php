<?php
  require("../includes/connect_db.php");

  $e = $_POST["e"];
  $ans1 = $_POST["q1a"];
  $ans2 = $_POST["q2a"];

  $sql = "SELECT `sec_q_1_a`, `sec_q_2_a`
          FROM `user`
          WHERE `email` = '$e';";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result, MYSQLI_NUM);

    $uAns1 = strtoupper($ans1);
    $uAns2 = strtoupper($ans2);

    if (password_verify($uAns1, $row[0])) {
      if (password_verify($uAns2, $row[1])) {
        echo "MATCH";
      }
      else {
        echo "NOMATCH";
      }
    }
    else {
      echo "NOMATCH";
    }
  }

?>
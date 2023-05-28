<?php
  require("../includes/connect_db.php");

  $e = $_POST["email"];
  $pwd = $_POST["pwd"];

  $sql = "SELECT `u_id`, `pwd`, `sub_status`
          FROM `user`
          WHERE `email` = '$e';";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result, MYSQLI_NUM);
    
    if (password_verify($pwd, $row[1])) {
      session_start();
      $_SESSION["u_id"] = $row[0];
      $_SESSION["sub_status"] = $row[2];
      echo "MATCH";
    }
    else {
      //Password is Wrong
      echo "NOMATCH";
    }
  }
  else {
    //No Email Matching
    echo "INVALID";
  }

?>
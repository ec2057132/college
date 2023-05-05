<?php
  require("../includes/connect_db.php");
  
  $e = $_POST["e"];
  $pwd = $_POST["pwd"];

  $pwdHash = password_hash($pwd, PASSWORD_DEFAULT);

  $sql = "UPDATE `user`
          SET `pwd` = '$pwdHash'
          WHERE `email` = '$e';";

  $result = mysqli_query($conn, $sql);

  if ($result == 1) {
    echo "CHANGE";
  }
  else {
    echo "ERROR";
  }
?>
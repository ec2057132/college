<?php
  require("../includes/connect_db.php");

  $name = $_POST["g_name"];
  $desc = $_POST["g_description"];

  $sql = "INSERT INTO `genre` (`g_name`, `g_description`)
          VALUES ('$name', '$desc');";

  $result = mysqli_query($conn, $sql);
?>
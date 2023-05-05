<?php
require("../includes/connect_db.php");
session_start();
  
$user = $_POST["u-id"];
$cNum = $_POST["cardNum"];
$cName = $_POST["cardName"];
$cCVC = $_POST["cardCvc"];
$cExMonth = $_POST["exMonth"];
$cExYear = $_POST["exYear"];

$sql = "UPDATE `user`
        SET `sub_status` = 1
        WHERE `u_id` = '$user';";

$result = mysqli_query($conn, $sql);

if ($result == 1) {
  $_SESSION["sub_status"] = 1;

  $sql = "INSERT INTO `card` (`u_id`,	`c_number`,	`c_name`,	`e_cvc`,	`c_ex_month`,	`c_ex_year`,	`s_date`)
          VALUES ('$user', '$cNum', '$cName', '$cCVC', '$cExMonth', '$cExYear', NOW());";

  $result = mysqli_query($conn, $sql);
}
else {
  echo "ERROR";
}
?>
<?php
  require("../includes/connect_db.php");
  
  $uId = $_POST["u_id"];
  $fName = $_POST["f_name"];
  $sName = $_POST["s_name"];
  $e = $_POST["email"];
  $pNum = $_POST["p_num"];
  $dobD = $_POST["dob_d"];
  $dobM = $_POST["dob_m"];
  $dobY = $_POST["dob_y"];
  $cntry = $_POST["cntry"];
  $secQ1 = $_POST["sec_q_1"];
  $secQ2 = $_POST["sec_q_2"];
  $subStatus = $_POST["sub_status"];
  $actStatus = $_POST["act_status"];
  $aId = $_POST["a_id"];

  if ($a_id == 0) {
    $sql = "UPDATE `user`
          SET `f_name` = '$fName', 
          `s_name` = '$sName', 
          `email` = '$e', 
          `p_num` = '$pNum', 
          `dob_d` = '$dobD', 
          `dob_m` = '$dobM', 
          `dob_y` = '$dobY', 
          `cntry` = '$cntry', 
          `sec_q_1` = '$secQ1', 
          `sec_q_2` = '$secQ2', 
          `sub_status` = '$subStatus',
          `act_status` = '$actStatus',
          `a_id` = NULL
          WHERE `u_id` = '$uId';";

    $result = mysqli_query($conn, $sql);
  }
  else {
    $sql = "UPDATE `user`
            SET `f_name` = '$fName', 
            `s_name` = '$sName', 
            `email` = '$e', 
            `p_num` = '$pNum', 
            `dob_d` = '$dobD', 
            `dob_m` = '$dobM', 
            `dob_y` = '$dobY', 
            `cntry` = '$cntry', 
            `sec_q_1` = '$secQ1', 
            `sec_q_2` = '$secQ2', 
            `sub_status` = '$subStatus',
            `act_status` = '$actStatus',
            `a_id` = '$aId'
            WHERE `u_id` = '$uId';";
  
    $result = mysqli_query($conn, $sql);
  }
?>
<?php
  require("../includes/connect_db.php");

  $fName = $_POST["f_name"];
  $sName = $_POST["s_name"];
  $e = $_POST["email"];
  $p_num = $_POST["p_num"];
  $dob_d = $_POST["dob_d"];
  $dob_m = $_POST["dob_m"];
  $dob_y = $_POST["dob_y"];
  $cntry = $_POST["cntry"];
  $pwd = $_POST["pwd"];
  $sec_q_1 = $_POST["sec_q_1"];
  $sec_q_1_a = $_POST["sec_q_1_a"];
  $sec_q_2 = $_POST["sec_q_2"];
  $sec_q_2_a = $_POST["sec_q_2_a"];
  $j_date = $_POST["j_date"];

  settype($dob_d, "integer");
  settype($dob_m, "integer");
  settype($dob_y, "integer");

  $pwdHash = password_hash($pwd, PASSWORD_DEFAULT);
  $secQ1Hash = password_hash(strtoupper($sec_q_1_a), PASSWORD_DEFAULT);
  $secQ2Hash = password_hash(strtoupper($sec_q_2_a), PASSWORD_DEFAULT);

  $sql = "INSERT INTO `user` (`f_name`, `s_name`, `email`, `p_num`, `dob_d`, `dob_m`, `dob_y`, `cntry`, `pwd`, `sec_q_1`, `sec_q_1_a`, `sec_q_2`, `sec_q_2_a`, `j_date`)
          VALUES ('$fName', '$sName', '$e', '$p_num', '$dob_d', '$dob_m', '$dob_y', '$cntry', '$pwdHash', '$sec_q_1', '$secQ1Hash', '$sec_q_2', '$secQ2Hash', NOW());";

  $r = mysqli_query($conn, $sql);

  if(!$r) {
    mysqli_close($conn);
    exit();
  }
  else {
    Header("Location: ../index.php");
  }
?>
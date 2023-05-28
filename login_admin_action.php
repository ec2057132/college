<?php
  require("../includes/connect_db.php");

  $e = $_POST["email"];
  $pwd = $_POST["pwd"];

  $sql = "SELECT `a_id`
          FROM `user`
          WHERE `email` = '$e';";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result, MYSQLI_NUM);
    
    if ($row[0] !== null) {
      $aID = $row[0];

      $sql = "SELECT `pwd`
          FROM `admin`
          WHERE `a_id` = '$aID';";

      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        
        if (password_verify($pwd, $row[0])) {
          session_start();
          $_SESSION["a_id"] = $row[0];
          echo "MATCH";
        }
        else {
          //Password is Wrong
          echo "NOMATCH";
        }
      }
      else {
        //There is either no aid stored or the a_id has a duplicate
        echo "AIDPROBLEM";
      }
    }
    else {
      //No Admin ID
      echo "NOADMIN";
    }
  }
  else {
    //No Email Matching
    echo "INVALID";
  }

?>
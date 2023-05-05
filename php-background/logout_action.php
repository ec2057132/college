<?php
session_start();
if (!isset($_SESSION["u_id"])) {
  Header("Location: ../index.php");
}
else if (!isset($_SESSION["a_id"])) {
  Header("Location: ../index.php");
}

session_unset();
session_destroy();

Header("Location: ../index.php");
?>
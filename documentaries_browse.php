<?php include("includes/base.php");
//Checks id login variable has a variable.
session_start();
if (!isset( $_SESSION["u_id"] ) ) {
  Header("Location: index.php");
}
?>
    <title>Documentaries | Netbook</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles/style_navbar.css">
    <link rel="stylesheet" href="styles/style_home.css">
  </head>
  <body>
    <!--Navigation Bar-->
    <?php include("includes/navbar.php");?>
    
    <!--<script src="javascript/login_script.js"></script>-->
  </body>
</html>
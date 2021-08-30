<?php
include('../components/headDash.php');
include('../db_connection.php');
?>
<?php
    session_start();
    if(!isset($_SESSION['user_email']))
    header('Location: ../index.php');
?>

<body>
  <?php
  include('./TopNav.php')
  ?>

  <?php
  include('./SideNav.php')
  ?>

  <?php
  include('./Layout.php')
  ?>

</body>

</html>
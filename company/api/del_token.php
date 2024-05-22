<?php session_start();
//session_destroy();
unset($_SESSION['company_token']);

echo '<script type="text/javascript">
           window.location = "../login.php"
      </script>';

?>
<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['username']);
session_destroy();
echo "<script>window.location.href='login.php';</script>";
?>
<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();
unset($_SESSION["email"]);
unset($_SESSION["pass"]);
unset($_SESSION["role"]);
header("location: ../../index.php");
?>
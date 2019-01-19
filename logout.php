<?php
session_start();
session_destroy();
header('location: login.php');

// Hey make sure they loop back to either the home page or the login page again.

?>
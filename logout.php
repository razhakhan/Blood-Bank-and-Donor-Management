<?php
require 'includes/config.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: homepage.php");
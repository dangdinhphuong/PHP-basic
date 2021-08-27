<?php
session_start();
require '../global.php';
session_destroy();
setcookie("user", "", time()-3600);
header("Location: " . $baseUrl . "LoginPdo.php");
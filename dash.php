<?php
session_start();
$user_name = $_SESSION['user_name'];
$toSmall = strtolower($user_name);
$toUppercase = ucfirst($toSmall);

echo "Daer. {$toUppercase} Welcome to your favorite site";
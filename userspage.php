<?php

echo "userspage ";
session_start();
if (!$_SESSION['logged']) {
    header("Location: loginSayfasi.php");
    exit;
}
echo 'Welcome, ' . $_SESSION['uye_adi'];
?>
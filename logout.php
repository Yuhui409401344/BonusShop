<?
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['account']);
header('Location:login.php');
?>

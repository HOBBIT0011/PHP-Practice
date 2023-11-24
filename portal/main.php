<?php
session_start();

if (
    !isset($_SESSION["email"]) || empty($_SESSION["email"]) ||
    !isset($_SESSION["password"]) || empty($_SESSION["password"]) ||
    !isset($_SESSION["key"]) || empty($_SESSION["key"])
)
{
    header("location: test.php");
    exit;
};
?>


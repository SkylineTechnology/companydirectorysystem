<?php
$sitename = "COMPANY DIRECTORY SYSTEM";
$conn = mysqli_connect("localhost", "root", "", "companydirectory_db");
if (!$conn) {
    die(mysqli_error($conn) . "Error connecting Database!");
}
?>
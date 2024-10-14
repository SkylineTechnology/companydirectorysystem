<?php
$sitename = "Security System for Securing Exam Questions in the Cloud";
$conn = mysqli_connect("localhost", "root", "", "cloudstorage_db");
if (!$conn) {
    die(mysqli_error($conn) . "Error connecting Database!");
}
?>
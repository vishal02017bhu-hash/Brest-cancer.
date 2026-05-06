<?php
$conn = mysqli_connect("localhost", "root", "", "breast_cancer_system");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
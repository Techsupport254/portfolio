<?php
include 'database/connect.php';

include 'database/insert.php';

$toEmail = "kiruivictor097@gmail.com";
$mailHeaders = "From: " . $_POST["name"] . "<" . $_POST["email"] . ">\r\n";
if (mail($toEmail, $_POST["project"], $_POST["message"], $mailHeaders)) {
    echo "<p class='success'>Contact Mail Sent.</p>";
} else {
    echo "<p class='Error'>Problem in Sending Mail.</p>";
}
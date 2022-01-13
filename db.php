<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = "user_sendemail";
$conn = mysqli_connect($host, $username, $password, "$dbname");
if (!$conn) {
    die('Could not Connect MySql Server:');
}

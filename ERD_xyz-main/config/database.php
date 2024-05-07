<?php
$servername = "localhost";
$username = "backend_dipa";
$password = "backend_dipa";
$dbname = "db_xyz";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
  die("Connection failed: ". $connect->connect_error);
}
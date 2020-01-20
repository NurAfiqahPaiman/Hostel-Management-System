<?php

$servename = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "hms";


$conn = mysqli_connect($servename,$dBUsername,$dBPassword,$dBName);

if (!$conn) {
    die('Connection failed: '.mysqli_connect_error());
    
} else {
    echo 'Database Connected';
}
<?php

$servename = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "hostel management system";


$conn = mysqli_connect($servename,$dBUsername,$dBPassword,$dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
    echo 'connected';
} else {
    echo 'not connected';
}
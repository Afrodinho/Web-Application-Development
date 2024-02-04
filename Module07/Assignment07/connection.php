<?php
$con = mysqli_connect("172.19.0.2","dbuser","dbpass","db");

if (mysqli_connect_errno())
{
    echo "failed to connect to MYSQL: " . mysqli_connect_error();
    exit();
}
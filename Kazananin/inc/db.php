<?php 

$conn = mysqli_connect("localhost","root","root","first");

if (!$conn) {
    echo "fail: " . mysqli_connect_error();

}
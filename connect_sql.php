<?php
$conn = mysqli_connect("localhost","root","user123","user_db");
if (mysqli_connect_error()){
    echo "Failed to connect to MySQL : " . mysqli_connect_error();
}
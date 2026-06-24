<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "lifelink_ai"
);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

?>
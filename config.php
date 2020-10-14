<?php

include("style.php");

$server = "localhost";
$user = "root";
$password = "";
$database = "vsga_t";

$db = mysqli_connect($server, $user, $password, $database);

if( !$db ){
    die("Failed connect to database: " . mysqli_connect_error());
}

?>
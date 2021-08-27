<?php 
$con = mysqli_connect('localhost', 'admin', 'vinny', 'userform');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
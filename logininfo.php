<?php

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "Connection Successful";
} else {
    echo "Not Connected Yet!";
}

mysqli_select_db($con, 'photowebsiteuserinfo');
$user = $_POST['user'];
$password = $_POST['password'];



$query = "insert into logininfo (user, password) values('$user', '$password')";

mysqli_query($con, $query);

// header('location:index.php');

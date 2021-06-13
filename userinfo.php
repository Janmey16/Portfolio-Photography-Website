<?php

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "Connection Successful";
} else {
    echo "Not Connected Yet!";
}

mysqli_select_db($con, 'photowebsiteuserinfo');
$user = $_POST['user'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$comments = $_POST['comments'];


$query = "insert into userinfodata (user, mobile, email, comments) values('$user', '$mobile', '$email', '$comments')";

mysqli_query($con, $query);

header('location:index.php');

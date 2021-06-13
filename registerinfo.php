<?php

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "Connection Successful";
} else {
    echo "Not Connected Yet!";
}

mysqli_select_db($con, 'photowebsiteuserinfo');
$yourfullname = $_POST['yourfullname'];
$yourmobileno = $_POST['yourmobileno'];
$username = $_POST['username'];
$youremail = $_POST['youremail'];
$yourpassword = $_POST['yourpassword'];


$query = "insert into register (yourfullname, yourmobileno, username, youremail, yourpassword) values('$yourfullname', '$yourmobileno', '$username', '$youremail', '$yourpassword')";

mysqli_query($con, $query);

header('location:index.php');

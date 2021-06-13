<?php

$con = mysqli_connect('localhost', 'root');

if ($con) {
    echo "Connection Successful";
} else {
    echo "Not Connected Yet!";
}

mysqli_select_db($con, 'photowebsiteuserinfo');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobileno = $_POST['mobileno'];
$e_mail = $_POST['e_mail'];
$feedback = $_POST['feedback'];


$query = "insert into contactinfo (firstname, lastname, mobileno, e_mail, feedback) values('$firstname', '$lastname', '$mobileno', '$e_mail', '$feedback')";

mysqli_query($con, $query);

header('location:index.php');

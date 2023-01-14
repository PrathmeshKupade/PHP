<?php
session_start();

$conn = mysqli_connect('localhost', 'root');

if($conn){
    echo "connection succesful";
}
else{
    echo "connection failed";
}

mysqli_select_db($conn, 'projectdata2');

$email = $_POST['email'];
$password = $_POST['password'];

$query = "select * from userinfo where email = '$email' && password = '$password'";

$q = mysqli_query($conn, $query);

$num = mysqli_num_rows($q);

if($num == 1){
    $_SESSION['username'] = $name;
    header('location:home.php');
}
else{
    header('location:login.php');
}
?>
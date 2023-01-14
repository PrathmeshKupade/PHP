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

$name = $_POST['name'];
$city= $_POST['city'];
$address = $_POST['address'];
$comment= $_POST['comment'];

$query = "insert into extrainfo(name, city, address, comment) values('$name', '$city', '$address', '$comment')";
mysqli_query($conn, $query);
header('location:home.php');
?>
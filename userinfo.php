<?php

$con = mysqli_connect('localhost','root');

if ($con){
  echo "Connection done";
}


mysqli_select_db($con, 'project1');


// $servername ="localhost";
// $username = "root";
// $password = "";
// $database = "project1";

// // Create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);

// if (!$conn){
//   die("Sorry we failed to connect:". mysqli_connect_error());
// }



$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment= $_POST['comment'];

$query = "INSERT INTO `userinfodata`(`user`, `email`, `mobile`, `comment`) VALUES ('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);

header('location:index.php');
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventdb";

// Create connection
$dbCon = mysqli_connect($servername,$username,$password,"$dbname");
if(!$dbCon){
    die('Could not Connect MySql Server');
}


$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "INSERT INTO `msg`(`name`, `email`, `number`, `subject`, `message`) VALUES ('$name','$email','$number','$subject','$message')";


mysqli_query($dbCon, $query);
$lastId = mysqli_insert_id($dbCon);

if (!empty($lastId)) {
   $message = "Your contact information is saved successfully";
}

header ("Location: thankyou.php");
?> 

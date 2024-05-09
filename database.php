<?php

$servername ="localhost";
$username= "root";
$password="";
$dbname="samrt_dustbin";


$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection failed : ". $conn->connect_error);
}
else{
    echo"connection";
}

if(isset($_POST['name'], $_POST['email'],$_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    echo"hello";
    $insert = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if(mysqli_query($conn, $insert)) {
        echo "Message Sent Successfully";
        header('Location: contact.php'); // Redirect back to contact page
        exit();
    } else {
        echo "Error: " . $insert . "<br>" . mysqli_error($conn);
    }
}


?>
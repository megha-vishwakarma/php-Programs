<?php

require_once 'config.php';
if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    mysqli_query($conn, "insert into contacts(name,email,mobile,message) values ('$name','$email','$mobile','$message')");

    //Start the session if already not started.
    session_start();
    $_SESSION['success_message'] = "Contact form saved successfully.";
    header("Location: index.php");
    exit();
} else {
    echo "Server problem, Try after sometime.";
}
?>
<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $address = $_POST['address'];
     $date = $_POST['edate'];
   // $sql = "INSERT INTO contact (name,email,mobile) VALUES ('$name','$email','$mobile')";

$sql="INSERT INTO `details` (`name`, `email`, `mobile`, `address`, `expDate`) VALUES (' $name', ' $email', ' $mobile', '$address', ' $date');";


     if (mysqli_query($conn, $sql)) {
        echo "alert('Thank you!')";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
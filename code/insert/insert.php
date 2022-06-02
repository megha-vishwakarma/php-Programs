<?php
//database connection
$conn=mysqli_connect("localhost","root","","student");

$name=$_POST['fname']." ".$_POST['lname'];
$div=$_POST['div'];

//$sql="INSERT INTO `list`(`en_no`, `name`, `division`) VALUES ('$name','$div')";
$sql="INSERT INTO `list` (`name`, `division`) VALUES ('$name', '$div');"
$insert=mysqli_query($conn,$sql);
    if(!$insert)
    {   echo "ERROR"}
    else {
        header("Location: code/insert/");
    }
?>
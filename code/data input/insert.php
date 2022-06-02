<?php
//$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
// $db = mysqli_select_db("student", $connection); // Selecting Database from Server

$connection=mysqli_connect("localhost","root","","student");
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
if($name !=''||$email !=''){
//Insert Query of SQL
/*
$query = mysqli_query("insert into students(student_name, student_email, student_contact, student_address) values ('$name', '$email', '$contact', '$address')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
*/


$query =mysqli_query("INSERT INTO `students` (`student_name`, `student_email`, `student_contact`, `student_address`) VALUES ('$name', '$email', '$contact', '$address')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>
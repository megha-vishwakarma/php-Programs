<?php
//connectivity
$con=mysqli_connect("localhost","root","") or die("not connected");
//select database
mysqli_select_db("yoga",$con);

extract($_POST);
if(isset($save))
{
//for date of birt get one by one and concatente
$dob=$yy."-".$mm."--".$dd;
//hobbies retrieve in an array format change array into string 
$h=implode(",",$hobb);
$img=$_FILES['pic']['name'];

//To check user already exists or not
$sql=mysqli_query("select email from studentdetails where email='$e'");
$return=mysqli_num_rows($sql);
//if $return returns true value it means user's email already exists
if($return)
{
$msg="<font color='red'>".ucfirst($e)."already exists choose another email</font>";
}
else
{
$query="insert into studentdetails values('','$n','$e','$p','$m','$g','$h','$dob','$add','$img',now())";
mysqli_query($query);
$msg= "<font color='blue'>Your data saved</font>";
}
}
?>
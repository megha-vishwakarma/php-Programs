<?php   
//https://www.youtube.com/watch?v=mpHoiJIl4bs
 include "connection.php";  
 $msg="";  
 $uname="";  
 $email="";  
 $mnumber="";  
 $address="";  
 $state="";  
 $pin="";  
 if (isset($_GET['id'])) {  
      $id=$_GET['id'];  
      $select=mysqli_query($conn,"select * from datainsert where id='$id'");  
      $data=mysqli_fetch_assoc($select);  
      $uname=$data['name'];  
      $email=$data['email'];  
      $mnumber=$data['mnumber'];  
      $address=$data['address'];  
      $state=$data['state'];  
      $pin=$data['pincode'];  
 }  
 if (isset($_POST['submit'])) {  
      //echo "<pre>";  
      //print_r($_POST);  
      $uname=$_POST['uname'];  
      $email=$_POST['email'];  
      $mnumber=$_POST['mnumber'];  
      $address=$_POST['address'];  
      $state=$_POST['state'];  
      $pin=$_POST['pin'];  
      if (isset($_GET['id'])) {  
           $update=mysqli_query($conn,"UPDATE `datainsert` SET `name`='$uname',`email`='$email',`mnumber`='$mnumber',`address`='$address',`state`='$state',`pincode`='$pin' WHERE id='$id'");  
           if ($update) {  
                header("location:data_show.php");  
                die();  
           }  
      }else{  
           $insert=mysqli_query($conn,"INSERT INTO `datainsert`(`name`, `email`, `mnumber`, `address`, `state`, `pincode`, `create_on`) VALUES ('$uname','$email','$mnumber','$address','$state','$pin', NOW())");  
           if ($insert) {  
                $msg="Data inserted successfully";  
           }else{  
                $msg="Something Error, Try after sometime !";  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>CRUDE Operation in PHP MySQLi</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
                font-family: 'verdana', sans-serif;  
           }  
           body{  
                width: 100%;  
                height: 100vh;  
                display: flex;  
                justify-content: center;  
                align-items: center;  
                background-color: #5d6d7d;  
           }  
           .container{  
                max-width: 500px;  
                width: 100%;  
                background-color: #ffff;  
           }  
           .container form{  
                width: 100%;  
                padding: 30px;  
           }  
           .container form .data-insert{  
                width: 100%;  
                padding: 12px 10px;  
                outline: none;  
                border: 1px solid #111;  
                margin: 8px 0px  
           }  
           .container form .sub_btn{  
                width: 100%;  
                padding: 10px 30px;  
                background-color: red;  
                color: #ffff;  
                font-size: 1em;  
                outline: none;  
                border: 0;  
                cursor: pointer;  
           }  
           .container h1{  
                display: block;  
                text-align: center;  
                padding: 15px 0px;  
           }  
      </style>  
 </head>  
 <body>  
 <div class="container">  
      <h1>Data Insert</h1>  
      <form method="post" action="">  
           <input type="text" name="uname" placeholder="Enter your name" class="data-insert" value="<?php echo $uname; ?>">  
           <input type="email" name="email" placeholder="Enter your email" class="data-insert" value="<?php echo $email; ?>">  
           <input type="text" name="mnumber" placeholder="Mobile Number" class="data-insert" value="<?php echo $mnumber; ?>">  
           <input type="text" name="address" placeholder="Enter your address" class="data-insert" value="<?php echo $address; ?>">  
           <input type="text" name="state" placeholder="Enter your state" class="data-insert" value="<?php echo $state; ?>">  
           <input type="text" name="pin" placeholder="Pin Code" class="data-insert" value="<?php echo $pin; ?>">  
           <input type="submit" name="submit" class="sub_btn" value="Submit">  
           <br>  
           <span><?php echo $msg; ?></span>  
      </form>  
 </div>  
 </body>  
 </html>  
<?php
   $conn=mysqli_connect("localhost","root","","student");
  $count=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert and display data </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- refer - https://www.youtube.com/watch?v=P2CarlO6Qhs -->
<center><h1>list of sudents</h1><br></center>
    <div class="container">
        <div class="table list"></div>
            <table>
                <tr>
                    <th>Enrollment number</th>
                    <th>Name</th>
                    <th>Div</th>
                </tr>
            <?php
                 $sql="SELECT * FROM `list`";
                 $result=mysqli_query($conn,$sql);
                 while($row=mysqli_fetch_assoc($result))
                 {  $count++;
                     echo'<tr>
                     <td>'.$row['en_no'].'</td>
                     <td>'.$row['name'].'</td>
                     <td>'.$row['division'].'</td>
                     </tr>';
                 }
            ?>
                <tr>
                    <td>01</td>
                    <td>xyz</td>
                    <td>A</td>
                </tr>
            </table>
        <div class="table form">
        <table><from action="insert.php" method="POST"> 
        <tr>
                    <th>First name</th>
                    <td><input type="text" placeholder="First name" name="fname"></td></tr>
                    <tr><th>Last Name</th>
                    <td><input type="text" placeholder="Last name" name="lname"></td></tr>
               <tr>     <th>Division</th><td>
               <select>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>   
            </select name="div"></td>
                </tr>

                <tr>
                    <td><button type="submit">Insert</button></td>
                    <td></td>
                </tr>
</form>           
</table>

        </div>
        <div class="table count">
            <div class="count"><?php echo $count; ?> students</div>
        </div>
    </div>
</body>
</html>
<?php
$servername="localhost";
$user="root";
$password="root";
$dbname="school management";
$con=mysqli_connect($servername,$user,$password,$dbname);
$x="sumitphadke2001@gmail.com";
$ss="select * from users where email='$x'";
$result=mysqli_query($con,$ss);
$count=mysqli_num_rows($result);
$xyz="sumitphadke2001@gmail.com";
while($row=mysqli_fetch_assoc($result)){
    echo "id:".$row["id"]."<br>emailid-:".$row["email"]."<br>password:".$row["password"]."<br>";
    if($xyz==$row["email"]){
        echo "login<br>";
    }
}

?>  
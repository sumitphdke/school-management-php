
<!DOCTYPE html>
<html>
    <head>
        <title>
            SCHOOL MANAGEMENT
        </title>
        <link>
    </head> 
    <body>
        <div>
            <div>
                <form method="post">
                    <label>username</label>
                    <input type="email" placeholder="enter your email" name="email">
                    <br><br>
                    <label>password</label>
                    <input type="password" placeholder="enter password" name="password">
                    <br>
                    <input type="submit" name="submit">
                    <input type="reset">
                </form>
            </div>
        </div>
    </body>
</html>
<?php
#connecting to database
$servername="localhost";
$user="root";
$password="root";
$db="school management";
$con=mysqli_connect($servername,$user,$password,$db);

if(!$con){
    die("sorry we failed to connect");
}
else
{
    echo "connection is succesfull<br>";
}

if(isset($_POST['submit']))
{
    $uname=$_POST['email'];
    $passworrd=$_POST['password'];
    $sql="select * from users where email='$_POST[email]' and password='$_POST[password]' ";  
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if($count==1){
        while($row=mysqli_fetch_assoc($result)){
            if($count==1)
            {
                echo "you are logined";
                header("location:DASHBOARD.php");
            }   
            else{
                echo "not working";
            }        
        }
    }
    else
    {
        echo "wrong password";
    }
}
mysqli_close($con);

?>
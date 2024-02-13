
<?php
echo"<pre>";
$servername="localhost";
$username="root";
$password="root";
$dbname="userinformation";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("connection fail");
}

$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO `userlogin` (`id`,`email`,`password`)VALUES(NULL,'$email','$password')";
if($conn->query($sql)==true)
{
    echo"new record added";
}
else{
    echo"error";
}
$conn->close();
?>

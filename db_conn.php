
<?php
echo"<pre>";
$servername="localhost";
$username="root";
$password="root";
$dbname="userregistrationdatabase";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("connection fail");
}

$email=$_POST['email'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$surname =$_POST['surname'];
$mobile_number =$_POST['mobile_number'];
$new_password =$_POST['new_password'];
$date_of_birth=$_POST['date_of_birth'];
$sql="INSERT INTO `userdata` (`id`,`email`,`password`,`firstname`,`surname`,`mobile_number`,`new_password`,`date_of_birth`)VALUES(NULL,'$email','$password','$firstname','$surname','$mobile_number','$new_password','$date_of_birth')";
if($conn->query($sql)==true)
{
    echo"new record added";
}
else{
    echo"error";
}
$conn->close();
?>

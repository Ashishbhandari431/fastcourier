<?php
$con=mysqli_connect("localhost","root");
if($con){
    echo"Connection Successful";
}
else{
    echo"No Connection";
}
mysqli_select_db($con,"fastbtm");

$user=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$password=$_POST['password'];
$about=$_POST['about'];

$query= "INSERT INTO signup (name,email,address,password,about)
values ('$user','$email','$address','$password','$about')";


mysqli_query($con,$query);

header('location:index.php')

?>
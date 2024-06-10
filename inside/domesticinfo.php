<?php
$con=mysqli_connect("localhost","root");
if($con){
    echo"Connection Successful";
}
else{
    echo"No Connection";
}
mysqli_select_db($con,"fastbtm");

$Sname=$_POST['Sname'];
$Snumber=$_POST['Snumber'];
$Saddress1=$_POST['Saddress'];
$Saddress2=$_POST['Saddress1'];
$Saddress="$Saddress1,$Saddress2";
$pactype=$_POST['pactype'];
$pieces=$_POST['pieces'];
$weight=$_POST['weight'];
$date=$_POST['date'];
$Rname=$_POST['Rname'];
$Rnumber=$_POST['Rnumber'];
$Raddress=$_POST['Raddress'];
$Raddress1=$_POST['Raddress1'];
$price=$_POST['price'];
$address="$Raddress,$Raddress1";

$query= "INSERT INTO domesticinfo (Sname,Snumber,Saddress,pactype,pieces,Rname,Rnumber,Raddress,date,weight,price)
values ('$Sname','$Snumber','$Saddress','$pactype','$pieces','$Rname','$Rnumber','$address','$date','$weight','$price')";


mysqli_query($con,$query);
header('location:dashboard.php')

?>
<?php
include 'db.php';

$name=$_POST['name'];
$email=$_POST['email'];

$q="select * from register where NAME='$name' && EMAIL='$email'";
$query=mysqli_query($con,$q);
$row=mysqli_num_rows($query);
if($row==1){

    echo 'user alredy registered';
}
else{

    $i="INSERT into register(NAME,EMAIL) values('$name','$email')";
    $w=mysqli_query($con,$i);

    echo "registred";



 }


?>
<?php
include 'db.php';
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$k="select * from register where ID='$id'";
$o=mysqli_query($con,$k);
$p=mysqli_fetch_assoc($o);

if($p['NAME']==$name && $p['EMAIL']==$email){

    echo '2';
}
else{


$q="update register set NAME='$name',EMAIL='$email' where ID='$id' ";
$query=mysqli_query($con,$q);
echo 'User updated successfully';

}
?>
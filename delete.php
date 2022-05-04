<?php
include 'db.php';
$did=$_POST['did'];
$q="delete from register where ID='$did'";
$m=mysqli_query($con,$q);
// echo 'user deleted';

?>




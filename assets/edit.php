<?php
include 'db.php';
$eid=$_POST['eid'];
$q="select * from register where ID='$eid'";
$m=mysqli_query($con,$q);
$j=mysqli_fetch_assoc($m);

$data['id']=$j['ID'];

$data['name']=$j['NAME'];
$data['email']=$j['EMAIL'];

echo json_encode($data);


// echo 'user deleted';

?>


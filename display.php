<?php
include 'db.php';
$display=$_POST['display'];
$q="select * from register";
$m=mysqli_query($con,$q);
$tbody="";
$sid=1;
while($row=mysqli_fetch_assoc($m)){
    $id=$row['ID'];
    $name=$row['NAME'];
    $email=$row['EMAIL'];
    $tbody.='<tr>
    <th>'.$sid.'</th>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td><button  onClick="Edit('.$id.')" class="btn btn-small btn-success btn-success"> EDIT</button></td>
    <td><button onClick="Delete('.$id.')" class="btn btn-small btn-danger btn" >DELETE</button></td>
    </tr>';
    $sid++;

}
echo $tbody;











?>
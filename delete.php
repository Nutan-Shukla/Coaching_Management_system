<?php
$con =mysqli_connect('localhost','root','','coaching');
if(!$con){
  echo 'Unable to connect to the server ';
}
else{
 $id = trim($_GET['userid']);
 $del = "DELETE from srequest where userid ='$id'";
 
 $quer = mysqli_query($con,$del);
 
   header('location:request.php');
   exit();
}

?>
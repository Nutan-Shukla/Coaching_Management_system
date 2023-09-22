<?php
$con =mysqli_connect('localhost','root','','coaching');
if(!$con){
  echo 'Unable to connect to the server ';
}
else{
 $id = trim($_GET['Tid']);
 $del = "DELETE from trequest where Tid ='$id'";
 
 $quer = mysqli_query($con,$del);
 
   header('location:request.php');
}

?>
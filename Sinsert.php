<?php
 $con =mysqli_connect('localhost','root','','coaching');
 if(!$con){
   echo 'Unable to connect to the server ';
 }
 else{ 
  $userid=trim($_GET['userid']);
 $ins ="INSERT INTO student (Sid,Sname,Gender,S_DOB,phone_no)
  SELECT userid,sname,gender,dob,phone_no FROM srequest where userid = '$userid' ";
      
   $query = mysqli_query($con,$ins); 

   $log ="INSERT INTO stlogin (userid,password)
   SELECT userid,password FROM srequest where userid = '$userid' ";

   $quer  = mysqli_query($con,$log) ;
  
   ?>
   <script>alert("inserted");
     </script>
 <?php 
     include('delete.php');  
     include('request.php');
 }
?>
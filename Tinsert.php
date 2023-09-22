<?php
 $con =mysqli_connect('localhost','root','','coaching');
 if(!$con){
   echo 'Unable to connect to the server ';
 }
 else{ 
  $userid=trim($_GET['Tid']);
 $ins ="INSERT INTO professor (Tid,Tname,Gender,DOB,phone_no,QFT,no_of_course)
  SELECT Tid,Tname,Gender,DOB,phone_no,QFT,no_of_course FROM trequest where Tid = '$userid' ";
      
   $query = mysqli_query($con,$ins); 

   $log ="INSERT INTO tlogin (userid,password)
   SELECT Tid,password FROM trequest where Tid = '$userid' ";

   $quer  = mysqli_query($con,$log) ;
  
   ?>
   <script>alert("inserted");
     </script>
 <?php 
     include('Tdelete.php');  
     include('request.php');
 }
?>
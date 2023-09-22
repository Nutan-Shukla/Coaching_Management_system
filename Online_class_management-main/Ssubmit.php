<?php

if(isset($_POST['submit'])=='Sign Up'  ){ 
      if( $_POST['password1']==$_POST['password2']){
          
      
 // echo'Your form is submitted for the verfication' ;
  $con =mysqli_connect('localhost','root','','coaching');
  if(!$con){
    echo 'Unable to connect to the server ';
  }
  else{
    $Sid=$_POST['S_ID'] ;
    $Sname=$_POST['name'] ;
    $Dob=$_POST['DOB'] ;
    $phoneno=$_POST['phone'] ;
    $gender=$_POST['gender'] ;
    $password=$_POST['password1'] ;
    
     $q = "INSERT INTO srequest values('$Sid','$Sname','$Dob','$gender','$phoneno','$password')" ;
    
     $query = mysqli_query($con,$q);  
  
      ?>
        <script>alert("Your form is submitted for the verfication");
      </script>
      <?php
     include('Log_in.html'); 
   // header('location:Log_in.html');
  }
 
}
else{
  //echo " Password and confirm Password are not same";
  ?>
  <script>alert("Passwords are not matching")</script>
  <?php
 
}
}
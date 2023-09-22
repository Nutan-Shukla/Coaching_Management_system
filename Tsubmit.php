<?php

if(isset($_POST['submit'])=='Sign Up'  ){ 
      if( $_POST['password1']==$_POST['password2']){
          
      
 // echo'Your form is submitted for the verfication' ;
 
  $con =mysqli_connect('localhost','root','','coaching');
  if(!$con){
    echo 'Unable to connect to the server ';
  }
  else{
    $Tid=$_POST['ID'] ;
    $Tname=$_POST['name'] ;
    $Dob=$_POST['dob'] ;
    $gender=$_POST['gender'] ;
    $phoneno=$_POST['phone'] ;
    $qft=$_POST['QFT'] ;
    $noc=$_POST['noc'] ;
    $password=$_POST['password1'] ;
    
     $q = "INSERT INTO Trequest values('$Tid','$Tname','$Dob','$gender','$phoneno','$qft','$noc','$password')" ;
    
     $query = mysqli_query($con,$q);
  
      ?>
        <script>alert("Your form is submitted for the verfication");
      </script>
      <?php
    
     include('Log_in.html'); 
  }
 
}
else{
  echo " Password and confirm Password are not same";
}
}



?>
<?php
 session_start();

?>
<?php

require("Connection.php");
?>

<?php

if(isset($_POST['login']))
{
      
     $as=$_POST['user_type'];
       $pass=$_POST['password'];
       $username=$_POST['Userid'];

       
       


       
    
     switch($as){
       
       case "Student" : 
        
        $query1 = " SELECT * FROM stlogin WHERE userid = '$username'  And  password = '$pass' ";
      
          
          
          
          $result1=mysqli_query($con,$query1);
          if(mysqli_num_rows($result1)==1)
          {  
            
             $query4="SELECT Sname,Sid FROM student WHERE Sid = '$username' "  ;  
             $result4=mysqli_query($con,$query4);

            while($row= mysqli_fetch_assoc($result4) )
            {
            $_SESSION['User'] = $row["Sname"];
            $_SESSION['Userids'] = $row["Sid"];

            header("location: student_interface.php");
            }
           }
           else{
         //   header("location:Log_in.html");
            include('Log_in.html'); 
            echo "<script>alert('Incorrect Userid or Password ')</script>";
            exit(); 
           }
          
                break;
                
        
      case "Proffessor" :  
         $query2="SELECT * FROM tlogin WHERE userid =  '$username'  And  password = '$pass'  ";
         

      $result2=mysqli_query($con,$query2);
      if(mysqli_num_rows($result2)==1)
      {
         $query5="SELECT Tname FROM professor WHERE Tid = '$username' "  ;  
         $result5=mysqli_query($con,$query5);

        while($row1= mysqli_fetch_assoc($result5) )
        {
        $_SESSION['User'] = $row1["Tname"];
        header("location: Teacher_Dashboard.php");
        }
      }
      else{
        include('Log_in.html'); 
        echo "<script>alert('Incorrect Userid or Password ')</script>";
        exit(); 
       }

      break;
      case "Admin" :    $query3="SELECT * FROM admin WHERE userid =  '$username'  And  password = '$pass'  ";

  

      $result3=mysqli_query($con,$query3);
      if(mysqli_num_rows($result3)==1)
      {
       
       header("location: Admin_Interface.php");
       
        
      }
      else{
        include('Log_in.html'); 
        echo "<script>alert('Incorrect Userid or Password ')</script>";
        exit(); 
       }

      break;
    default:
    include('Log_in.html'); 
      echo "<script>alert('Invalid user type ')</script>";
      
      
      
  
      
       }
  }

?>
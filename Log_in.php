<?php
 session_start();

?>
<?php

require("Connection.php");
?>

<?php

if(isset($_POST['Login']))
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
             $query4="SELECT Sname FROM student WHERE Sid = '$username' "  ;  
             $result4=mysqli_query($con,$query4);

            while($row= mysqli_fetch_assoc($result4) )
            {
            $_SESSION['User'] = $row["Sname"];
            header("location: student_interface.php");
            }
           }
           else{
            echo "<script>alert('Incorrect Userid or Password ')</script>";
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
        echo "<script>alert('Incorrect Userid or Password ')</script>";
      }

      break;
      case "Admin" :    $query3="SELECT * FROM admin WHERE userid =  '$username'  And  password = '$pass'  ";

  

      $result3=mysqli_query($con,$query3);
      if(mysqli_num_rows($result3)==1)
      {
       
       header("location: Admin_Interface.php");
       
        
      }
      else{ 
        echo "<script>alert('Incorrect Userid or Password ')</script>";
      }

      break;
    default:
      
      
      
  
      
       }
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
     <link rel="stylesheet" href="style.css">
 <style>
 body{
    margin: 0%;
    background-image:url("IIITDMJ_photo.jpg");
    background-size:123%;
    background-repeat: no-repeat;

    
    backdrop-filter: blur(1.5px);
    }
header
{
    color: rgb(135 9 157 / 63%);
    font-family: 'Irish Grover', cursive;
    font-size: 30px;
    text-align: center;
    padding:100px;
}
.container {
  padding: 20px 50px 20px 50px;
  background-color: rgba(207, 229, 236, 0.808);
  border-radius: 8px;
  border: 1px solid rgba(113, 113, 148, 0.582);
  width: 400px;
  text-align: center;
  margin-top:-20px;
  margin-left: 32%;
  border:0px;
 
   
}

input[type="text"],input[type="password"]
{
  width: 100%;
  height: 20px;
  padding: 10px;
  border: 1px solid rgb(214, 246, 245);
  border-radius: 4px;
  background-color: rgb(250, 250, 250);
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  margin-top:15px;
  text-align: center;
  font-size: 18px;
  border-radius: 10px;
  

} 
input[type="password"]{
    width: 100%;
  height: 20px;
  padding: 10px;
  border: 1px solid rgb(214, 246, 245);
  border-radius: 4px;
  background-color: rgb(250, 250, 250);
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  margin-bottom:10px;
  text-align: center;
  font-size: 18px;
  border-radius: 10px;
}
button[type="Summit"]{
    background-color: rgb(73, 192, 228);
    border:  none;
    padding:10px 20% 10px 20%;
    border-radius: 4px;
    font-size: 17px;
    
    color: rgb(87, 87, 87);
}
button[type="Summit"]:hover{
    cursor: pointer;
    background-color: rgba(10, 198, 255, 0.657);
}
select{
    width:50%;
    border: 0px;
    border-radius: 5px;
    margin-top:10px;
    
}
a{
  text-decoration: none;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    color:blueviolet;
}
a:hover{
  color:rgb(86, 43, 226);
}
input[type="text"]:hover,
input[type="password"]:hover,
select:hover
 {
  border-color: blueviolet;
}
footer{
  background-color: rgba(10, 198, 255, 0.657);
  padding: 11px;
}
    </style>
</head>
<body > 
    <header>
  <h1>IIITDMJ Class Management</h1>
    </header>
  <div class="container">
    <form method="POST"> 
        
        <Select name="user_type"> 
            <option value="#"> ---User---</option>
            <option value="Admin">Admin</option>
            <option value="Proffessor">Proffessor</option>
            <option value="Student">Student</option>
            
        </Select>
     
        <br>
     
     <input type="text" name="Userid" placeholder="Enter your User ID" > <br><br>
   <input type="password" name="password" placeholder="Enter your Password" > <br><br>
   <button  type="Submit" name="Login" >Login</button>
          <p style="color: rgb(95, 95, 95);"> Create new account ? <a href="button.html">Sign up now</a></p>
         </form>
        </div>
        <footer style="margin-top: 9%;">
          
            <marquee style="color:rgb(102, 102, 102);font-family:Arial, Helvetica, sans-serif;font-weight:600;">Welcome to IIITDMJ Class Management Portal | copyright&copy;2021</marquee>
         
        </footer>

       
</body>

</html>
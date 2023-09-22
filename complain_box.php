
<?php

session_start();
if(!isset($_SESSION['Userids']))
{
    header("location: Log_in.html");
    exit();
}
?>

<?php
if(isset($_POST['sub']))
{    
    require("Connection.php");
    $user = $_SESSION['Userids'] ;
   
    $com = $_POST['comp'];
   
    $ins = "INSERT INTO complain(complain_id,complain_detail) VALUES('$user','$com')";

    $quer  = mysqli_query($con,$ins) ;
    echo "<script>alert('complain is submitted ')</script>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candrive | Complain Box</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/apple-touch-icon.png">
<link rel="manifest" href="favicon_io/apple-touch-icon.png">
    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }
        body{
            padding-top: 10%;
            background-image: url(complain.webp);
            backdrop-filter: blur(5px);
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1 {
  text-align: center;
  color: rgb(124, 131, 138);
  font-family: sans-serif;
  padding: 10px;
  color: rgb(0, 17, 255);
}
.container{
    width: 50%;
    margin-left: 25%;
    
    padding:20px;
    border:0px;
    background-color: rgba(223, 238, 255, 0.815);
    border-radius: 20px;
}
textarea{
    width: 80%;
  padding: 20px;
  border: 0px ;
  border-radius: 4px;
  background-color: rgb(254, 249, 255);
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  margin: 7px;
  
}
textarea:hover{
    border:1px solid rgb(198, 130, 238);
}

input[type="submit"] {
  background-color: rgb(0, 81, 255);
  width: 200px;
  height: 40px;
  border-radius: 5px;
  cursor: pointer;
  border: none;
  color: linen;
}     
input[type="submit"]:hover{
background-color: rgba(0, 53, 199, 0.637);
}
    </style>
</head>
<body>
    <div class="container" style="text-align: center;">

        <form action="" method = "post">
            <h1>Complain Box</h1>
            
            <div>
        <textarea name="comp" id="complain" cols="90" rows="20" placeholder="Write your Complains (Your privacy is a guarantee)" required></textarea>
    </div>
    <div>
    <input type="submit" name ="sub" value="Submit">
</div>
</div>
</form>
</body>
</html>
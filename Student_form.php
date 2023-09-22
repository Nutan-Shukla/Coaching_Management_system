

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Sign Up Form</title>
    <script src="valide.js" type="text/javascript"></script>
    <style>
        * {
  box-sizing: border-box;
}
body {
  background-image: url(Student.jpg);

  background-repeat: no-repeat;
  background-attachment: fixed;

  background-blend-mode: soft-light;
  background-size: 100%;
  margin: 90px 300px 40px 300px;
  font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
    "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
  font-size: 18px;
  background-color: rgba(238, 238, 238, 0.692);
}
.container {
  padding: 20px 50px 20px 50px;
  background-color: rgba(207, 229, 236, 0.836);
  border-radius: 8px;
  border: 1px solid rgba(113, 113, 148, 0.582);
}
h1 {
  text-align: center;
  color: rgb(124, 131, 138);
}
h2 {
  color: lightslategrey;
}
t {
  font-size: small;
}
input[type="text"],
input[type="number"] {
  width: 100%;
  padding: 10px;
  padding-left: 20px;
  border: 1px solid rgb(214, 246, 245);
  border-radius: 4px;
  background-color: rgb(250, 250, 250);
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  margin: 7px;
  /* text-align: center; */
}

input[type="password"],
input[type="date"] {
  padding: 10px;
  border: 1px solid rgb(214, 246, 245);
  border-radius: 4px;
  background-color: rgb(250, 250, 250);

}
fieldset {
  border: 1px solid rgb(214, 246, 245);
  background-color: rgb(250, 250, 250);
  border-radius: 4px;
  padding: 10px;
  text-indent: 5px;
  height: 55px;
  width: 100%;
}
.S_ID>input[type="text"]{
    width: 50%;
    text-align: center;
    padding-left: 12px;
    margin-left: 10%;
}
.password>input[type="password"]{

    /* text-align: center; */
    margin-left: 4%;
    width: 50%;
    margin-bottom: 20px;
    height: 40px;
    padding-left:16%;

}
.Sign_Up {
  /* width:60px;
    height:30px; */
  text-align: center;
}
input[type="submit"] {
  background-color: rgb(61, 196, 214);
  width: 200px;
  height: 40px;
  border-radius: 5px;
  cursor: pointer;
  border: none;
  color: linen;
}
input[type="submit"]:hover {
  background-color: rgb(18, 179, 200);
}
.reset {
  text-align: right;
}
input[type="reset"] {
  background-color: rgba(87, 69, 119, 0.979);
  width: 80px;
  height: 29px;
  border-radius: 5px;
  cursor: pointer;
  border: none;
  color: rgb(255, 255, 255);
  
}
input[type="reset"]:hover {
  background-color: rgba(92, 90, 190, 0.979);
}
input[type="text"]:hover,
input[type="number"]:hover,
input[type="password"]:hover,
input[type="date"]:hover,
fieldset:hover {
  border-color: aqua;
}
    </style>
</head>
<body>
    <div class="container">
    <form action="Ssubmit.php" method="POST" onsubmit=" return validate()" autocomplete="on">
    <h1>Student Sign Up Form</h1>
    <hr >
  
    <p>
        &nbsp;&nbsp;Name <input type="text" name="name" placeholder="Enter your name" required>
    </p>
   
        <p>
            <fieldset><legend>Gender</legend>
        <input type="radio" name="gender" value="M"required> <t>Male</t>
            <input type="radio" name="gender" value="F"required><t>Female</t>
        </fieldset></p>



   <p>
    &nbsp;&nbsp;Phone No. <input type="number" name="phone"  placeholder="0123456789"required>
   </p>
   <p>
    &nbsp;&nbsp;Date of Birth: <input type="date" name="DOB" id="DOB"required> 
   </p>
 <hr>
 <p class="S_ID">
   Student Id <input type="text"  name="S_ID" placeholder="Enter your S_Id" required>
 </p>

 <p class="password">
     New Password &nbsp;<input type="password" name="password1" placeholder="Enter a New Password" required>
     <br>
    Password Again<input type="password" name="password2" placeholder="Re-enter the Password"  required>
 </p>

   <div class="reset"><input type="reset" value="Reset Form"></div>
   <hr>
 <div class="Sign_Up"><input type="submit" name='submit' value="Sign Up"></div>
 
    </form>
</div>

</body>
</html>
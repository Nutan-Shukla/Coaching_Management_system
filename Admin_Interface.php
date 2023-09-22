<?php
/*
session_start();
if(!isset($_SESSION['User']))
{
    header("location: Log_in.html");
    exit();
}*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Candrive | Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap"
      rel="stylesheet"
    />

   
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="admin.css" />
  </head>
  <body>
    <header>
      <h1>Admin Section</h1>
    </header>
    <nav>
      <a class="home" href="#">Home</a>
      <a href="S_list.php">Student</a>
      <a href="T_list.php">Teacher</a>
      <a href="request.php">Requests</a>
      <a href="com_view.php">Complains</a>
      <a href=""><span class="icon"
        ><ion-icon name="person-circle-outline"></ion-icon></span>
      <span class="title">Nitin Triphati</span></a>
      <a href="Log_in.html" onclick="return confirm('Are you sure , you want to Log Out?')">
        <ion-icon name="log-out-outline"></ion-icon></a>
        
    </nav>
    
    
      <div class="container">
      <h2>Course Details</h2>
      <div class="courses_boxes">
        <div class="box" id="course1">
          <div class="box1">
            <p>Course ID : CS2003</p>
            <h3>DBMS</h3>
          </div>
          <div class="box2">
            <div class="faculty_profile">
              <a
                href="http://cse.iiitdmj.ac.in/faculty_page.php?id=pkhanna@iiitdmj.ac.in"
                target="blank"
                ><input type="submit" value="Faculty : Pritee Khanna."/></a>
            </div>
            <p style="padding-top: 20px;"> Course Last 5 Year Average Performance : 60%</p>
            <p>Course Performance this year : 80%</p>
            <div class="drop">
              <a href="#" onclick="return confirm('The request will be made to College Administration,are you sure?')">
                <input type="submit" value="Initiate Drop-Course" />
              </a>
            </div>
          </div>
        </div>

        <div class="box" id="course2">
          <div class="box1">
            <p>Course ID : CS2002</p>
            <h3>COA</h3>
          </div>
          <div class="box2">
            <div class="faculty_profile">
              <a
                href="http://faculty.iiitdmj.ac.in/faculty/mkbajpai"
                target="blank"
                ><input type="submit" value="Faculty : Manish Bajpai."/></a>
            </div>
            <p style="padding-top: 20px;"> Course Last 5 Year Average Performance : 60%</p>
            <p>Course Performance this year : 80%</p>
            <div class="drop">
              <a href="#" onclick="return confirm('The request will be made to College Administration,are you sure?')">
                <input type="submit" value="Initiate Drop-Course" />
              </a>
            </div>
          </div>
        </div>
        
          <div class="box" id="course3">
          <div class="box1">
            <p>Course ID : CS2004</p>
            <h3 style="font-size: 70px;">Data Science</h3>
          </div>
          <div class="box2">
            <div class="faculty_profile">
              <a
                href="http://faculty.iiitdmj.ac.in/faculty/ayan"
                target="blank"
                ><input type="submit" value="Faculty : Ayan Seal."/></a>
            </div>
            <p style="padding-top: 20px;"> Course Last 5 Year Average Performance : 60%</p>
            <p>Course Performance this year : 80%</p>
            <div class="drop">
              <a href="#" onclick="return confirm('The request will be made to College Administration,are you sure?')">
              <input type="submit" value="Initiate Drop-Course" />
            </a>
            </div>
          </div>
        </div>
        </div>

        <div class="box" id="course4">
          <div class="box1">
            <p>Course ID : IT2001</p>
            <h3 style="font-size: 70px;">Data Structure</h3>
          </div>
          <div class="box2">
            <div class="faculty_profile">
              <a
                href="http://faculty.iiitdmj.ac.in/faculty/sraban"
                target="blank"
                ><input type="submit" value="Faculty : Sraban Ku.Mohanty."/></a>
            </div>
            <p style="padding-top: 20px;"> Course Last 5 Year Average Performance : 60%</p>
            <p>Course Performance this year : 80%</p>
            <div class="drop">
              <a href="#" onclick="return confirm('The request will be made to College Administration,are you sure?')">
                <input type="submit" value="Initiate Drop-Course" />
              </a>
            </div>
          </div>
        </div>
        </div>
        <div class="box" id="course5">
          <div class="box1">
            <p>Course ID : NS2001</p>
            <h3 style="font-size: 80px;">Biology</h3>
          </div>
          <div class="box2">
            <div class="faculty_profile">
              <a
                href="https://iitgn.ac.in/faculty/chemistry/fac-sriram"
                target="blank"
                ><input type="submit" value="Faculty : Sriram Kanvah."/></a>
            </div>
            <p style="padding-top: 20px;"> Course Last 5 Year Average Performance : 60%</p>
            <p>Course Performance this year : 80%</p>
            <div class="drop">
              <a href="#" onclick="return confirm('The request will be made to College Administration,are you sure?')">
                <input type="submit" value="Initiate Drop-Course" />
              </a>
            </div>
          </div>
        </div>
        </div>
        <div class="box" id="course6">
          <div class="box1">
            <p>Course ID : IT2C01</p>
            <h3> JAVA</h3>
          </div>
          <div class="box2">
            <div class="faculty_profile">
              <a
                href="http://faculty.iiitdmj.ac.in/faculty/ayan"
                target="blank"
                ><input type="submit" value="Faculty : Ayan Seal."/></a>
            </div>
            <p style="padding-top: 20px;"> Course Last 5 Year Average Performance : 60%</p>
            <p>Course Performance this year : 80%</p>
            <div class="drop">
              <a href="#" onclick="return confirm('The request will be made to College Administration,are you sure?')">
                <input type="submit" value="Initiate Drop-Course" />
              </a>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    
    <footer>
      <a href="https://www.iiitdmj.ac.in" target="blank">COLLEGE WEBSITE</a>
    </footer>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>

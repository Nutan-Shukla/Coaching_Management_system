<?php

session_start();
if(!isset($_SESSION['User']))
{
    header("location: Log_in.html");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Candrive | Home</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/apple-touch-icon.png">
<link rel="manifest" href="favicon_io/apple-touch-icon.png">
    <link rel="stylesheet" href="student_style.css" />
  </head>
  <body>
    <div class="container">
      <div class="navigation">
        <ul>
          <li style="font-size: 30px; color: rgb(16, 13, 19);">
            <a href="https://www.iiitdmj.ac.in" target="blank">
              <span class="icon"><ion-icon name="school"></ion-icon></span>
              <span class="title">&nbsp;Candrive</span>
            </a>
          </li>
          <li class="home">
            <a href="#">
              <span class="icon"
                ><ion-icon name="home-outline"></ion-icon
              ></span>
              <span class="title">Home</span>
            </a>
          </li>
          <li>
            <a href="Timetable.pdf" target="blank">
              <span class="icon"
                ><ion-icon name="calendar-number-outline"></ion-icon
              ></span>
              <span class="title">Time Table</span>
            </a>
          </li>
          <li>
            <a href="study_dashboard.html">
              <span class="icon"
                ><ion-icon name="cloud-done-outline"></ion-icon
              ></span>
              <span class="title">Study Materials</span>
            </a>
          </li>
          <li>
            <a href="complain_box.php" >
              <span class="icon"
                ><ion-icon name="alert-circle-outline"></ion-icon
              ></span>
              <span class="title">Have a Complain</span>
            </a>
          </li>
          <li class="Name" style="margin-top: 90%">
            <a href="#">
              <span class="icon"
                ><ion-icon name="person-circle-outline"></ion-icon
              ></span>
              <span class="title"><?php echo $_SESSION['User']?></span>
            </a>
          </li>
          <li class="logout" style="margin-top: -10%">
            <a
              href="Log_out.php"
              onclick="return confirm('Are you sure , you want to Log Out?')"
            >
              <span class="icon"
                ><ion-icon name="log-out-outline"></ion-icon
              ></span>
              <span class="title">Log Out</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="main">
        <div class="content">
          <h2>Courses</h2>
          <br />
          <div class="boxes">
            <div
              class="box"
              id="box_1"
              style="background-color: rgb(255, 217, 4)"
            >
              <h4
                style="
                  background-color: rgb(112, 29, 189);
                  color: rgb(214, 213, 255);
                "
              >
                DBMS
              </h4>
              <p class="performance">Performance: A</p>
              <p class="faculty">Faculty : Pritee Khanna.</p>
            </div>
            <div
              class="box"
              id="box_2"
              style="background-color: rgb(220, 177, 255)"
            >
              <h4 style="background-color: indigo">COA</h4>
              <p class="performance">Performance: A</p>
              <p class="faculty">Faculty : Manish Bhajpai.</p>
            </div>
            <div
              class="box"
              id="box_3"
              style="background-color: rgb(191, 252, 255)"
            >
              <h4
                style="
                  background-color: rgb(0, 0, 189);
                  color: rgb(235, 254, 255);
                "
              >
                Data Science
              </h4>
              <p class="performance">Performance: A</p>
              <p class="faculty">Faculty : Ayan Seal.</p>
            </div>
            <div
              class="box"
              id="box_4"
              style="background-color: rgb(172, 221, 132)"
            >
              <h4
                style="
                  background-color: rgb(0, 185, 0);
                  color: rgb(236, 255, 220);
                "
              >
                Data Structure & Algo
              </h4>
              <p class="performance">Performance: A</p>
              <p class="faculty">Faculty : Anonymous.</p>
            </div>
            <div
              class="box"
              id="box_5"
              style="background-color: rgb(255, 225, 169);"
            >
              <h4
                style="
                  background-color: rgb(207, 207, 0);
                  color: rgb(78, 78, 0);
                "
              >
                Biology
              </h4>
              <p class="performance">Performance: A</p>
              <p class="faculty">Faculty : Sriram Kanvah.</p>
            </div>
            <div
              class="box"
              id="box_6"
              style="background-color: rgb(255, 204, 137)"
            >
              <h4 style="background-color: rgb(223, 99, 55)">JAVA</h4>
              <p class="performance">Performance: A</p>
              <p class="faculty">Faculty : Ayan Seal.</p>
            </div>
          </div>
          <div>
            <h2 style="color: rgb(181, 7, 216);background-color: rgba(248, 211, 255, 0.712);">Faculties</h2>
          <div class="dabbas">
               <div class="facbox" id="box1">
                 <img src="PriteeKhanna.jpg" alt="" width="60%">
                 <div>
                   <p >Pritee Khanna<br>Course : DBMS</p>
                   
                   <div>
                   <form action="http://cse.iiitdmj.ac.in/faculty_page.php?id=pkhanna@iiitdmj.ac.in" target="blank">
                     <input type="submit" value="About your Teacher">
                   </form>
                  </div>
                 </div>
               </div>
               <div class="facbox" id="box2"><img src="ManishBhajpai.jpg" alt="" width="60%">
                <div>
                  <p >Manish Kumar Bhajpai<br>Course : COA</p>
                  
                  <div>
                  <form action="http://faculty.iiitdmj.ac.in/faculty/mkbajpai" target="blank">
                    <input type="submit" value="About your Teacher">
                  </form>
                 </div>
                </div></div>
               <div class="facbox" id="box3"> <img src="SrabanKumarMohanty.jpg" alt="" width="60%">
                <div>
                  <p >Sraban Kumar Mohanty<br>Course : Data Structure & Algo</p>
                  
                  <div>
                  <form action="http://faculty.iiitdmj.ac.in/faculty/sraban" target="blank">
                    <input type="submit" value="About your Teacher">
                  </form>
                 </div>
                </div></div>
               <div class="facbox" id="box4"><img src="AyanSeal.jpg" alt="" width="60%">
                <div>
                  <p >Ayan Seal<br>Course : Data Science + Java</p>
                  
                  <div>
                  <form action="http://faculty.iiitdmj.ac.in/faculty/ayan" target="blank">
                    <input type="submit" value="About your Teacher">
                  </form>
                 </div>
                </div></div>
               <div class="facbox" id="box5"><img src="sriram.jpg" alt="" width="60%"height="50%">
                <div>
                  <p >Sriram Kanvah<br>Course : Biology</p>
                  
                  <div>
                  <form action="https://iitgn.ac.in/faculty/chemistry/fac-sriram" target="blank">
                    <input type="submit" value="About your Teacher">
                  </form>
                 </div>
                </div></div>
               </div>

          </div>
        </div>
          
          <footer >
            <div class="website" style="word-spacing: 5px;letter-spacing: 2px;font-size: 20px;text-transform: uppercase;font-weight: 700;font-family: 'Times New Roman', Times, serif;">
              <a href="https://www.iiitdmj.ac.in" target="blank">Our Website</a> </div>
              <br>
              <div class="handle" style="font-family:sans-serif;letter-spacing: 1px;" >
                <a href="https://twitter.com/iiitdmjbp" target="blank">&nbsp;&nbsp;Twitter&nbsp;&nbsp;</a>
                <a href="https://www.facebook.com/iiitdm.jbp/" target="blank"><i class="fa fa-facebook"></i>Facebook</a>
                <a href="https://www.instagram.com/iiitdm_jabalpur/" target="blank">&nbsp;Instagram&nbsp;</a>
                <a href="https://www.youtube.com/channel/UCODKL--xMCqXIK31cRdOWOw" target="blank">&nbsp;Youtube&nbsp;</a>
              </div>
            
          </footer>
        </div>
      </div>
    </div>
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

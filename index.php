<?php  
include('connection.php');
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPC-Alva's</title>
</head>
<style>
      *{margin:0px;
        padding:0px; }

    body{   background-image: url("alvass.png");
            background-size: cover;  
            
             }

              .nav ul { list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    background-color:	#A2B5CD;                }

.nav li {   float: left;   }

.nav li a {  display: block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;    }

.nav li a:hover:not(.active) {      background-color: #B7C4D4; }

      .heading{     width:100%;
                    display:inline;
                    justify-content: center;
                    align-items: center;            }

             .h{  margin-top: 0px;
                height: 100px;
                width:100%;
                display:flex;
                justify-content: center;
                align-items: center;
                font-size:40px;
                font-weight:bold;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;   
                animation: movedown 1s linear 1; 
                animation-delay: 1s; 
                animation-fill-mode:forward;
              }
  @keyframes movedown {
  0%{
    transform: translatey(-100px);
    visibility:hidden;

  }
  100%{
    transform: translatey(0);
    visibility:hidden;
  }
}

        .h2{  font-size: 30px;
          
              display:flex;
              width:100%;
              height: 50px;
              justify-content: center;
              align-items: center;
              font-weight:bold; 
              }
img{
      height:100px;
      
      width:100px;
       }

.address{
  font-size:15px;
  display: flex;
  width: 100%;
  height: 30px;
  justify-content: center;
  align-items: center;
}
.sp{
  color: #3D5B43 ;
  margin:2px;
}

.links{
  display:flex;
  justify-content:space-between;
  width:100%;
  height:200px;
  align-items: center;
  margin-top:50px;
}
.csc{
  width:30%;
  justify-content: center;
  display:flex;
  font-size: 30px;
  height:100%;
  align-items:center;
  font-weight:bold;
  margin:30px;
}
.csc a{
  text-decoration: none;
 height:50%;
  background-color:#A2B5CD;
  color:white;
  width:100%;
  display:flex;
  justify-content:center;
  align-items:center;
  transition: 0.4s;
}
.csc a:hover {background-color:#B7C4D4}
.link1{
  background-image: url("colll.jpg");
  background-size: cover;
}
.link2{
  background-image: url("std.jpg");
  background-size: cover;
}
.link3{
  background-image: url("com.jpg");
  background-size: cover;
}
.csc a:hover{
  height:100%;  
  align-items:center;
}

.about{
    padding-top: 50px;
    padding-bottom: 50px;
    width: 100%;
    display: flex;
    flex-direction: column;
    font-family: 'Segoe UI';
    align-items: center;
    justify-content: center;
    font-size:16px;
}
.about_container{
    margin: 30px;
    line-height: 30px;
    display: inline;
    display: flex;
    padding:20px;
    animation: zoomin 1s linear 1; 
    animation-delay: 3s; 
    animation-fill-mode:forward;
    color:#EEF2F6;
}
@keyframes zoomin {
  0%{
    transform: scale(0.5);
    visibility:visible;

  }
  100%{
    transform: scale(1);
    visibility:visible;
  }
  
}
#soft{
  font-size:20px;
  color: #A2B5CD; 
}


.footer{
    padding-bottom: 30px;
    padding-top: 30px;
    background-color: #353535;
    display: flex;
    justify-content: center;
}
.footer_child{
    width: 25%;
    height: 170px;
   font-family: Segoe UI;
    display: flex;
    justify-content: center;
    margin-right: 60px;  
}
.footer_child_1{
    align-items: center;
    color: white;
    font-size: 20px;
}
ul{
    margin-top: 5px;
}
li{
        list-style-type: none;
        margin-top: 10px;
        color: white;
}

.first{
    font-size: 22px;
}
.first1 {
    font-size: 15px;
    bottom:15px;
    text-decoration: none;
}


.container{
    width: 90%;
    display: flex;
}

.footer_child_4{
    display: flex;
    justify-content: center;
    align-items: center;

}
.social_container{
   justify-content: space-between;
}
.social{
    height: 50px;
    width: 50px;
    background-size: cover;
}
.si1{
    background-image: url(./images/facebook.png);

}
.si2{
    background-image: url(./images/google.png);

}
.si3{
    background-image: url(./images/insta.png);

}
.si4{
    background-image: url(./images/gmail.png);

}
h1{
  color:#EEF2F6;
}
 </style>
<body >
    <div class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About</a></li>
            <li><a href="index.php">Contact</a></li>
            
      </ul>
    </div>
    
   <div class="heading">
          <div class="h">
           College Placement Cell
         
          </div>
          <div>
          <img src="alvalogo2.png" alt="logo" style="margin-left:625px; "></div>
          <div class="college">
          <div class="h2">
          
           
           <a href="http/alvascollege.com" style="text-decoration:none; color:black; " ><h2> Alva's College </h2></a>
           
                     
           </div>
          
          <div class="address"> Afflicated to Mangalore University </div> 
          <div class="address"> Vidyagiri Moodbidri-574227</div> 
   
   </div>       
   <div class="links">
     <div class="csc link1 link1e" >  
          <a href="college.php">COLLEGE</a>
     </div>
     <div class="csc link2">
          <a href="student.php">STUDENT </a>
     </div>
     <div class="csc link3">
          <a href="company.php">COMPANY</a>
     </div>
   </div>
   <div class="about">
   <h1>Who Are We ?</h1>
   <div class="container about_container">
 <p><b>This <span id="soft">College Placement Cell</span> Software for students of The <span id="soft">Alva's </span>College.
In this software students have to enroll theirself . They have to add their all details.
Details can be seen by either student who register himself/herself or college authority.
  In this software companies who want to hire students of The <span id="soft">Alva's</span> College have to register theirself.
  They have to upload job notifications on the software portal. Whoever want to apply for that job have to send their CV through mail to company.
  This is perfect plateform for students, college and company. </b>
</p>
</div>
</div>
   <div class="footer">
        <div class="container footer_container ">
              <div class="footer_child footer_child_1">
                <h1 class="footer_logo">College Placement Cell</h1>
            </div>
           <div class="footer_child">
                <ul>
                    <li class="first">Contact</li>
                    <li>
                        Alva'S college <br>
                        Vidyagiri Moodbidri-574227.
                    </li>
                    <li> 
                        +91 8618580822
                    </li>
                    <li>alvascollege.com</li>
                    
                </ul>

            </div>
            <div class="first1">
                <div>
                  <ul>
                    <li>2022 CPC-Alva's | Developed by Sushmaitha, Spoorthi, Ramya</li>
                <li>CPC-Alva's© 2022 All rights reserved ™<a href="mailto:sushma.123.hlk@gmail.com" style="text-decoration: none; color: white">[sushma.123.hlk@gmail.com]</a></li>        
            </ul>         
        </div>
      </div>
   </div>
</div>
</form>
</body>
</html>
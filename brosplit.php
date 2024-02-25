<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="images/logo.png" type="image">
    <title>Bro Split Workouts</title>
   
</head>
<body>
    <div class="navbar">
        <a href="#" class="logo">F<B>E</B></a>
        <div class="toggle" onclick="navToggle();"></div>
        <ol>
            <li><a href="index.php"onclick="navToggle();">Home</a></li>
            <li><a href="#program"onclick="navToggle();">Workouts</a></li>
            <li><a href="#tablee"onclick="navToggle();">Download</a></li>
            <li><a href="logout.php"onclick="navToggle();">Logout</a></li>
           
        </ol>
    </div>
<!-- home -->

<section id="home" class="home view">
    <div class="high">
        <h3>Welcome <b><?php echo $_SESSION['userrrr'];?></b></h3>
        <br><br>
        <h1><b>Bro Split</b> Program</h1><br>
    </div>
    <div class="banner"></div>
    </section>
<!--  -->
<section id="program" class="workout view">
    <div class="main">
        <h2><span>W</span>orkouts</h2>
        <h6>Build your best body with best workouts for body!</h6>
    </div>
    <div class="content">
        <div class="frame">
            <div class="box">
                <img src="images/trainer4.jpg" alt="Chest workout">
            </div>
            <div class="title">Chest Workouts</div>
            <a href="chest.html">Join</a>
        </div>
        <div class="frame">
            <div class="box">
                <img src="images/workout2.jpg" alt="Back workout">
            </div>
            <div class="title">Back workouts</div>
            <a href="back.html" onclick=";">Join</a>
        </div>
        <div class="frame">
            <div class="box">
                <img src="images/shoulder.jpg" alt="Shoulder workout">
            </div>
            <div class="title">Shoulder workouts</div>
            <a href="shoulder.html">Join</a>
        </div>
        <div class="frame">
            <div class="box">
                <img src="images/arm.jpg" alt="Arm workout">
            </div>
            <div class="title">Arm workouts</div>
            <a href="arm.html">Join</a>
        </div>
        <div class="frame">
            <div class="box">
                <img src="images/workout3.jpg" alt="Leg workout">
            </div>
            <div class="title">Leg workouts</div>
            <a href="leg.html">Join</a>
        </div>
        <div class="frame">
            <div class="box">
                <img src="images/workout1.jpg" alt="Cardio workout">
            </div>
            <div class="title">Cardio workouts</div>
            <a href="cardio.html">Join</a>
        </div>
    </div>
        
    
    
</section>
<section id="tablee" class="teblee">
    <div class="main">
        <h2><span>W</span>orkouts Summary</h2>
    </div>
   <div class="tableee">
    <br><br>
    <table>
        <tr>
            <th><span>M</span>ain Goal</th>
            <td>Build Muscle</td>
        </tr>
        <tr>
            <th><span>W</span>orkout Type</th>
            <td>Upper-Lower</td>
        </tr>
        <tr>
            <th><span>T</span>raining Level</th>
            <td>Intermediate</td>
        </tr>
        <tr>
            <th><span>P</span>rogram Duration</th>
            <td>8 weeks</td>
        </tr>
        <tr>
            <th><span>D</span>ays Per Week</th>
            <td>4 Days</td>
        </tr>
        <tr>
            <th><span>E</span>quipment Required</th>
            <td>Barbell, Bodyweight, Cables, Dumbbells, Machines</td>
        </tr>
        <tr>
            <th><span>W</span>orkout PDF</th>
            <td><button class="download"><a href="wordfiles/brosplit.pdf" >Download</a></button></td>
        </tr>
        
    </table>
   </div>
        
    </div>
        
    
    
</section>
<!-- footer -->
<br><br><br><br>
<section class="footer">
    <div class="container">
        <img src="images/logo.png" alt="logo">
        <p>We Are Social</p>
        <div class="social-icons">
            <a href="https://m.facebook.com/groups/175196658685320/?ref=sharehttps://m.facebook.com/groups/175196658685320/?ref%3Dshare&exp=8ce3&mibextid=S66gvF" target="_blank"> <i class="fab fa-facebook"></i></a>
            <i class="fab fa-twitter"></i>
            <a href="#home"><i class="fab fa-whatsapp"></i></a>
            <a href="https://instagram.com/fitness_empire_2023?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <p class="copyright"> &copy;Copyright <a href="#">Fitness-Empire-Team</a> 2023 | All Right Reversed</p>
    </div>
</section>
   

<div class="loader"></div>
<script src="jav.js"></script>
</body>
</html>
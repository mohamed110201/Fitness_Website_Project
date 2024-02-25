<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="images/logo.png" type="image">
    <title>Fitness Empire</title>
    <style>
        .errorms{
    background:#F2DEDE;
    color: #A94442;
    padding: 7px;
    width: 95%;
    border-radius: 5px;
    margin: -1px auto;
    font-weight: 500;
    line-height: 18px;
}
.suc{
    background:#d4edda;
    color: #40754c;
    padding: 7px;
    width: 95%;
    border-radius: 5px;
    margin: -1px auto;
    font-weight: 500;
}
    </style>
</head>
<body>
    
<!-- navigation bar -->
<div class="navbar">
    <a href="#" class="logo">F<B>E</B></a>
    <div class="toggle" onclick="navToggle();"></div>
    <ol>
        <li><a href="#home"onclick="navToggle();">home</a></li>
        <li><a href="#about"onclick="navToggle();">about</a></li>
        <li><a href="#program"onclick="navToggle();">program</a></li>
        <li><a href="#diet"onclick="navToggle();">diet</a></li>
        <li><a href="#calc"onclick="navToggle();">BMI Calculator</a></li>
        <li><a href="#pricing"onclick="navToggle();">pricing</a></li>
        <li><a href="#choose"onclick="navToggle();">Choose Us</a></li>
        <li><a href="#contact"onclick="navToggle();">contact</a></li>
        
        
    </ol>
</div>

<!-- Home section -->
<section id="home" class="home view">
<div class="highlights">
    <h3>fell the power with</h3>
    <h1><b>FITNESS</b>EMPIRE</h1><br>
    <p class="tagline">This page made by Fitness empire team to Being healthy and fit increases our energy level, improves confidence, 
        burns calories, minimizes complications of chronic diseases.</p>
    <a href="register.php"><button class="join">join now</button></a>
</div>
<div class="banner"></div>
</section>

<!-- About section -->
<section id="about" class="about view">
    <div class="main">
        <h2><span>A</span>bout Us</h2>
        <h6>Our team of profesional personal trainers have a tranining programme thats right for you!</h6>
    </div>
    <div class="content">
        <div class="frame">
           <div class="box">
               <img src="images/team/trainer1.jpg" alt="trainer1">
           </div>
           <div class="headline">
               <div class="title"><span>C.</span>Tony Little</div>
               <div class="icons">
                   <i class="fa fa-facebook"></i>
                   <i class="fa fa-instagram"></i>
                   <i class="fa fa-twitter"></i>
               </div>
           </div>
           <p>
            <ul>
                <li>*<span>Responsibilities:</span></li>
                <li>->conducting fitness assessments to establish client fitness and skill level.</li>
                <li>->holding one-on-one or group sessions with clients.</li>
                <br>
                <li>*<span>Qualifications:</span></li>
                <li>->Chartered Institute for the Management of Sport and Physical Activity (CIMSPA).</li>
                <br>
                <li>*<span>Skills:</span></li>
                <li>->the ability to deliver a high level of customer care.</li>
                <li>->good understanding of the human body and nutrition.</li>
                <li>->excellent oral communication skills.</li>
            </ul>
           </p>
           <a href="https://www.facebook.com/coyo.mohamed?mibextid=LQQJ4d" target="_blank">Explore</a>
        </div>

        <div class="frame">
            <div class="box">
                <img src="images/team/trainer22.jpg" alt="trainer2">
            </div>
            <div class="headline">
                <div class="title"><span>C.</span>Harley Pasternak</div>
                <div class="icons">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-twitter"></i>
                </div>
            </div>
            <p> <ul>
                <li>*<span>Responsibilities:</span></li>
                <li>->educating and advising clients to maintain or reach their fitness and health goals.</li>
                <li>->monitoring your clients' progress.</li>
                <br>
                <li>*<span>Qualifications:</span></li>
                <li>->Chartered Institute for the Management of Sport and Physical Activity (CIMSPA).</li>
                <br>
                <li>*<span>Skills:</span></li>
                <li>->awareness and understanding of safeguarding practice and policy.</li>
                <li>->good understanding of the human body and nutrition.</li>
                <li>->the ability to inspire clients.</li>
            </ul></p>
            <a href="https://www.facebook.com/mohamed.saeed.gouda.1382003?mibextid=ZbWKwL" target="_blank">Explore</a>
         </div>

         <div class="frame">
            <div class="box">
                <img src="images/team/trainer3.jpg" alt="trainer3">
            </div>
            <div class="headline">
                <div class="title"><span>C.</span>Joe Wicks</div>
                <div class="icons">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-twitter"></i>
                </div>
            </div>
            <p> <ul>
                <li>*<span>Responsibilities:</span></li>
                <li>->providing advice to clients on health, nutrition and lifestyle changes.</li>
                <li>->identifying goals and creating tailored exercise plans.</li>
                <br>
                <li>*<span>Qualifications:</span></li>
                <li>->Chartered Institute for the Management of Sport and Physical Activity (CIMSPA).</li>
                <br>
                <li>*<span>Skills:</span></li>
                <li>->the ability to deliver a high level of customer care.</li>
                <li>->high levels of enthusiasm and drive.</li>
                <li>->a friendly and outgoing personality.</li>
            </ul></p>
            <a href="https://www.facebook.com/gharieb.mansour.3?mibextid=LQQJ4d" target="_blank">Explore</a>
         </div>

         <div class="frame">
            <div class="box">
                <img src="images/team/trainer4.jpg" alt="trainer4">
            </div>
            <div class="headline">
                <div class="title"><span>C.</span>Mark Jenkins</div>
                <div class="icons">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-twitter"></i>
                </div>
            </div>
            <p> <ul>
                <li>*<span>Responsibilities:</span>:</li>
                <li>->Assisting with membership retention strategies for existing clients.</li>
                <li>->helping clients with their workouts.</li>
                <br>
                <li>*<span>Qualifications:</span></li>
                <li>->Chartered Institute for the Management of Sport and Physical Activity (CIMSPA).</li>
                <br>
                <li>*<span>Skills:</span></li>
                <li>->the ability to deliver a high level of customer care.</li>
                <li>->problem solving and stress management skills.</li>
                <li>->a friendly and outgoing personality.</li>
                <li>->excellent oral communication skills.</li>
            </ul></p>
            <a href="https://www.facebook.com/profile.php?id=100064067287248&mibextid=LQQJ4d" target="_blank">Explore</a>
         </div>


        
      </div>
</section>

<!-- Workout section -->
<section id="program" class="workout view">
    <div class="main">
        <h2><span>P</span>rogram</h2>
        <h6>Build your best body with best workouts for body!</h6>
    </div>
    <div class="content">
        <div class="frame">
            <div class="box">
                <img src="images/p1.jpg" alt="Chest workout">
            </div>
            <div class="title">Push-Pull-Legs Split</div>
            <a href="login.php" >Join</a>
            
        </div>
        <div class="frame">
            <div class="box">
                <img src="images/p2.jpg" alt="Back workout">
            </div>
            <div class="title">Upper and Lower</div>
            <a href="login.php" >Join</a>
        </div>
        <div class="frame">
            <div class="box">
                <img src="images/p3.jpg" alt="Shoulder workout">
            </div>
            <div class="title">Bro Split</div>
            <a href="login.php" >Join</a>
        </div>
        
    </div>
    
</section>

<!-- Diet section -->
<section id="diet" class="diet view">
    <div class="main">
        <h2><span>S</span>pecial<span> D</span>iet</h2>
        <h6>Live a healthier life with today's diet and fitness tips. Easy weight loss tips, workouts and more!</h6>
    </div>
    <div class="content">
        <div class="row">
            <div class="cols a">
                <div class="heading">boiled chicken</div>
                <p>
                    Boiled chicken breast is as close as you can get to a pure protein source. It contains very little fat and zero carbohydrates. There are about four grams of fat in one cup of boiled chicken breast. That's as much fat as about eight almonds, according to nutrition facts from the USDA.
One cup of boiled chicken breast contains a whopping 39 grams of protein. That's an incredible amount of protein for 200 calories. In fact, it gives one of the leading whey protein supplements a run for its money with only one less gram of protein for the same amount of calories.
                </p>
            </div>
            <div class="cols b">
                <div class="boxes">
                    <img src="images/diet1.jpg" alt="boiled chicken">
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="cols">
                <div class="heading">bread salads</div>
                <p>
                    Bread is high in calories and carbs but low in protein, fat, fiber and many vitamins and minerals. However, the specific nutrient profile depends on the type of bread,Bread’s high carb content can increase blood sugar and hunger while possibly promoting a higher body weight and an increased risk of diabetes and metabolic syndrome,Bread contains gluten, which can cause adverse side effects for people with celiac disease or gluten sensitivity,Bread is a staple food in many countries and has been eaten worldwide for millennia.
                </p>
            </div>
            <div class="cols">
                <div class="boxes">
                    <img src="images/diet2.jpg" alt="bread salads">
                </div>
            </div>
        </div>
     </div>
    <div class="content">
        <div class="row">
            <div class="cols a">
                <div class="heading">dry fruits</div>
                <p>
                    Gut health improvement is another benefit of the dietary fibres in dry fruits. Dry fruits are rich in dietary fibre, both soluble and insoluble.these dietary fiber help in adding bulk to stool. As a result, dry fruits help maintain a healthy bowel movement. A recent study suggests that dry fruits like prunes contain bifidobacteria, which help improve digestive health,Many dry fruits like walnuts are rich in omega-3 fatty acids. Omega-3 helps reduce the triglyceride levels in the blood, which helps control cholesterol. As a result, it aids in preventing  the arteries from clogging and, thus, decreases the chances of heart attacks. Omega-3 also helps prevent plaque build-up in the arteries.

                </p>
            </div>
            <div class="cols b">
                <div class="boxes">
                    <img src="images/diet3.jpg" alt="dry fruits">
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="cols">
                <div class="heading">healthy fruits</div>
                <p>
                    Fruit is a fabulous food. It’s nutrient-rich, it’s convenient, and it can be relatively inexpensive. Fresh fruit is portable, and if it is whole, it usually requires no refrigeration. Most fruit is naturally low in fat, sodium, and calories and a source of many essential nutrients such as potassium, vitamins A and C, folate, and dietary fiber. The United States Department of Agriculture (USDA) recommends adults consume a minimum of 2–4 servings of fruit per day, mostly whole fruit.

                </p>
            </div>
            <div class="cols">
                <div class="boxes">
                    <img src="images/diet4.jpg" alt="healthy fruits">
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="cols a">
                <div class="heading">fresh juices</div>
                <p>
                    Drinking fresh juice can be a good way to get one or two servings of fruit and increase the amount of antioxidants you consume. Fruit juice can be high in calories if it has added sugar, an important caveat for those watching sugar intake,It's also important to choose 100% fruit juice, rather than soft drinks made with fruit juice, because the nutritional value per calorie is more beneficial in 100% juice.1 There are many different juices and juice blends to choose from, but the most nutritious juice varieties include orange juice, pomegranate juice, and pink grapefruit juice.
                </p>
            </div>
            <div class="cols b">
                <div class="boxes">
                    <img src="images/diet5.jpg" alt="fresh juices">
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="cols">
                <div class="heading">some proteins</div>
                <p>
                    Protein is a macronutrient – macronutrients (sometimes called ‘macros’) are the nutrients we need in relatively larger amounts that provide us with calories. Macronutrients include protein, carbohydrates and fat. Protein provides 4kcal per gram,Proteins are found in every cell of the body and are needed for many of the important functions that make our body work properly. They are important for helping children’s bones to grow and to keep our bones and muscles healthy throughout our lives.
                </p>
            </div>
            <div class="cols">
                <div class="boxes">
                    <img src="images/diet6.jpg" alt="some proteins">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- calculator -->
<section id="calc" class="calc view">
<div class="main">
        <h2><span>BMI</span> Calculator</h2>
        <h6>Calclute your calories</h6>
</div>
<br><br>
<div class="content">
    
    <div class="frame">
        <br>
        <p>Height in CM:
            <input type="text" id="height"><br><span id="height_error"></span>
        </p>
        <br>
        <p>Weight in KG:
            <input type="text" id="weight"><br><span id="weight_error"></span>
        </p>

        <a id="btn">Calculate</a>
        <br>
        <p id="output"></p> 
    </div>

</div>     
  

</section>


<!-- pricing -->
<section id="pricing" class="pricing view">
    <div class="main">
        <h2><span>P</span>ricing</h2>
        <h6>Contact us to pay to unlock workouts...</h6><br>
    </div>
       
    <div class="pricingg">
      <div class="container">
        <div class="main-heading">
        <div class="plans">
          <div class="plan">
            <div class="head">
              <h3>Basic</h3>
              <span>19</span>
            </div>
            <ul>
              <li>1 Month</li>
              <li>1 Sweatshirt</li>
              <li>1 Bottle of Protein</li>
              <li>Acess to UP-LO Program</li>
            </ul>
            <div class="foot">
              <a href="#contact" onclick="buy();">Buy Now</a>
            </div>
          </div>
          <div class="plan">
            <div class="head">
              <h3>Premium</h3>
              <span>29</span>
            </div>
            <ul>
                <li>3 Months</li>
                <li>2 Sweatshirt</li>
                <li>2 Bottle of Protein</li>
                <li>Acess to PPL Program</li>
            </ul>
            <div class="foot">
              <a href="#contact" onclick="buy();">Buy Now</a>
            </div>
          </div>
          <div class="plan">
            <div class="head">
              <h3>Pro</h3>
              <span>39</span>
            </div>
            <ul>
                <li>6 Months</li>
                <li>4 Sweatshirt</li>
                <li>4 Bottle of Protein</li>
                <li>Acess to Bro-split Program</li>
            </ul>
            <div class="foot">
              <a href="#contact" onclick="buy();">Buy Now</a>
            </div>
          </div>
          <div class="plan">
            <div class="head">
              <h3>Platinum</h3>
              <span>49</span>
            </div>
            <ul>
                <li>1 Year</li>
                <li>6 Sweatshirt</li>
                <li>6 Bottle of Protein</li>
                <li>Acess to All Programs</li>
            </ul>
            <div class="foot">
              <a href="#contact" onclick="buy();">Buy Now</a>
            </div>
          </div>
          </div>
      </div>
    </div>
    
     
    
</section>

<!-- choose us -->
<section id="choose" class="choose">
    <div class="main">
        <h2><span>W</span>hy <span>C</span>hoose Us</h2>
        <h6></h6><br>
    </div>
    <div class="content">
        <div class="frame">
           <div class="box">
               <video controls >
                <source src="images/chooseus.mp4" type="video/mp4">
                <source src="images/chooseus.ogg" type="video/ogg">
               </video>
           </div>
        </div>
   
        

</section>
<?php
if(isset($_POST['submit'])){
    include 'conn-db.php';
    $id=filter_var($_POST['id'],FILTER_SANITIZE_STRING); 
   $name=filter_var($_POST['name'],FILTER_SANITIZE_STRING);
   $gmail=filter_var($_POST['gmail'],FILTER_SANITIZE_EMAIL);
   $message=$_POST['message'];
   $errors=[];
    $s=[];
   $stm="SELECT userid FROM users WHERE userid ='$id'";
   $q=$conn->prepare($stm);
   $q->execute();
   $data=$q->fetch();
   
   if(!$data){
     $errors[]="ID not found!Please create an account";
     $_POST['id']='';
   }

if(empty($errors)){
$s[]="Message sent Successfully!";
require_once 'mail.php';
             $mail->setFrom('empirefitness96@gmail.com','Fitness Empire');
             $mail->addAddress('empirefitness96@gmail.com');
             $mail->Subject='Contact - FE';
             $mail->Body="<h1><span style='color:red;'>Fitness</span> Empire</h1><br>"
             ."<table style=' border-collapse: collapse;
             width: 100%;'>"
             ."<caption><h3>FE - Customer message</h3></caption>"
             ."<tr style='background-color: #f2f2f2;'>"
             ."<th style='  text-align: left;padding: 8px;'>ID</th>"
             ."<td style='  text-align: left;padding: 8px;'>".$id."</td>"
             ."</tr >"
             ."<tr>"
             ."<th style='  text-align: left;padding: 8px;'>Name</th>"
             ."<td style='  text-align: left;padding: 8px;'>".$name."</td>"
             ."</tr>"
             ."<tr style='background-color: #f2f2f2;'>"
             ."<th style='  text-align: left;padding: 8px;'>Gmail</th>"
             ."<td style='  text-align: left;padding: 8px;'>".$gmail."</td>"
             ."</tr>"
             ."<tr>"
             ."<th style='  text-align: left;padding: 8px;'>Message</th>"
             ."<td style='  text-align: left;padding: 8px;'>".$message."</td>"
             ."</tr>"
             ."</table>";
             $mail->send();
}
if(empty($errors)){
    require_once 'mail.php';
             $mail->setFrom('empirefitness96@gmail.com','Fitness Empire');
             $mail->addAddress($gmail);
             $mail->Subject='FE - Message';
             $mail->Body="<h3 style='color:red;'>Hello ".$name." !</h3> "
             ."<h5>Thanks for getting started with our Fitness Empire Team!</h5><br>"
             ."<h3>We will reply to you as soon as possible!</h3>"
             ."________________<br><br>"
             ."<table style=' border-collapse: collapse;
             width: 100%;'>"
             ."<caption><h3>FE - Pricing</h3></caption>"
             ."<tr>"
             ."<th style='  text-align: left;padding: 8px;'>BASIC</th>"
             ."<th style='  text-align: left;padding: 8px;'>PREMIUM</th>"
             ."<th style='  text-align: left;padding: 8px;'>PRO</th>"
             ."<th style='  text-align: left;padding: 8px;'>PLATINUM</th>"
             ."</tr>"
             ."<tr style='background-color: #f2f2f2;'>"
             ."<td style='  text-align: left;padding: 8px;'>19$</td>"
             ."<td style='  text-align: left;padding: 8px;'>29$</td>"
             ."<td style='  text-align: left;padding: 8px;'>39$</td>"
             ."<td style='  text-align: left;padding: 8px;'>49$</td>"
             ."</tr>"
             ."<tr>"
             ."<td style='  text-align: left;padding: 8px;'>1 Month</td>"
             ."<td style='  text-align: left;padding: 8px;'>3 Months</td>"
             ."<td style='  text-align: left;padding: 8px;'>6 Months</td>"
             ."<td style='  text-align: left;padding: 8px;'>1 Year</td>"
             ."</tr>"
             ."<tr style='background-color: #f2f2f2;'>"
             ."<td style='  text-align: left;padding: 8px;'>1 Sweatshirt</td>"
             ."<td style='  text-align: left;padding: 8px;'>2 Sweatshirt</td>"
             ."<td style='  text-align: left;padding: 8px;'>4 Sweatshirt</td>"
             ."<td style='  text-align: left;padding: 8px;'>6 Sweatshirt</td>"
             ."</tr>"
             ."<tr>"
             ."<td style='  text-align: left;padding: 8px;'>1 Bottle of Protein</td>"
             ."<td style='  text-align: left;padding: 8px;'>2 Bottle of Protein</td>"
             ."<td style='  text-align: left;padding: 8px;'>4 Bottle of Protein</td>"
             ."<td style='  text-align: left;padding: 8px;'>6 Bottle of Protein</td>"
             ."</tr>"
             ."<tr style='background-color: #f2f2f2;'>"
             ."<td style='  text-align: left;padding: 8px;'>Acess to UP-LO Program</td>"
             ."<td style='  text-align: left;padding: 8px;'>Acess to PPL Program </td>"
             ."<td style='  text-align: left;padding: 8px;'>Acess to Bro-split Program</td>"
             ."<td style='  text-align: left;padding: 8px;'>Acess to All Programs</td>"
             ."</tr>"
             ."</table>"
             ."________________<br><br>"
             ."We Are Social:<br>"
             ."<ul>"
             ."<li>Facebook: <a href='https://m.facebook.com/groups/175196658685320/?ref=sharehttps://m.facebook.com/groups/175196658685320/?ref%3Dshare&exp=8ce3&mibextid=S66gvF'>Click here</a></li>"
             ."<li>Whatsapp: <a href='https://chat.whatsapp.com/BbStoQejP4I1HDOodmW9lx'>Click here</a></li>"
             ."<li>Instagram: <a href='https://instagram.com/fitness_empire_2023?igshid=YmMyMTA2M2Y='>Click here</a></li>"
             ."<li>Gmail: <a href='empirefitness96@gmail.com'>Click here</a></li>"
             ."</ul>"
             ."<br><br><b><span style='color:red;'>Thank you,</span></b><br>Fitness Empire team";
             $mail->send();
}
}
?>
<!-- contact section -->
<section id="contact"class="contact">
    <div class="main">
        <h2><span>C</span>ontact</h2>
        <h6>Can We Help You? Contact Us With Email!</h6><br>
        <div class="content">
            <form  action="index.php#contact" method="post">
            <?php 
        if(isset($errors)){
            if(!empty($errors)){
                foreach($errors as $msg){
                  ?> <p id="errorms" class="errorms"><?php echo $msg . "<br>";?></p><?php
                }
            }
        } if(isset($s))
        {
            if(!empty($s)){
                foreach($s as $msgg){
                  ?> <p id="suc" class="suc"><?php echo $msgg . "<br>";?></p><?php
                }
            }
        }
        ?>
                <input type="number" id="id" name="id" placeholder="Your ID"  required title="Create email to get ID" maxlength="8" minlength="8">
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <input type="email" id="email" name="gmail" placeholder="Your Gmail" required>
                <textarea rows="5"id="message" name="message" placeholder="How can we help you?" required></textarea>
                <br>
               <input type="submit"  value="Send" class="btn" name="submit">
            </form>
            <div class="bgimg"></div>
        </div>
</section>
<!-- copyright -->
<section class="footer">
    <div class="container">
        <img src="images/logo.png" alt="logo">
        <p>We Are Social</p>
        <div class="social-icons">
            <a href="https://m.facebook.com/groups/175196658685320/?ref=sharehttps://m.facebook.com/groups/175196658685320/?ref%3Dshare&exp=8ce3&mibextid=S66gvF" target="_blank"> <i class="fab fa-facebook"></i></a>
            <i class="fab fa-twitter"></i>
            <a href="https://chat.whatsapp.com/BbStoQejP4I1HDOodmW9lx" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://instagram.com/fitness_empire_2023?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <p class="copyright"> &copy;Copyright <a href="#">Fitness-Empire-Team</a> 2023 | All Right Reversed</p>
    </div>
</section>

<div class="loader"></div>


<script src="jav.js"></script>
</body>
</html>

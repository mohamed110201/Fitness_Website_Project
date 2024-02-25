<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="images/logo.png" type="image">
    <title>Sign UP</title>
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap');

:root {
    --primary-color: hsl(180,12%,8%);
    --secondary-color: red;
    --tertiary-color: #8b0000;
    --light-color: #efefef;
    --gray-color: #b0b0b0;
}

* {
    box-sizing: border-box;
    font-family:  sans-serif;
    line-height: 1;
    padding: 0;
    margin: 0;
}

.container {
    background-color: var(--primary-color);
    height: 111vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.box {
    background-color: white;
    border-radius: 10px;
    padding: 23px;
    width: 375px;
    max-width: 95%;
    box-shadow: 5px 5px 10px 1px rgb(0, 0, 0, 10%);
}

@media (max-width: 480px) {
    .box {
        padding: 75px 25px;
    }
}

.box h1 {
    font-size: 25px;
    font-weight: 800;
    text-align: center;
    margin-bottom: 24px;
    color: hsl(180,12%,8%);
    font-family: 'Raleway';
}

.box form div {
    display: flex;
    align-items: center;
    background-color: var(--light-color);
    border-radius: 250px;
    margin-bottom: 25px;
    padding: 10px;
}

.box form div i {
    font-size: 15px;
    margin: 0 10px;
    color: var(--gray-color);
}

.box form div:hover i {
    color: var(--secondary-color);
}

.box form div input {
    background-color: inherit;
    font-size: 12px;
    outline: none;
    border: none;
    padding: 5px;
    min-width: 0;
    flex: 1;
}

.box form div input::placeholder {
    opacity: 1;
    color: var(--gray-color);
    font-size: 12px;
}

.box form div input[type="date"] {
    color: var(--gray-color);
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
}

.box form input[type="submit"] {
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    background-color: var(--secondary-color);
    color: white;
    border: none;
    width: 100%;
    padding: 15px;
    border-radius: 250px;
    margin-top: -12px;
}
.box form #send input[type="submit"] {
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    background-color: transparent;
    color:var(--gray-color) ;
    border: none;
    width: 40%;
    padding: 6px;
    border-radius: 250px;
    font-weight: 600;
    font-size: 15px;
    margin-top: -6px;
}

.box form input[type="submit"]:hover {
    background-color: var(--tertiary-color);
    cursor: pointer;
}

.box form #send input[type="submit"]:hover {
    color: red;
    cursor: pointer;
}
.box span {
    margin-top: 25px;
    font-size: 12px;
    color: var(--gray-color);
    display: block;
    text-align: center;
}
.box .pass{
    margin-top: -22px;
    margin-bottom: 13px;
    font-size: 10.5px;
    color: var(--gray-color);
    display: block;
    text-align: left;
    margin-left: 13px;

}

.box #send{
    margin-top: -7px;
    margin-bottom: 25px;
    font-size: 12px;
    color: var(--gray-color);
    display: block;
    text-align: center;
}

.box span a {
    font-weight: 500;
    text-decoration: none;
    color: var(--secondary-color);
}
.box .pass a{
    font-weight: 500;
    text-decoration: none;
    color: var(--gray-color);
}
.box span  .send {
    font-weight: 500;
    text-decoration: none;
    color: var(--gray-color);
    cursor: pointer;
    font-size: 15px;
}
.box span  .send {
    font-weight: 500;
    text-decoration: none;
    color: var(--gray-color);
    cursor: pointer;
    font-size: 15px;
}
.box span a:hover {
    color: var(--tertiary-color);
}
.box span a:hover {
    color: red;
}
.errorms{
    background:#F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
    font-weight: 500;
    text-align: justify;
    line-height: 18px;
}
.suc{
    background:#d4edda;
    color: #40754c;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
    font-weight: 500;
}

.box span  .send {
    font-weight: 500;
    text-decoration: none;
    color: var(--gray-color);
    cursor: pointer;
    font-size: 15px;
}
#check0,#check1,#check2,#check3{
    color: red;
    font-family: 'Raleway';
    font-weight: 600;
    font-size: 10px;
}
.selectc{
    display: flex;
    justify-content: center;
    position: relative;
    min-width: 250px;
    height: 40px;
    font-family: sans-serif;
    font-weight: 500;
}
.selectb{
    border: none;
    appearance: none;
    padding: 0 30px 0 15px;
    width: 100%;
    height: 25px;
    color: black;
   background: transparent;
    font-size: 17px;
    font-family: sans-serif;
    border-radius: 5px;
    font-weight: 400;
}
    </style>
    
</head>
<body>
<?php


if(isset($_POST['sendcc']))
{
    include 'conn-db.php';
    $phone=filter_var($_POST['phone'],FILTER_SANITIZE_STRING);
    $date=$_POST['date'];
    $gmail=filter_var($_POST['gmail'],FILTER_SANITIZE_EMAIL);
    $vcode=filter_var($_POST['vcode'],FILTER_SANITIZE_STRING);
    $errors=[];
    $s=[];
  
     
     // validate phone
     if(empty($errors)){
        $stm="SELECT phone FROM users WHERE phone ='$phone'";
        $q=$conn->prepare($stm);
        $q->execute();
        $data=$q->fetch();
        
        if($data){
          $errors[]="Phone already exists";
          $_POST['phone']=''; 
        }
     }
     // validate gmail
     if(empty($errors)){
     $stm="SELECT gmail FROM users WHERE gmail ='$gmail'";
        $q=$conn->prepare($stm);
        $q->execute();
        $data=$q->fetch();
        
        if($data){
          $errors[]="Gmail already exists";
          $_POST['gmail']='';
        }
     }
     
   if(empty($errors))
   {
// genrate code
$chars='0123456789';
$charslen=strlen($chars);
$randomcode='';
for($i=0;$i<8;$i++)
{
    $randomcode .= $chars[rand(0,$charslen-1)];
}
$_SESSION['randomcode']=$randomcode;

$name=$_SESSION['Nname'];
    require_once 'mail.php';
$mail->setFrom('empirefitness96@gmail.com','Fitness Empire');
$mail->addAddress($gmail);
$mail->Subject='Registraton Verification Code';
$mail->Body="<h3 style='color:red;'>Hello ".$name."!</h3>"."<br>"."Thanks for getting started with our Fitness Empire Team!"."<br><br>"."We need a little more information to complete your registration, including a confirmation of your email address."."<br><br>"."Your gmail verification code: " ."<a href='#'>" .$randomcode ."</a>"."<br><br>"."If you have any questions, send us an email <a href='empirefitness96@gmail.com'>empirefitness96@gmail.com</a>."."<br><br>"."<h3 style='color:red;'>thank you for joining our Fitness Empire family!</h3>";
$mail->send();

 $s[]="Verification Code has been sent successfully";

   }
}

if(isset($_POST['submit'])){
include 'conn-db.php';
   $phone=filter_var($_POST['phone'],FILTER_SANITIZE_STRING);
   $date=$_POST['date'];
   $gmail=filter_var($_POST['gmail'],FILTER_SANITIZE_EMAIL);
   $vcode=filter_var($_POST['vcode'],FILTER_SANITIZE_STRING);
   $gender=$_POST['gender'];

   $errors=[];
  
   // validate name
 
   if(empty($vcode))
{
    $errors[]="Verification Code is Required";
}
   

  
   // insert or errros 
   if(empty($errors)){
    
   if($_SESSION['randomcode']!=$vcode){
     $errors[]="Verification Code is not correct";
     $_POST['vcode']='';
   }
   else{
         // echo "insert db";
         $name=$_SESSION['Nname'];
         $password=$_SESSION['ppassword'];
         $email=$_SESSION['iid'];
// calc age
    $bd=$date;
    $td=date('Y-m-d');
    $diff=date_diff(date_create($bd),date_create($td));
    $age=$diff->format('%y');

      $password=password_hash($password,PASSWORD_DEFAULT);
      $stm="INSERT INTO users (name,userid,password,phone,gmail,date,gender,age) VALUES ('$name','$email','$password','$phone','$gmail','$date','$gender','$age')";
      $conn->prepare($stm)->execute();
      
      $_SESSION['use']=[
        "name"=>$name,
        "email"=>$email,
        "phone"=>$phone,
        "gmail"=>$gmail,
        
      ];
      echo "<script>"."alert('Your account has been created successfully!');window.location.href='index.php';"."</script>";

         require_once 'mail.php';
$mail->setFrom('empirefitness96@gmail.com','Fitness Empire');
$mail->addAddress($gmail);
$mail->Subject='FE - Registraton Confirmation';
$mail->Body="<h1><span style='color:red;'>Fitness</span> Empire</h1>"."<h5>Thank You for your registration in Fitness Empire website!</h5>"."___________________________<br><br>"
."<table style=' border-collapse: collapse;
width: 100%;'>"
."<caption><h3>FE - Your Account</h3></caption>"
."<tr style='background-color: #f2f2f2;'>"
."<th style='  text-align: left;padding: 8px;'>Name</th>"
."<td style='  text-align: left;padding: 8px;'>".$name."</td>"
."</tr >"
."<tr>"
."<th style='  text-align: left;padding: 8px;'>ID</th>"
."<td style='  text-align: left;padding: 8px;'>".$email."</td>"
."</tr>"
."<tr style='background-color: #f2f2f2;'>"
."<th style='  text-align: left;padding: 8px;'>Password</th>"
."<td style='  text-align: left;padding: 8px;'>".$_SESSION['ppassword']."</td>"
."</tr>"
."<tr>"
."<th style='  text-align: left;padding: 8px;'>Phone</th>"
."<td style='  text-align: left;padding: 8px;'>".$phone."</td>"
."</tr>"
."<tr style='background-color: #f2f2f2;'>"
."<th style='  text-align: left;padding: 8px;'>Date</th>"
."<td style='  text-align: left;padding: 8px;'>".$date."</td>"
."</tr>"
."<tr>"
."<th style='  text-align: left;padding: 8px;'>Age</th>"
."<td style='  text-align: left;padding: 8px;'>".$age."</td>"
."</tr>"
."<tr  style='background-color: #f2f2f2;'> "
."<th style='  text-align: left;padding: 8px;'>Gmail</th>"
."<td style='  text-align: left;padding: 8px;'>".$gmail."</td>"
."</tr>"
."</table>"
."___________________________"."<br><h3 style='color:red;'>Thanks for choosing Fitness Empire and enjoy your account!</h3>";
$mail->send();

   }

   }

     
}
ob_end_flush();
?>
 <div class="container">
        <div class="box">
            <h1>Sign Up</h1>
            <form action="registerb.php" method="POST" onsubmit="welcome()">
            <?php 
        if(isset($errors)){
            if(!empty($errors)){
                foreach($errors as $msg){
                  ?> <p id="errorms" class="errorms"><?php echo $msg . "<br>";?></p><?php
                }
            }
        }if(isset($s))
        {
            if(!empty($s)){
                foreach($s as $msgg){
                  ?> <p id="suc" class="suc"><?php echo $msgg . "<br>";?></p><?php
                }
            }
        }
    ?>
               
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" name="phone" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>" placeholder="Enter Your Phone" pattern="01[0-9]{9}" required >
                </div>
                <div>
                <i class="fa fa-calendar" aria-hidden="true"></i>
                    <input type="date" name="date" value="<?php if(isset($_POST['date'])){echo $_POST['date'];} ?>" placeholder="Enter your Birthdate" required>
                </div>
                <div class="selectc">
                <i class="fa-solid fa-list"></i>
                    <select class="selectb" name="gender" id="">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" value="<?php if(isset($_POST['gmail'])){echo $_POST['gmail'];} ?>" name="gmail" placeholder="Enter Your Gmail" required>
                </div>
               
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" name="vcode" placeholder="Enter Gmail Verification Code">
                </div>
               <span id="send"> <input type="submit" name="sendcc" class="send" value="send Code"></span>
             
                <input type="submit" name="submit" value="Sign up" >
            </form>
            <span><b>Already have an account?</b>
                <a href="login.php"><b>Login</b></a></span>
                <span><a href="index.php" class="send"><b>HOME</b></a></span>
               

        </div>
    </div>




</body>
</html>

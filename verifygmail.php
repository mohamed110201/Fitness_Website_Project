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
    <title>Forgot Password</title>
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
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.box {
    background-color: white;
    border-radius: 10px;
    padding: 40px;
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
.loader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #333333;
  transition: opacity 0.75s, visibility 0.75s;
}

.loader--hidden {
  opacity: 0;
  visibility: hidden;
}

.loader::after {
  content: "";
  width: 75px;
  height: 75px;
  border: 15px solid #dddddd;
  border-top-color: red;
  border-radius: 50%;
  animation: loading 0.75s ease infinite;
}

@keyframes loading {
  from {
    transform: rotate(0turn);
  }
  to {
    transform: rotate(1turn);
  }
}
    </style>
</head>
<body>
    <?php
if(isset($_POST['sendcc']))
{
    include 'conn-db.php';
    $gmail=filter_var($_POST['gmail'],FILTER_SANITIZE_EMAIL);
    $vcode=filter_var($_POST['vcode'],FILTER_SANITIZE_STRING);
    $errors=[];
    $s=[];
    if(empty($gmail))
    {
        $errors[]="Gmail is Required";
    }
    $stm="SELECT gmail FROM users WHERE gmail ='$gmail'";
   $q=$conn->prepare($stm);
   $q->execute();
   $data=$q->fetch();
   
   if(!$data){
     $errors[]="Gmail not found";
     $_POST['gmail']='';
   }
   if(empty($errors))
   {
    $_SESSION['gmail']=$gmail;
// genrate code
$chars='0123456789';
$charslen=strlen($chars);
$randomcode='';
for($i=0;$i<8;$i++)
{
    $randomcode .= $chars[rand(0,$charslen-1)];
}
$_SESSION['randomcode']=$randomcode;

$stm="SELECT name FROM users WHERE gmail='$gmail'";
$q=$conn->prepare($stm);
$q->execute();
$data=$q->fetch();
$name=$data['name'];

    require_once 'mail.php';
$mail->setFrom('empirefitness96@gmail.com','Fitness Empire');
$mail->addAddress($gmail);
$mail->Subject='Verification Code';
$mail->Body="<h3 style='color:red;'>Hello ".$name."!</h3>"."<br>"."You recently requested to reset the password for your Fitness Empire account.<br><br>"."Your gmail verification code: " ."<a href='#'>" .$randomcode ."</a>"."<br><br>"."If you did not request a password reset, please ignore this email.<br><br>"."<b><span style='color:red;'>Thank you,</span></b><br>Fitness Empire team" ;
$mail->send();

 $s[]="Verification Code has been sent successfully";

 
   }

}

if(isset($_POST['submit'])){
    include 'conn-db.php';
       $gmail=filter_var($_POST['gmail'],FILTER_SANITIZE_EMAIL);
       $vcode=filter_var($_POST['vcode'],FILTER_SANITIZE_STRING);
   $errors=[];
   $s=[];
    
   if(empty($vcode))
{
    $errors[]="Verification Code is Required";
}

if(empty($errors)){
    
    if($_SESSION['randomcode']!=$vcode){
      $errors[]="Verification Code is not correct";
      $_POST['vcode']='';
    }
    else{
        header('location:changepass.php');
    }
}
}


?>
<div class="container">
        <div class="box">
            <h1>Verify Gmail</h1>
            <form action="verifygmail.php" method="POST" onsubmit="welcome()">
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
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" value="<?php if(isset($_POST['gmail'])){echo $_POST['gmail'];} ?>" name="gmail" placeholder="Enter Your Gmail" required>
                </div>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" name="vcode" placeholder="Enter Gmail Verification Code">
                </div>
               <span id="send"> <input type="submit" name="sendcc" class="send" value="send Code"></span>
             
                <input type="submit" name="submit" value="Continue" >
            </form>
            
                <span><a href="login.php" class="send"><b>Login</b></a></span>
        </div>
    </div>

    <div class="loader"></div>
    <script>
        
window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});
    </script>
</body>
</html>
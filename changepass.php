<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="images/logo.png" type="image">
    <title>Reset Password</title>
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
    padding: 25px;
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
    margin-bottom: 35px;
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
}

.box form input[type="submit"]:hover {
    background-color: var(--tertiary-color);
    cursor: pointer;
}

.box span {
    margin-top: 25px;
    font-size: 12px;
    color: var(--gray-color);
    display: block;
    text-align: center;
}

.box span a {
    font-weight: 500;
    text-decoration: none;
    color: #b0b0b0;
    font-size: 15px;
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

#btn{
    cursor: pointer;
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
    if(isset($_POST['submit'])){
        include 'conn-db.php';
        $password=filter_var($_POST['rp'],FILTER_SANITIZE_STRING);
        $confirm=filter_var($_POST['crp'],FILTER_SANITIZE_STRING); 
        $errors=[];
        $uppercase=preg_match('@[A-Z]@',$password);
        $number=preg_match('@[0-9]@',$password);
        $sp=preg_match('@[^\w]@',$password);

        if(!$uppercase||!$sp||!$number||strlen($password)<8){
    $errors[]="Weak Password!Password should be at least 8 characters and should include upercase letter, numer and symbol";
    $_POST['rp']="";
    $_POST['crp']=""; 
}elseif($confirm!=$password){
 $errors[]="Password don't match";
 $_POST['rp']="";
 $_POST['crp']=""; 
}
if(empty($errors)){
    $g=$_SESSION['gmail'];
    $password=password_hash($password,PASSWORD_DEFAULT);
    $stm="UPDATE users SET password='$password' WHERE gmail='$g'";
   $q=$conn->prepare($stm);
   $q->execute();
   $data=$q->fetch();



 $stm="SELECT userid FROM users WHERE gmail ='$g'";
   $q=$conn->prepare($stm);
   $q->execute();
   $data=$q->fetch();
   
     require_once 'mail.php';
$mail->setFrom('empirefitness96@gmail.com','Fitness Empire');
$mail->addAddress($g);
$mail->Subject='FE - New Password';
$mail->Body="<h1>Fitness Empire</h1>"."<h5>Password Reset Successful!</h5>"."<br>______________________________<br><br>".
"<table style=' border-collapse: collapse;
width: 100%;'>"
."<caption><h3>FE - New Password</h3></caption>"
."<tr style='background-color: #f2f2f2;'>"
."<th style='  text-align: left;padding: 8px;'>ID</th>"
."<td style='  text-align: left;padding: 8px;'>".$data['userid']."</td>"
."</tr >"
."<tr>"
."<th style='  text-align: left;padding: 8px;'>New Password</th>"
."<td style='  text-align: left;padding: 8px;'>".$confirm."</td>"
."</tr>"
."</table>"
."<br>______________________________"."<br><br><b><span style='color:red;'>Thank you,</span></b><br>Fitness Empire team";
$mail->send();
header("location:login.php");

}

    }
    ?>

<div class="container">
        <div class="box">
            <h1>Reset Your Password</h1>
            <form action="changepass.php" method="POST" onsubmit="welcome()">
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
                    <i class="fa-solid fa-lock"></i>
                    <input type="password"  name="rp" placeholder="New Password" required>
                </div>
                <div>
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="crp" placeholder="Confirm New Password" required>
                </div>

             
                <input type="submit" name="submit" value="Reset Password" >
            </form>
            
            
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
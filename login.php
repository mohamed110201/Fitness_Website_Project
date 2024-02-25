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
    <title>Login</title>
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
.box .sign-up {
    margin-top: 19px;
    text-align: center;
    text-transform: uppercase;
}
.box a {
    color: var(--gray-color);
    text-decoration: none;
    font-size: 12px;
    display: block;
}

.box a:hover {
    color: var(--secondary-color);
}

.box .forgot {
    margin-top: -14px;
    text-align: right;
    margin-bottom: 11px;
    margin-right: 7px;
    text-transform: uppercase;
}

.box .forgot:hover {
    color: var(--secondary-color);
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

if(isset($_SESSION['user'])){
    header('location:ppl.php');
}elseif(isset($_SESSION['userr'])){
    header('location:uplo.php');
}elseif(isset($_SESSION['userrrr'])){
    header('location:brosplit.php');
}
if(isset($_POST['submit'])){
 include 'conn-db.php';
   $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
   $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
   $code=filter_var($_POST['code'],FILTER_SANITIZE_EMAIL) ;
    $program=$_POST['program'];
    
   $errors=[];
   

   // validate email
 


if($email=="FEADMIN"&&$password=="FEADMIN"&&$code=="FEADMIN")
{
    header('location: admin.php');
}

   // insert or errros 
   if(empty($errors)){
   
    if($program=="premium"){
        $stm="SELECT * FROM pplcode WHERE userid ='$email' && code='$code'" ;
    $q=$conn->prepare($stm);
    $q->execute();
    $data=$q->fetch();
    if(!$data){
       $errors[] = "Invalid ID or Password or Code";
    }
    else{

        $stmm="SELECT * FROM users " ;
    $qq=$conn->prepare($stmm);
    $qq->execute();
    $dataa=$qq->fetch();
    $password_hash=$dataa['password']; 
         
         if(!password_verify($password,$password_hash)){
            $errors[] = "Invalid ID or Password or Code";
         }else{
            $today=date("Y-m-d");
            $std=strtotime($today);
            $stm="SELECT * FROM pplcode WHERE userid ='$email' && code='$code' " ;
             $q=$conn->prepare($stm);
             $q->execute();
            $data=$q->fetch();
            $n=$data['enddate'];
            $a=strtotime($n);
            

            if($a>$std){
            $_SESSION['user']=$dataa['name'];
            header('location:ppl.php');
            }else{
                $errors[]="Code expired!";
                $stm="DELETE FROM pplcode WHERE userid='$email' ";
                $conn->prepare($stm)->execute();
            }

         }
    }
     
    }
    if($program=="basic"){
        $stm="SELECT * FROM uplocode WHERE userid ='$email' && code='$code'" ;
        $q=$conn->prepare($stm);
        $q->execute();
        $data=$q->fetch();
        if(!$data){
           $errors[] = "Invalid ID or Password or Code";
        }
        else{
    
            $stmm="SELECT * FROM users " ;
        $qq=$conn->prepare($stmm);
        $qq->execute();
        $dataa=$qq->fetch();
        $password_hash=$dataa['password']; 
             
             if(!password_verify($password,$password_hash)){
                $errors[] = "Invalid ID or Password or Code";
             }else{
                $today=date("Y-m-d");
            $std=strtotime($today);
            $stm="SELECT * FROM uplocode WHERE userid ='$email' && code='$code' " ;
             $q=$conn->prepare($stm);
             $q->execute();
            $data=$q->fetch();
            $n=$data['enddate'];
            $a=strtotime($n);
            

            if($a>$std){
            $_SESSION['user']=$dataa['name'];
            header('location:ppl.php');
            }else{
                $errors[]="Code expired!";
                $stm="DELETE FROM uplocode WHERE userid='$email' ";
                $conn->prepare($stm)->execute();
            }
    
             }
        }
      
    }
    if($program=="pro"){
        $stm="SELECT * FROM brosplitcode WHERE userid ='$email' && code='$code'" ;
        $q=$conn->prepare($stm);
        $q->execute();
        $data=$q->fetch();
        if(!$data){
           $errors[] = "Invalid ID or Password or Code";
        }
        else{
            
          $stmm="SELECT * FROM users " ;
          $qq=$conn->prepare($stmm);
          $qq->execute();
          $dataa=$qq->fetch();
          $password_hash=$dataa['password']; 
               
               if(!password_verify($password,$password_hash)){
                  $errors[] = "Invalid ID or Password or Code";
               }else{
                $today=date("Y-m-d");
                $std=strtotime($today);
                $stm="SELECT * FROM brosplitcode WHERE userid ='$email' && code='$code' " ;
                 $q=$conn->prepare($stm);
                 $q->execute();
                $data=$q->fetch();
                $n=$data['enddate'];
                $a=strtotime($n);
                
    
                if($a>$std){
                $_SESSION['user']=$dataa['name'];
                header('location:ppl.php');
                }else{
                    $errors[]="Code expired!";
                    $stm="DELETE FROM brosplitcode WHERE userid='$email' ";
                    $conn->prepare($stm)->execute();
                }
      
               }
            }
       
            
        }
             
      
               
        }
    
      

}

ob_end_flush();
?>




    

<div class="container">
        <div class="box">
            <h1>Login</h1>
            <form action="login.php" method="post">
            <?php 
        if(isset($errors)){
            if(!empty($errors)){
                foreach($errors as $msg){
                  ?> <p class="errorms"><?php echo $msg . "<br>";?></p><?php
                }
            }
        }
    ?>
                <div class="selectc">
                <i class="fa-solid fa-list"></i>
                    <select class="selectb" name="program" id="">
                    <option value="basic">Basic</option>
                        <option value="premium">Premium</option>
                        <option value="pro">Pro</option>
                    </select>
                </div>
                
               
                <div>
                <i class="fa fa-id-card-o" aria-hidden="true"></i>
                    <input type="text" name="email" placeholder="Enter ID" maxlength="8" required>
                </div>
                <a href="forgotid.php" class="forgot"><b>Forgot ID?</b></a>
                <div>
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="Enter Password" required>
                </div>
                <a href="verifygmail.php" class="forgot"><b>Forgot Password?</b></a>
                <div>
                <i class="fa-solid fa-code"></i>
                    <input type="password" name="code" placeholder="Enter Code" title="Contact us to pay to get code" required>
                </div>
              
                <input type="submit" name="submit" value="Login">
            </form>
            <a href="register.php" class="sign-up"><b>Don't Have Account?</b> Sign Up</a>
            
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

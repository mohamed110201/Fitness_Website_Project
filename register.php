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
#check0,#check1,#check2,#check3,#check4,#check5{
    color: red;
    font-family: 'Raleway';
    font-weight: 600;
    font-size: 14px;
}
    </style>
    
</head>
<body>
<?php



if(isset($_POST['submit'])){
include 'conn-db.php';
   $name=filter_var($_POST['name'],FILTER_SANITIZE_STRING); 
   $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
   $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
   $confirm=filter_var($_POST['confirm'],FILTER_SANITIZE_STRING);

   $errors=[];
   
   $uppercase=preg_match('@[A-Z]@',$password);
   $number=preg_match('@[0-9]@',$password);
   $sp=preg_match('@[^\w]@',$password);
   // validate name
 
   if(strlen($name)>100){
       $errors[]="Name must not be more than 100 characters";
       $_POST['password']="";
       $_POST['confirm']="";   
   }elseif(strlen($email)<8){
        $errors[]="ID should be at least 8 numbers";
        $_POST['email']='';
        $_POST['password']="";
    $_POST['confirm']="";   
   }elseif(strlen($email)>8){
    $errors[]="ID should not be more 8 numbers";
    $_POST['email']='';
    $_POST['password']="";
    $_POST['confirm']="";   
   }
   elseif(substr($email,0,1)==='0')
{
    $errors[]="ID should not start with 0";
    $_POST['email']='';
    $_POST['password']="";
    $_POST['confirm']="";   
}elseif(!$uppercase||!$sp||!$number||strlen($password)<8){
    $errors[]="Weak Password!Password should be at least 8 characters and should include upercase letter, numer and symbol";
    $_POST['password']="";
    $_POST['confirm']=""; 
}elseif($confirm!=$password){
 $errors[]="Password don't match";
 $_POST['password']="";
 $_POST['confirm']=""; 
}
   

  
// validte  id
if(empty($errors)){
   $stm="SELECT userid FROM users WHERE userid ='$email'";
   $q=$conn->prepare($stm);
   $q->execute();
   $data=$q->fetch();
   
   if($data){
     $errors[]="ID already exists";
     $_POST['email']='';
     $_POST['password']="";
     $_POST['confirm']="";  
   }
}



   // insert or errros 
   if(empty($errors)){
    $_SESSION['Nname']=$name;
    $_SESSION['ppassword']=$password;
    $_SESSION['iid']=$email;
   header("location:registerb.php");
   }

   }

     

ob_end_flush();
?>
 <div class="container">
        <div class="box">
            <h1>Sign Up</h1>
            <form action="register.php" method="POST" onsubmit="welcome()">
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
                    <i class="fa-solid fa-user"></i>
                    <input type="text" id="nam" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>" name="name" placeholder="Enter Your Name" required>
                </div>
                <div>
                    <i class="fa fa-id-card-o" aria-hidden="true"></i>
                    <input type="number" onkeyup="check()" id="em" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" name="email" placeholder="Enter Your ID" title="ID should not start with 0 and should be at least 8 numbers " required>
                </div>
               <br> <span  class="pass" id="check4"> <i class="fa fa-check-circle" aria-hidden="true"></i><a > Should not start with 0.</a></span><br>
                <span  class="pass" id="check5"><i class="fa fa-check-circle" aria-hidden="true"></i><a > Only 8 numbers.</a></span>
                
                <div>
                    <i class="fa-solid fa-lock"></i>
                    <input type="password"  id="pas" onkeyup="check()" value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>"  name="password" placeholder="Enter Your Password" title="Password should be at least 8 characters and should include upercase letter, numer and symbol" required>
                </div>
                <div>
                    <i class="fa-solid fa-lock"></i>
                    <input type="password"  value="<?php if(isset($_POST['confirm'])){echo $_POST['confirm'];} ?>" name="confirm" placeholder="Confirm Password" required>
                </div>
                <br>
                <span  class="pass" id="check0"> <i class="fa fa-check-circle" aria-hidden="true"></i><a > Length more than 8.</a></span><br>
                <span  class="pass" id="check1"> <i class="fa fa-check-circle" aria-hidden="true"></i><a > Contains uppercase letters.</a></span><br>
                <span  class="pass" id="check2"> <i class="fa fa-check-circle" aria-hidden="true"></i><a > Contains numerical character.</a></span><br>
                <span  class="pass" id="check3"><i class="fa fa-check-circle" aria-hidden="true"></i><a > Contains Special character.</a></span>
                <br>
          
             
                <input type="submit" name="submit" value="Continue" >
            </form>
            
               

        </div>
    </div>


 <script>
    function check(){
        const lower=new RegExp('(?=.*[A-Z])');
        var input=document.getElementById("pas").value;
        var inputb=document.getElementById("em").value;
        input=input.trim();
        inputb=inputb.trim();
        if(input.length>8){
            document.getElementById("check0").style.color="green";
        }else{
            document.getElementById("check0").style.color="red";
        }
        if(input.match(/[0-9]/i))
        {
            document.getElementById("check2").style.color="green";
        }else{
            document.getElementById("check2").style.color="red";
        }
        if(input.match(/[^A-Za-z0-9-'']/i)){
            document.getElementById("check3").style.color="green";
        }else{
            document.getElementById("check3").style.color="red";
        }
        if(lower.test(input)){
            document.getElementById("check1").style.color="green";
        }else{
            document.getElementById("check1").style.color="red";
        }
        if(inputb.length==8){
            document.getElementById("check5").style.color="green";
        }else{
            document.getElementById("check5").style.color="red";
        }
        if(inputb.match(/^[1-9][0-9]/g)){
            document.getElementById("check4").style.color="green";
        }else{
            document.getElementById("check4").style.color="red";
        }
    }
 </script>

</body>
</html>

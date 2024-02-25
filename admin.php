<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="images/logo.png" type="image">
    <title>Admin login</title>
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

    </style>
</head>
<body>

<?php
if(isset($_POST['submit'])){
    include 'conn-db.php';
   
$program=$_POST['program'];
$id=$_POST['id'];
$code=$_POST['code'];
$gmail=$_POST['gmail'];
$s=[];
$errors=[];

$lowercase=preg_match('@[a-z]@',$code);
$number=preg_match('@[0-9]@',$code);



if(!$lowercase||!$number||strlen($code)<8   )
{
    $errors[]="Weak Code! Code should be at least 8 characters and should include numbers and letters";
}

if(!empty($id)&& !empty($code) && !empty($gmail)){
$stm="SELECT userid FROM users WHERE userid ='$id'";
   $q=$conn->prepare($stm);
   $q->execute();
   $data=$q->fetch();
   
   if(!$data){
     $errors[]="ID not found";
     $_POST['id']='';
   }
}

if($program=="basic"){
    $startdate=date("Y/m/d");
    $enddate=date("Y/m/d",strtotime($startdate."+1 month"));
    if(empty($errors)){
        // echo "insert db";
        
        $stm="INSERT INTO uplocode (userid,code,startdate,enddate) VALUES ('$id','$code','$startdate','$enddate')";
        $conn->prepare($stm)->execute();
        $_POST['code']='';
       
        
        $s[]="Code has been added successfully";
        $stm="SELECT name FROM users WHERE userid ='$id'";
        $q=$conn->prepare($stm);
        $q->execute();
        $data=$q->fetch();
        $name=$data['name'];
         //  mail
          if(empty($errors)){
             require_once 'mail.php';
             $mail->setFrom('empirefitness96@gmail.com','Fitness Empire');
             $mail->addAddress($gmail);
             $mail->Subject='FE - Basic code';
             $mail->Body="<h3 style='color:red;'>Hello ".$name."!</h3>"."<h4>Thanks for getting started with our Fitness Empire Team!</h4>".
             "_____________________________________________<br>".
             "<table style=' border-collapse: collapse;
            width: 100%;'>"
            ."<caption><h3>FE - Basic code</h3></caption>"
            ."<tr style='background-color: #f2f2f2;'>"
            ."<th style='  text-align: left;padding: 8px;'>Code</th>"
            ."<td style='  text-align: left;padding: 8px;'>".$code."</td>"
            ."</tr >"
            ."<tr>"
            ."<th style='  text-align: left;padding: 8px;'>Subscription start date</th>"
            ."<td style='  text-align: left;padding: 8px;'>".$startdate."</td>"
            ."</tr>"
            ."<tr style='background-color: #f2f2f2;'>"
            ."<th style='  text-align: left;padding: 8px;'>Subscription end date</th>"
            ."<td style='  text-align: left;padding: 8px;'>".$enddate."</td>"
            ."</tr>"
            ."<tr>"
            ."<th style='  text-align: left;padding: 8px;'>No. of months</th>"
            ."<td style='  text-align: left;padding: 8px;'>1 Month</td>"
            ."</tr>"
            ."</table>"
           .
             "_____________________________________________<br><br><b>HAVE QUESTIONS OR NEED HELP?</b><br><br>"."Let us know! We’ll do everything we can to make sure you love your experience with us. Reach us at empirefitness96@gmail.com or <a href='#'>01100106132</a>. We’re available all days.<br><br>"."<b><span style='color:red;'>Thank you,</span></b><br>Fitness Empire team";
             $mail->send();
          }
     }
   
}

else if($program=="premium")
{
    $startdate=date("Y/m/d");
    $enddate=date("Y/m/d",strtotime($startdate."+3 month"));
    if(empty($errors)){

        
        $stm="INSERT INTO pplcode (userid,code,startdate,enddate) VALUES ('$id','$code','$startdate','$enddate')";
        $conn->prepare($stm)->execute();
        $_POST['code']='';
        
        $s[]="Code has been added successfully";
         }
         $stm="SELECT name FROM users WHERE userid ='$id'";
         $q=$conn->prepare($stm);
         $q->execute();
         $data=$q->fetch();
         $name=$data['name'];
        //  mail
        if(empty($errors)){
            require_once 'mail.php';
            $mail->setFrom('empirefitness96@gmail.com','Fitness Empire');
            $mail->addAddress($gmail);
            $mail->Subject='FE - Premium code';
            $mail->Body="<h3 style='color:red;'>Hello ".$name."!</h3>"."<h4>Thanks for getting started with our Fitness Empire Team!</h4>".
            "_____________________________________________<br>".
            "<table style=' border-collapse: collapse;
           width: 100%;'>"
           ."<caption><h3>FE - Premium code</h3></caption>"
           ."<tr style='background-color: #f2f2f2;'>"
           ."<th style='  text-align: left;padding: 8px;'>Code</th>"
           ."<td style='  text-align: left;padding: 8px;'>".$code."</td>"
           ."</tr >"
           ."<tr>"
           ."<th style='  text-align: left;padding: 8px;'>Subscription start date</th>"
           ."<td style='  text-align: left;padding: 8px;'>".$startdate."</td>"
           ."</tr>"
           ."<tr style='background-color: #f2f2f2;'>"
           ."<th style='  text-align: left;padding: 8px;'>Subscription end date</th>"
           ."<td style='  text-align: left;padding: 8px;'>".$enddate."</td>"
           ."</tr>"
           ."<tr>"
           ."<th style='  text-align: left;padding: 8px;'>No. of months</th>"
           ."<td style='  text-align: left;padding: 8px;'>3 Months</td>"
           ."</tr>"
           ."</table>"
          .
            "_____________________________________________<br><br><b>HAVE QUESTIONS OR NEED HELP?</b><br><br>"."Let us know! We’ll do everything we can to make sure you love your experience with us. Reach us at empirefitness96@gmail.com or <a href='#'>01100106132</a>. We’re available all days.<br><br>"."<b><span style='color:red;'>Thank you,</span></b><br>Fitness Empire team";
            $mail->send();
            }
}

elseif($program=="pro"){
    $startdate=date("Y/m/d");
    $enddate=date("Y/m/d",strtotime($startdate."+6 month"));
    if(empty($errors)){
        // echo "insert db";
        
        $stm="INSERT INTO brosplitcode (userid,code,startdate,enddate) VALUES ('$id','$code','$startdate','$enddate')";
        $conn->prepare($stm)->execute();
        
        $_POST['code']='';
       
  
        $s[]="Code has been added successfully";
        $stm="SELECT name FROM users WHERE userid ='$id'";
        $q=$conn->prepare($stm);
        $q->execute();
        $data=$q->fetch();
        $name=$data['name'];
         //  mail
          if(empty($errors)){
             require_once 'mail.php';
             $mail->setFrom('empirefitness96@gmail.com','Fitness Empire');
             $mail->addAddress($gmail);
             $mail->Subject='FE - Pro code';
             $mail->Body="<h3 style='color:red;'>Hello ".$name."!</h3>"."<h4>Thanks for getting started with our Fitness Empire Team!</h4>".
             "_____________________________________________<br>".
             "<table style=' border-collapse: collapse;
            width: 100%;'>"
            ."<caption><h3>FE - Pro code</h3></caption>"
            ."<tr style='background-color: #f2f2f2;'>"
            ."<th style='  text-align: left;padding: 8px;'>Code</th>"
            ."<td style='  text-align: left;padding: 8px;'>".$code."</td>"
            ."</tr >"
            ."<tr>"
            ."<th style='  text-align: left;padding: 8px;'>Subscription start date</th>"
            ."<td style='  text-align: left;padding: 8px;'>".$startdate."</td>"
            ."</tr>"
            ."<tr style='background-color: #f2f2f2;'>"
            ."<th style='  text-align: left;padding: 8px;'>Subscription end date</th>"
            ."<td style='  text-align: left;padding: 8px;'>".$enddate."</td>"
            ."</tr>"
            ."<tr>"
            ."<th style='  text-align: left;padding: 8px;'>No. of months</th>"
            ."<td style='  text-align: left;padding: 8px;'>6 Months</td>"
            ."</tr>"
            ."</table>"
           .
             "_____________________________________________<br><br><b>HAVE QUESTIONS OR NEED HELP?</b><br><br>"."Let us know! We’ll do everything we can to make sure you love your experience with us. Reach us at empirefitness96@gmail.com or <a href='#'>01100106132</a>. We’re available all days.<br><br>"."<b><span style='color:red;'>Thank you,</span></b><br>Fitness Empire team";
             $mail->send();
             }
     }
   

}

elseif($program=="platinum"){
    $startdate=date("Y/m/d");
    $enddate=date("Y/m/d",strtotime($startdate."+12 month"));
    if(empty($errors)){
        // echo "insert db";
        
        $stm="INSERT INTO brosplitcode (userid,code,startdate,enddate) VALUES ('$id','$code','$startdate','$enddate')";
        $conn->prepare($stm)->execute();

        $stm="INSERT INTO uplocode (userid,code,startdate,enddate) VALUES ('$id','$code','$startdate','$enddate')";
        $conn->prepare($stm)->execute();

        $stm="INSERT INTO pplcode (userid,code,startdate,enddate) VALUES ('$id','$code','$startdate','$enddate')";
        $conn->prepare($stm)->execute();
        $_POST['code']='';
       
  
        $s[]="Code has been added successfully";
        $stm="SELECT name FROM users WHERE userid ='$id'";
        $q=$conn->prepare($stm);
        $q->execute();
        $data=$q->fetch();
        $name=$data['name'];
          if(empty($errors)){
             require_once 'mail.php';
             $mail->setFrom('empirefitness96@gmail.com','Fitness Empire');
             $mail->addAddress($gmail);
             $mail->Subject='FE - Platinum code';
             $mail->Body="<h3 style='color:red;'>Hello ".$name."!</h3>"."<h4>Thanks for getting started with our Fitness Empire Team!</h4>".
              "_____________________________________________<br>".
              "<table style=' border-collapse: collapse;
             width: 100%;'>"
             ."<caption><h3>FE - Platinum code</h3></caption>"
             ."<tr style='background-color: #f2f2f2;'>"
             ."<th style='  text-align: left;padding: 8px;'>Code</th>"
             ."<td style='  text-align: left;padding: 8px;'>".$code."</td>"
             ."</tr >"
             ."<tr>"
             ."<th style='  text-align: left;padding: 8px;'>Subscription start date</th>"
             ."<td style='  text-align: left;padding: 8px;'>".$startdate."</td>"
             ."</tr>"
             ."<tr style='background-color: #f2f2f2;'>"
             ."<th style='  text-align: left;padding: 8px;'>Subscription end date</th>"
             ."<td style='  text-align: left;padding: 8px;'>".$enddate."</td>"
             ."</tr>"
             ."<tr>"
             ."<th style='  text-align: left;padding: 8px;'>No. of months</th>"
             ."<td style='  text-align: left;padding: 8px;'>12 Months</td>"
             ."</tr>"
             ."</table>"
            .
              "_____________________________________________<br><br><b>HAVE QUESTIONS OR NEED HELP?</b><br><br>"."Let us know! We’ll do everything we can to make sure you love your experience with us. Reach us at empirefitness96@gmail.com or <a href='#'>01100106132</a>. We’re available all days.<br><br>"."<b><span style='color:red;'>Thank you,</span></b><br>Fitness Empire team";
             $mail->send();
             }
     }
    
   
}

}
?>


<div class="container">
        <div class="box">
            <h1>Add Code</h1>
            <form action="admin.php" method="post">
            <?php 
        if(isset($errors)){
            if(!empty($errors)){
                foreach($errors as $msg){
                  ?> <p id="errorms" class="errorms"><?php echo $msg . "<br>";?></p><?php
                }
            }
        }
        if(isset($s))
        {
            if(!empty($s)){
                foreach($s as $msgg){
                  ?> <p id="suc" class="suc"><?php echo $msgg . "<br>";?></p><?php
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
                        <option value="platinum">Platinum</option>
                    </select>
                </div>
            
                <div>
                <i class="fa fa-id-card-o" aria-hidden="true"></i>
                    <input type="number"  id="a" name="id" placeholder="Enter User ID" maxlength="8" minlength="8" required>
                </div>
                
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" id="a"  name="gmail" placeholder="Enter User Gmail" required >
                </div>
                
                <div>
                <i class="fa-solid fa-code"></i>
                    <input type="text" id="g"  name="code" placeholder="Enter Code" required>
                </div>
                <span><a id="btn" class="sign-up"><b>Generate Code</b></a></span> <br>
                <input type="submit" name="submit" value="Add">
            </form>
           <span><a href="index.php" class="sign-up">HOME</a></span> 
     </div>
 </div>

 
<script type="text/javascript">
  
  
    let button = document.getElementById('btn');

button.addEventListener('click', () => {

    var chars="0123456789abcdefghijklmnopqrstuvwxyz0123456789";
        var code="";
        for(var i=0;i<8;i++)
        {
            var randomn=Math.floor(Math.random()*chars.length);
            code+=chars.charAt(randomn);
        }
        document.getElementById("g").value=code;    

});
</script>
</body>
</html>
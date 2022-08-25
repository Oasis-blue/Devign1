<?php
session_start();

$connection=mysqli_connect("localhost", "root", "", "roll");

$selectusers=mysqli_query($connection,"select * from roll.users")
;


/*
$d=date("l, jS");

$dd=date("F,Y");

$date="$d of $dd.";
$t=date("H");

$tt=$t-1;

if($tt<12){
    $a="am";
}else{$a="pm";}*/
$te=date("H");
$tte=$te-1;
$ttt=date(":ia");
$time=$tte.$ttt.($a ?? "");

$date=$_GET['date'];

$check=mysqli_query($connection, "select * from roll.date where dateid='$date'");
$fetch=mysqli_fetch_assoc($check);
$data=$fetch['dateid'];
$gere=mysqli_query($connection,"select * from roll.call where dateid='$data'");

$gera=mysqli_fetch_assoc($gere);
$timee=$gera['time'];
$da=$fetch['date'];

if(mysqli_num_rows($check)>0){
$head="<h1>Roll call for $da submitted at $timee of that day.</h1>
";

}else{
    
    header("Location:roll.php");
    $head="<h1>Roll call for today $date </h1>
    <h2>Time: $time</h2>";}

  
    



?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roll call- check roll</title>
</head>
<style>
    /* Import Google Fonts */
@import url("//fonts.googleapis.com/css2?family=Aldrich:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

/* List Item */
.cont ul li{
 font-size:32px;
 border-bottom-style:solid;
 border-bottom-width:1px;
 display:grid;
 flex-direction:row;
 justify-content:space-around;
 align-items:normal;
 margin-top:10px;
 margin-bottom:10px;
}

/* List Item */
.cont form ul li{
 grid-template-columns:auto 1fr !important;
 width:26% !important;
}

/* Input */
.cont ul input[type=checkbox]{
 position:relative;
 width:31px;
 filter: hue-rotate(271deg) saturate(1.28);
}

/* Input */
.cont form ul li input[type=checkbox]{
 left:51% !important;
}

/* Heading */
.cont form h2{
 font-family:'Aldrich', sans-serif;
}

/* Heading */
.cont form h1{
 font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;
 font-size:35px;
}

/* Body */
body{
 background-color:#bb81fd;
}

/* Back */
.back{
 font-size:21px;
 font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;
}

/* Menu */
nav a{
 font-size:22px;
 font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;
}

/* Input */
.cont form input[type=submit]{
 position:relative;
 font-size:18px;
 margin-left:38px;
}


</style>





<body>
 <a href="check.php" class="back">Go back</a>
 <br>
 <nav><a class="nav" href="check.php">Check other dates</a></nav>
 <div class="cont"> 
 <h3>current time:<?php echo $time ?></h3>
 
<form method="POST">
<?php echo $head; ?>
<u><h2>REPORT</h2></u>
<ul>
    <?php
     while ($getuser=mysqli_fetch_array($selectusers)){  ?>
<li><?php $user=$getuser['userid']; echo $getuser['Name'] ?> ------ <?php  

$ger=mysqli_query($connection,"select * from roll.call where userid='$user' and dateid='$data'");
$rese=mysqli_fetch_array($ger);
$res=$rese['resid'];


$getres=mysqli_query($connection,"select * from roll.resp where resid='$res'");
$resse=mysqli_fetch_array($getres);
$ress=$resse['response'];
echo $ress;

?></li>
<?php
     }




    








?>
</ul>






</form>
 </div>










</body>
</html>
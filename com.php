<?php

$connection=mysqli_connect("localhost","root","mysql","task");


$sn=$_GET["sn"];

$queryrr = "select * from task.task where sn='$sn'";

$resultrr = mysqli_query($connection, $queryrr);
$geta=mysqli_fetch_assoc($resultrr);
$task=$geta['task'];


$quer="insert into task.com (task) values('$task')";
$res=mysqli_query($connection,$quer);
if ($res==1){
$quern="delete from task.task where sn='$sn'";
$resn=mysqli_query($connection,$quern);
header("Location:rem.php");
}else{ echo '<h1>Something went wrong. <a href="rem.php">Go Back</a>'; }

?>
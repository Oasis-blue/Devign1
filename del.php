<?php

$connection=mysqli_connect("localhost","root","mysql","task");


$sn=$_GET["sn"];


$quern="delete from task.task where sn='$sn'";
$resn=mysqli_query($connection,$quern);
if ($resn==1){
header("Location:rem.php");
}else{ echo '<h1>Something went wrong. <a href="rem.php">Go Back</a>'; }

?>
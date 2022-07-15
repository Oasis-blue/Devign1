<?php

$connection=mysqli_connect("localhost","root","mysql","post");


$sn=$_GET["sn"];


$quern="delete from post.post where sn='$sn'";
$resn=mysqli_query($connection,$quern);
if ($resn==1){
header("Location:posts.php");
}else{ echo '<h1>Something went wrong. <a href="posts.php">Go Back</a>'; }

?>
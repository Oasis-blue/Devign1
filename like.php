<?php

$connection=mysqli_connect("localhost","root","","post");


$sn=$_GET["sn"];


$quern="UPDATE post.post SET likes = likes + 1 where sn='$sn'";
$resn=mysqli_query($connection,$quern);
if ($resn==1){
header("Location:posts.php");
}else{ echo '<h1>Something went wrong. <a href="posts.php">Go Back</a>'; }

?>






<?php

if($_POST['j']!=""){
    $color=$_POST['color'];
}
if($color=='#000000'){
    $color1='white';
}

$h=date('h')-1;
$m=date(':i a');
$time=$h.$m;
$date=date('l, jS');
$date2=date('F, Y');
$connection=mysqli_connect("localhost","root","mysql","post");
if($_POST['go']!=""){


    $author=$_POST['author'];
    $title=$_POST['title'];
    $post=$_POST['text'];
    $intro="uploaded by $author, on $date of $date2 at $time.";
if($author!="" && $title!="" && $post!=""){

    $send=mysqli_query($connection, "insert into post.post (author, title, post, intro) values('$author','$title','$post','$intro')");
}
}




$select3=mysqli_query($connection, "SELECT*FROM post.post");

if($select3 and mysqli_num_rows($select3)<1){
    $nopost='<img src="no1.png" width="20%"><br><br>It seems there is no content available right now, you can create a post below';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body{background-color: <?php echo $color; ?>;
    color: <?php echo $color1; ?>;}
.logo{
position: relative;
left:45%;
width: 10%;

}
.make{
position: absolute;
left: 90%;
text-decoration: none; color: black; font-family: Arial, Helvetica, sans-serif;}
/* Navigation */
nav{
 display:flex;
 align-items:center;
}
.make:hover{ color: blue;}
/* Import Google Fonts */
@import url("//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

/* Heading */
.view h1{

 font-family:'Roboto', sans-serif;
}
h2{ font-family:'Roboto', sans-serif;}
/* View */
.view{
 display:grid;
 align-content:center;
 justify-content:center;
 max-width: 60%;
}

/* Heading */
.view h1{
 margin-bottom:1px;
 margin-top:0px;
 text-transform:capitalize;
 text-align:center;
}

/* Paragraph */
.view p{
 margin-top:8px;
 margin-bottom:2px;
 font-size:18px;
 text-align:center;
}

/* Division */
.do{ 

 transform:translatex(0px) translatey(0px);
}

/* Division */
.do{
 position:relative;
 
 width:60% !important;
}

/* Post */
#post{
 font-size:34px;
}

/* Text */
#text{
 font-size:20px;
 font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;
}

/* Author */
#author{
 font-size:20px;
}

/* Title */
#title{
 font-size:20px;
}
/* Import Google Fonts */
@import url("//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

/* Input */
#go{
 font-size:16px;
 cursor: pointer;
}

/* Label */
.do tr label{
 font-size:17px;
 font-family:'Roboto', sans-serif;
}

 



</style>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <nav style="width: 100%;"><a class="logo" href="" ><img src="posts.png" width="100%"></a><a class="make" href="#post" >Make a post</a></nav>

<br>
<form method="post">
change background color?<input type="color" name="color"><input type="submit" name="j"></form>
<br><br>
<b><u><span>Recent Posts:</span></u></b>
<br><center>
<?php echo $nopost;  ?></center>
<?php
while($getdata3=mysqli_fetch_array($select3)){

?>

<center>
    <div style="background-color: <?php echo $getdata3["color"];?>">
<div class="view">
   
<h1><?php echo $getdata3["title"];?></h1>
<i><p><?php echo $getdata3["intro"];?></p></i>
<p><?php echo nl2br($getdata3["post"]);?></p>

</div></div></center>
<br>
<br>

<?php
}
?>
<br>
<table width="100%"><tr><td width="40%" align="center">
<img src="no.png" width="90%" class="no"></td><td width="60%">
<div class="do">
    <h2 id="post">Make a post</h2>

    
<form method="POST" autocapitalize="on"><table cellspacing="20px" width="70%">
    <tr>
        <td valign="middle" width="20%">
<label for="author" >Your name:</label></td><td width="80%"><input id="author" name="author" class="aut" placeholder="your name or pen name" type="text" autocapitalize="words">
</td></tr><tr><br><br>
    <td valign="middle" width="20%">

    <label for="title" >Post title:</label></td><td width="80%"><input id="title" name="title" class="tit" placeholder="enter your post title" type="text" autocapitalize="words" >
    </td>
</tr><tr><td colspan="2">

<textarea style="white-space: pre-wrap;" rows="10" cols="50" placeholder="Write your post here" name="text" id="text" class="text" autocapitalize="on"></textarea>
<br></td></tr><tr><td colspan="2" align="right">
<input type="submit" name="go" id="go" class="go" value="Post">
</td>
</tr>
</table>
</form>

</div>
</td></tr></table>
<br>
<div style="height: 50vh;">

</div>


<div align="center">
<b><a style="font-size: 23px; font-family: Arial, Helvetica, sans-serif;" href="index.php">Back to deVign</a></b>
</div>
<div style="height: 50vh;">

</div>


</body>
</html>
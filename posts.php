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
 max-width: 60vw;
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
 font-size:1.25rem;
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
 font-size:2.1em;
}

/* Text */
#text{
 font-size:1.25rem;
 font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;
}

/* Author */
#author{
 font-size:1.25rem;
}

/* Title */
#title{
 font-size:1.25rem;
}
/* Import Google Fonts */
@import url("//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

/* Input */
#go{
 font-size:1em;
 cursor: pointer;
}

/* Label */
.do tr label{
 font-size:1.1em;
 font-family:'Roboto', sans-serif;
}

 
svg:hover{
    opacity: 0.7;
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
<label for="color">Change background color?</label><input id="color" type="color" name="color"><input type="submit" name="j"></form>
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
<p><i>Likes:</i><?php echo $getdata3["likes"];?> <a title="like this post" href="like.php?sn=<?php echo $getdata3["sn"];?>"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M9 21h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-2c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.58 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2zM9 9l4.34-4.34L12 10h9v2l-3 7H9V9zM1 9h4v12H1z"/></svg></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a title="delete this post" href="postdel.php?sn=<?php echo $getdata3["sn"];?>"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"/></svg></a>

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
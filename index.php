<!DOCTYPE html>
<html>
    <head><title>deVign.io</title></head>
<style>
body{
color: white;

/*background-color: rgb(247, 173, 175);*/
background-color: white;

margin: 0;
}

.a,.b{
 display:inline-block;
 width:196px;
 transform:translatex(27px) translatey(20px);
 height:49px;
}
.a:hover{display: none;}
.b{ transform:translatex(-173px) translatey(20px); opacity: 0;
z-index: 1;}
.b:hover{opacity: 1;}
.top{display: inline
;}
/* List Item */
ul li{
 list-style-type:none;
 list-style-position:outside;
 display:inline;

}
ul .rig a{
    font-family: "Google Sans", Roboto, Arial, Helvetica, sans-serif;
    Font-weight: 400;
    font-size: 1.125;
    padding-right:25px;
 position:relative;
 left:580px;
 color:#ffffff;
}
ul .rig a:hover{opacity:0.7;
text-decoration: underline; }
a{text-decoration: none;}

.nav{
width:100vw;
background-color: black;
min-height: 92px;
position: fixed;
box-shadow:0px 0px 6px 0px #4c4646;
z-index: 100;
}

ul{margin-top: 0;}
/* Image */
.w{
 display:inline-block;
 transform:translatex(277px) translatey(130px);
}
.imagebody{ background-color: black;
min-height: 100vh;

}
.cl{clip-path: polygon(0 10%, 0 100%, 100% 100%, 100% 0);
background-color:  rgb(62, 64, 149);
color: rgb(62, 64, 149);
min-height: 90vh;
margin-top:-15%; transition: 0.15s;
display: flex;
justify-content: center;
align-items: center;

}
.cl p{font-size: 40px;
  font-size:58px;
 position:relative;
 top:-85px;}
.cl:hover{
  background-color: white;
}


.cle{clip-path: polygon(0 10%, 0 100%, 100% 100%, 100% 0);
background-color: black;
min-height: 100vh;
margin-top:-15%;
display: flex;
justify-content: center;
align-items: center;
color:black;
transition: 0.15s;
}

.cle:hover{
 
  color:white
}
/* Import Google Fonts */
@import url("//fonts.googleapis.com/css2?family=Bungee+Shade:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

/* Heading */
.cle h1{
 font-size:63px;
 font-family:'Bungee Shade', display;
 position:relative;
 top:-103px;
}


.clb{clip-path: polygon(0 10%, 0 100%, 100% 100%, 100% 0);
background-color:white;
min-height: 90vh;
margin-top:-15%;
display: flex;
justify-content: center;
align-items: center;}
.clb img{

width:50%;
}















/* Link */
.nav .rig a{
 left:414px;
}

@media (max-width:1200px){

 /* Link */
 .nav .rig a{
  left:262px;
 }
 
}

@media (max-width:1126px){

 /* Link */
 .nav .rig a{
  left:202px;
 }
 
 /* Image */
 .nav a img{
  width:143px;
  height:40px;
 }
 
}

@media (max-width:1029px){

 /* Link */
 .nav .rig a{
  left:151px;
 }
 
}

@media (max-width:918px){

 /* Link */
 .nav .rig a{
  left:138px;
 }
 
}

@media (max-width:872px){

 /* Link */
 .nav .rig a{
  left:108px;
 }
 
}

@media (max-width:850px){

 /* Link */
 .nav .rig a{
  left:334px;
  top:30px;
 }
 
 /* Image */
 .nav a img{
  transform:translatex(-9px) translatey(24px);
  position:absolute;
 }
 
}

@media (max-width:826px){

 /* Link */
 .nav .rig a{
  left:279px;
 }
 
}

@media (max-width:700px){

 /* Link */
 .nav .rig a{
  top:64px;
  left:160px;
 }
 
 /* Image */
 .nav a img{
  transform:translatex(237px) translatey(13px);
 }
 
}

@media (max-width:603px){

 /* Image */
 .nav a img{
  transform:translatex(189px) translatey(12px);
 }
 
 /* Link */
 .nav .rig a{
  left:50px;
 }
 
}

@media (max-width:577px){

 /* Paragraph */
 .cl p{
  transform:translatex(47px) translatey(21px);
 }
 
 /* Heading */
 .cle h1{
  transform:translatex(61px) translatey(0px);
 }
 
 /* Link */
 .nav .rig a{
  left:7px;
 }
 
 /* Image */
 .nav a img{
  transform:translatex(112px) translatey(10px);
 }
 
}

@media (max-width:441px){

 /* Link */
 .nav .rig a{
  display:block;
  top:76px;
 }
 
 /* Menu */
 .nav{
  min-height:92px;
 }
 
 /* Menu (hover) */
 .nav:hover{
  min-height:178px;
 }
 
 /* Link (hover) */
 .nav .rig a:hover{
  display:inline-block;
 }
 
}

@media (max-width:392px){

 /* Link */
 .nav .rig a{
  display:inline-block;
  left:-5px;
  top:64px;
  font-size:13px;
 }
 
 /* Image */
 .nav a img{
  transform:translatex(85px) translatey(9px);
 }
 
}
</style>


<body>
  <div class="nav">
<ul><li>
<a href=""><img src="logo2.png" alt="logo"  class="a" ></a>
<a href=""  ><img src="logo.png" alt="logo" class="b"></a></li>


<li class="rig"><a href="roll.php" class="aa">Roll Call</a></li>
<li class="rig"><a href="/tools.php" class="aa">Tools</a></li>
<li class="rig"><a href="" class="aa">Contact us</a></li>
<li class="rig"><a href="posts.php" class="aa">Posts</a></li>
<li class="rig"><a href="rem.php" class="aa">Tasks</a></li>

</ul></div>
<div>
<a href="tem.php"><img class="w" src="work.svg"></a>
<br><br><br><br><br></div>
<div class="imagebody"><img class="r" src="body222.png" width="100%">


</div>

<div class="cl">
<p>Right up to your doorstep</p>
</div>

<div class="cle">
<h1> Are you ready?</h1>
</div>

<div class="clb">
<img src="body3.png">
</div>

<table ><tr><td style="height: 800px;"></td></tr></table>

</body>


</html>
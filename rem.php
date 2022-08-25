
<?php
//create a variable for database connection
$connection = mysqli_connect("localhost", "root", "", "task");


$task = $_POST["task"] ?? "";


$querycc= mysqli_query($connection,"select*from task.task where task='$task'");
     



if(isset($_POST["submit"])){
    if($_POST["task"]!="")
    
    {       if($querycc && mysqli_num_rows($querycc) > 0){//start2c
        $msgerr='<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zM7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2c.15-2.65 1.51-4.97 3.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43c2.02 1.45 3.39 3.77 3.54 6.42z"/></svg> Task already on list';}else{
    
        {
        $sendd = mysqli_query($connection, "INSERT INTO task.task(task) values('$task')");
      
    } }
    } 
}


    $select=mysqli_query($connection, "SELECT*FROM task.task");

    $select2=mysqli_query($connection, "SELECT*FROM task.com");

    
    $select3=mysqli_query($connection, "SELECT*FROM task.fav");
?>



























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
</head>

<style>
.cont{width:100vw; height: 150vh; background-color: rgba(0, 0, 0, 0.9); /*background-image: url("1657110324502.jpeg"); background-size: cover; background-repeat: no-repeat*/;}
.formholder{width: 50%;

background-color:/* rgb(247, 173, 175);rgb(12, 173, 220);*/white;
}


.fav{width: 50%;

background-color:/* rgb(247, 173, 175);rgb(12, 173, 220);*/white;
}




h1{color: white;}


/* Import Google Fonts */
@import url("//fonts.googleapis.com/css2?family=Barriecito:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

/* Formholder */
.cont .formholder{
 border-top-left-radius:16px;
 border-top-right-radius:16px;
 border-bottom-left-radius:16px;
 border-bottom-right-radius:16px;
}

.cont .fav{
 border-top-left-radius:16px;
 border-top-right-radius:16px;
 border-bottom-left-radius:16px;
 border-bottom-right-radius:16px;
}



/* Heading */
.cont div h1{
 font-family:'Barriecito', display, arial;
 padding-bottom:34px;
}

/* Cont */
.cont{
 display:flex;
 justify-content:center;
 align-items:center;
 flex-direction:column;
}

/* Input */
.formholder form input[type=text]{
 background:none;
 border-style:none;
 border-bottom-style:solid;
 border-bottom-color:#020202;
 border-bottom-width:1px;
 font-size:20px;
 margin-top: 5%;
 width: 90%;
}
.formholder form input[type=text]:focus,.formholder form input[type=text]:active{ outline: none;}
/* Formholder */
.cont .formholder{
 display:flex;
 flex-direction:column;
 align-items:center;
}

/* Form Division */
.cont .formholder form{
 width:90% !important;
 height:90% !important;
 overflow: auto;
}

/* Input */
.formholder form input[type=submit]{
 font-weight:600;
 border-top-left-radius:50%;
 border-top-right-radius:50%;
 border-bottom-left-radius:50%;
 border-bottom-right-radius:50%;
 border-style:none;
 border-top-width:1px;
 border-top-style:solid;
 border-bottom-width:1px;
 border-bottom-style:solid;
 border-left-width:1px;
 border-left-style:solid;
 border-right-width:1px;
 border-right-style:solid;
 font-size:16px;
 background-color:rgba(244,96,96,0);
}

/* Input (hover) */
.formholder form input[type=submit]:hover{ cursor:pointer;
 background-color:#000000;
 color:#ffffff;
}



/* Input */
.fav form input[type=text]{
 background:none;
 border-style:none;
 border-bottom-style:solid;
 border-bottom-color:#020202;
 border-bottom-width:1px;
 font-size:20px;
 margin-top: 5%;
 width: 90%;
}
.fav form input[type=text]:focus,.fav form input[type=text]:active{ outline: none;}
/* Formholder */
.cont .fav{
 display:none;
 flex-direction:column;
 align-items:center;
}

/* Form Division */
.cont .fav form{
 width:90% !important;
 height:90% !important;
 overflow: auto;
}

/* Input */
.fav form input[type=submit]{
 font-weight:600;
 border-top-left-radius:50%;
 border-top-right-radius:50%;
 border-bottom-left-radius:50%;
 border-bottom-right-radius:50%;
 border-style:none;
 border-top-width:1px;
 border-top-style:solid;
 border-bottom-width:1px;
 border-bottom-style:solid;
 border-left-width:1px;
 border-left-style:solid;
 border-right-width:1px;
 border-right-style:solid;
 font-size:16px;
 background-color:rgba(244,96,96,0);
}

/* Input (hover) */
.fav form input[type=submit]:hover{ cursor:pointer;
 background-color:#000000;
 color:#ffffff;
}




button{ color:white; background-color: rgb(12, 173, 220); padding:10%; width:100px; border-radius:15px; border: 2px solid white;
cursor: pointer;
}
button:hover{ background-color: white; color: black;}
svg{cursor: pointer;}

svg:hover{opacity: 0.5;}
/* Paragraph */
.cont .formholder p{
 font-size:19px;}



 .cont .fav p{
 font-size:19px;}


</style>




<body>
    <div class="cont">
        <div><a href="index.php" style="text-decoration: none;"><button>Go back</button></a></div>
<div>
<h1>What do you have in mind for today</h1>
</div>
<div class="formholder" id="todo">
    <p><u><b>To-do list</b></u>  <a id="favbtn" style="text-decoration: none; cursor:pointer; margin-left: 5px;">My favorites</a></p>
    <br>
    <p><?php echo $msgerr ?? ""; ?></p>
<form method="POST">

<input type="text" placeholder="Add a task" name="task"> <input type="submit" name="submit" value="+">
<br><br>
<table width="100%"><ul>
<?php
while($getdata=mysqli_fetch_array($select)){

?>





<tr style="background:none;">
    <td width="80%" style="font-size: 20px;text-transform: capitalize;font-family: Arial, Helvetica, sans-serif;"><li><?php echo $getdata["task"];?></li></td>
    <td width="10%"><a title="remove" href="del.php?sn=<?php echo $getdata["sn"];?>"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M13.05 42q-1.2 0-2.1-.9-.9-.9-.9-2.1V10.5H8v-3h9.4V6h13.2v1.5H40v3h-2.05V39q0 1.2-.9 2.1-.9.9-2.1.9Zm21.9-31.5h-21.9V39h21.9Zm-16.6 24.2h3V14.75h-3Zm8.3 0h3V14.75h-3Zm-13.6-24.2V39Z"/></svg></a></td>
    <td width="10%"><a title="completed" href="com.php?sn=<?php echo $getdata["sn"];?>"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M18.9 35.7 7.7 24.5l2.15-2.15 9.05 9.05 19.2-19.2 2.15 2.15Z"/></svg></a></td>
  
</tr>
<?php } ?></ul>
</table>
<br><br>

<table width="100%">

<tr>
<td colspan="2" align="center" style="font-size: 20px;text-transform: capitalize;font-family: Arial, Helvetica, sans-serif;">
<b><u>Completed</u></b>
</td>

</tr>

<?php
while($getdata2=mysqli_fetch_array($select2)){

?>




<tr style="background:none;">
    <td width="80%" style="font-size: 20px; text-decoration: line-through; text-transform: capitalize;font-family: Arial, Helvetica, sans-serif;"><input type="checkbox" checked style="filter: hue-rotate(279deg);"  /> <?php echo $getdata2["task"];?></td>
    <td width="10%"><a title="delete" href="dele.php?sn=<?php echo $getdata2["sn"];?>"><svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M13.05 42q-1.2 0-2.1-.9-.9-.9-.9-2.1V10.5H8v-3h9.4V6h13.2v1.5H40v3h-2.05V39q0 1.2-.9 2.1-.9.9-2.1.9Zm21.9-31.5h-21.9V39h21.9Zm-16.6 24.2h3V14.75h-3Zm8.3 0h3V14.75h-3Zm-13.6-24.2V39Z"/></svg></a></td>
    <td width="10%"><a title="add to favorites" href="fav.php?sn=<?php echo $getdata2["sn"];?>"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
</a></td>
    
</tr>
<?php } ?>
</table>

</form>
</div>




<div class="fav" id="fave">
<p><a id="listbtn" style="text-decoration: none; cursor:pointer; margin-left: 5px;">To-do list  </a> <u><b>  My favorites</b></u></p>
 
    <br>
    
<form method="POST">

<br><br>
<table width="100%"><ul>
<?php
while($getdata3=mysqli_fetch_array($select3)){

?>





<tr style="background:none;">
    <td width="80%" style="font-size: 20px;text-transform: capitalize;font-family: Arial, Helvetica, sans-serif;"><li><?php echo $getdata3["task"];?></li></td>
    <td width="10%"><a title="remove" href="remove.php?sn=<?php echo $getdata3["sn"];?>"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11H7v-2h10v2z"/></svg></a></td>
    <td width="10%"><a title="add to list" href="add.php?sn=<?php echo $getdata3["sn"];?>"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg></a></td>
  
</tr>
<?php } ?></ul>
</table>
<br><br>


</form>
</div>


    </div>





    <script>


var fav=document.getElementById("fave");
var favbtn=document.getElementById("favbtn");
var todo=document.getElementById("todo");

favbtn.onclick=function(){fav.style.display="flex";todo.style.display="none";}


</script>
<script>
var fav=document.getElementById("fave");
var todo=document.getElementById("todo");
var listbtn=document.getElementById("listbtn");


listbtn.onclick=function(){fav.style.display="none";todo.style.display="flex";}


</script>







</body>
</html>
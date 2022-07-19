<?php
session_start();

$connection=mysqli_connect("localhost", "root", "mysql", "roll");

$selectdate=mysqli_query($connection,"select * from roll.date")
;
?>






<br>
<Br>
<Br>

<a href="roll.php">Go Back</a>
<br>
<Br>


<?php



while($getdate=mysqli_fetch_array($selectdate)){
    $dateid=$getdate['dateid'];
    $datee=$getdate['date'];
    echo "<a href=checkd.php?date=$dateid>$datee</a><br>";
}






?>
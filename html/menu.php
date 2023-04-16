
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Menu</title>
</head>
<body>


<?php
include('config.php'); 
$vragen = $con->query("SELECT * FROM heertgerechten ");
while($row = $vragen->fetch(PDO::FETCH_ASSOC)){
    echo"
<section class='allegerechten'>
<div class='card'>
    <div class='cardimg'>
        <img src='/gerechtenimg/$row[img]'>
    </div>
    <div class='cardinfo'>
        <h2>$row[naam]</h2>
        <h3>$row[prijs]</h3>
    </div>
    <div class='naarmandtje'>
    <a href='configorder.php?id=$row[id]' name='naarmand'><i  class='fa-solid fa-cart-plus'></i></a>
    </div>
</div>
</section>
    ";
}
if ($vragen->rowCount() == 0) {    echo "<center>
    <h2 style='color:white'>De database is leeg.</h2>
          </center>";
}
?>
   <a id="naarhome" href="index.php"><i id="naarhome" class="fa-solid fa-arrow-left"></i></a>
   <a id="mandje" href="naarmand.php"><i id="mandje" class="fa-solid fa-cart-shopping"></i></a>
</body>
</html>
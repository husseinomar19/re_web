
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
$vragen = $con->query("SELECT * FROM heertgerechten");
while($row = $vragen->fetch()){
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
    <div class='verwijderen'>
    <a href='delete.php?id=$row[id]'><i class='fa-solid fa-trash'></i></a>
    </div>
</div>
</section>
    ";
}
?>

   <div class="toadmin">
            <i class="fa-solid fa-arrow-left"></i>
            <a href="admin.php">terug naar admin pagina</a>
   </div>
</body>
</html>
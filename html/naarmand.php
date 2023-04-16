<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/mand.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Mijn bestellingen</title>
</head>
<body>
<header>
        <nav>
            <h2>Hethalvehert.nl</h2>
            <ul>
                <li><a href="menu.php">Menu</a></li>
            </ul>
        </nav>
    </header>
    <div class="main">
        <div class="ouders">

        <?php 
include('config.php');
$client_order = $con->query("SELECT * FROM winkle");
while($row_order = $client_order->fetch()){
    echo "
    <div class='bestel'>
    <table>
        <tr>
            <td>$row_order[naam]</td>
            <td>$row_order[prijs]</td>
            <td><select>
                <option value='1'>1</option>
                <option value='1'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
            </select></td>
            <td><a href='deleteorder.php? orderid=$row_order[orderid]'><i class='fa-solid fa-trash'></i></a></td>
        </tr>
    </table>
    </div>  
    ";
}
if ($client_order->rowCount() == 0) {
    echo "<center>
    <h2 style='color:white'>U heeft geen bestellingen.</h2>
          </center>";
}
?>

          
            
            
        </div>
    </div> 
</body>
</html>
<?php
include('config.php');
    $ID_order = $_GET['id'];
    $up_order = $con->query("SELECT * FROM heertgerechten WHERE id = $ID_order");
    $data_order = $up_order->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bevstigen.css">
    <title>Config</title>
</head>
<body>
    <form method="post">
        <h2>U bestelling bevestigen</h2>
        <input name="id" type="text" value="<?php echo $data_order['id'];?>">
        <input name="naam" type="text" value="<?php echo $data_order['naam'];?>">
        <input name="prijs" type="text" value="<?php echo $data_order['prijs'];?>">
        <button name="bevstigen">Bevestigen</button>
    </form>
</body>
</html>
<?php
include('config.php');
if(isset($_POST['bevstigen'])){
   $id_client = $_POST['id'];
   $order_naam= $_POST['naam'];
   $order_prijs= $_POST['prijs']; 
   $order_naar_data= " INSERT INTO winkle ( orderid, naam , prijs) VALUE ( '$id_client' , ' $order_naam' , '$order_prijs')"; 
   $con->query($order_naar_data);
   header('location: menu.php');
}


?>

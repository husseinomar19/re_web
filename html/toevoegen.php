<?php
include('config.php');
if(isset($_POST['upload'])){
    $NAME = $_POST['gerachtnaam'];
    $PRIJS = $_POST['prijs'];
    $IMG = $_FILES['img'];
    $IMGLOCATION = $_FILES['img']['tmp_name'];
    $IMGNAAM = $_FILES['img']['name'];
    $IMGUP = $IMGNAAM;
    $stmt = $con->prepare("INSERT INTO heertgerechten (naam, prijs, img) VALUES (:naam, :prijs, :img)");

    // Bind the parameters
    $stmt->bindParam(':naam', $NAME);
    $stmt->bindParam(':prijs', $PRIJS);
    $stmt->bindParam(':img', $IMGUP);

    // Execute the statement
    $stmt->execute();
    if(move_uploaded_file($IMGLOCATION,'C:\xampp\htdocs\gerechtenimg/'.$IMGNAAM )){
        echo"<script type='text/javascript'>alert('goed gegeves');</script>";
    }else{
        echo"<script type='text/javascript'>alert('niet goed gegeves');</script>";
    }
}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/toevoegen.css">
    <title>toevoegen</title>
</head>
<body>
    <main>
    <header>
        <h2>Hethalvehert.nl</h2>
        </header>
        <section class="gerchttoevoegen">
              <form action="" method="post" enctype="multipart/form-data">
                <label for="gerachtnaam">Gerecht naam</label>
                <input type="text" name="gerachtnaam" required>
                <label for="prijs">Prijs</label>
                <input type="text" name="prijs" required>
                <input type="file" name="img" id="img" >
                <label id="imglabel" for="img">Afbeelding toevoegen</label>
                <button name="upload">Gerecht toevoegen</button>
              </form>
        </section>
        <div class="backtoadmin">
            <a href="menu.php">Alle Gerechten weergeven</a>
            <div class="toadmin">
            <i class="fa-solid fa-arrow-left"></i>
            <a href="admin.php">terug naar admin pagina</a>
            </div>
        </div>
    </main>
    
    
</body>
</html>
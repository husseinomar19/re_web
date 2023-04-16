<?php
include('config.php');

if(isset($_POST['aanpas'])){
    $ID = $_POST['id'];
    $NAME = $_POST['gerachtnaam'];
    $PRIJS = $_POST['prijs'];
    $IMG = $_FILES['img'];
    $IMGLOCATION = $_FILES['img']['tmp_name'];
    $IMGNAAM = $_FILES['img']['name'];
    $IMGUP = $IMGNAAM;

    $update = "UPDATE heertgerechten SET naam = :naam, prijs = :prijs, img = :img WHERE id = :id";
    $stmt = $con->prepare($update);
    $stmt->bindParam(':naam', $NAME);
    $stmt->bindParam(':prijs', $PRIJS);
    $stmt->bindParam(':img', $IMGUP);
    $stmt->bindParam(':id', $ID);

    if ($stmt->execute() && move_uploaded_file($IMGLOCATION, 'C:\xampp\htdocs\gerechtenimg/'.$IMGNAAM)) {
        echo "<script type='text/javascript'>alert('goed aangepast');</script>";
    } else {
        echo "<script type='text/javascript'>alert('niet goed aangepast');</script>";
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
    <title>aanpassen</title>
</head>
<body>
<?php
include('config.php');

$ID = $_GET['id'];
$up = $con->prepare("SELECT * FROM heertgerechten WHERE id=:id");
$up->bindParam(':id', $ID, PDO::PARAM_INT);
$up->execute();

$data = $up->fetch(PDO::FETCH_ASSOC);
?>

    <main>
    <header>
        <h2>Hethalvehert.nl</h2>
        </header>
        <section class="gerchttoevoegen">
              <form action="" method="post" enctype="multipart/form-data">
                <label for="id">ID</label>
                <input type="text" name="id" value="<?php echo $data['id'];?>">
                <label for="gerachtnaam">Geracht naam</label>
                <input type="text" name="gerachtnaam" required value="<?php echo $data['naam'];?>">
                <label for="prijs">Prijs</label>
                <input type="text" name="prijs" required value="<?php echo $data['prijs'];?>">
                <input type="file" name="img" id="img" >
                <label id="imglabel" for="img">Afbeelding aanpassen</label>
                <button name="aanpas">Geracht aanpassen</button>
              </form>
        </section>
        <div class="backtoadmin">
            <div class="toadmin">
            <i class="fa-solid fa-arrow-left"></i>
            <a href="admin.php">terug naar admin pagina</a>
            </div>
        </div>
    </main>
    
    
</body>
</html>
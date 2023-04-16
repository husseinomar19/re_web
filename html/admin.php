<?php
session_start();
if($_SESSION['logged_in'] == true)
{

}
else
{
     header('location: inloggen.php');
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
    <link rel="stylesheet" href="/css/admin.css">
    <title>admin</title>
</head>
<body>
    <main>
        <header>
        <h2>Hethalvehert.nl</h2>
        </header>
        <div class="adminicon">
        <i class="fa-solid fa-user"></i>
        </div>
        <div class="options">
            <div class="option1">
            <i class="fa-solid fa-circle-plus"></i>
            <a href="toevoegen.php">Gerecht toegoegen</a>
            </div>
            <div class="option1">
            <i class="fa-sharp fa-solid fa-arrow-rotate-left"></i>
            <a href="aanpassen.php">Gerecht aanpassen</a>
            </div>
            <div class="option1">
            <i class="fa-solid fa-trash"></i>
            <a href="verwijderen.php">Gerecht verwijderen</a>
            </div>
        </div>
        <div class="naarhome">
            <a href="index.php">Home</a>
            <a href="re1.php">Gereserveerde tafels</a>
        </div>
    </main>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/re.css">
    <title>Reserveren</title>
</head>
<body>
<header>
        <nav>
            <h2>Hethalvehert.nl</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="re.php">Reserveren</a></li>
            </ul>
        </nav>
    </header>
   <section>
    <div class="form">
        <form action="re.php" method="post">
            <label for="naam">Naam</label>
            <input type="text" name="naam">
            <label for="mensen">Antal mensen</label>
            <input type="text" name="mensen">
            <label for="datum">Datum</label>
            <input type="date" name="datum">
            <button type="submit" name="re">Reserveren</button>
        </form>
    </div>
   </section> 
</body>
</html>
<?php
include('config.php');
  
if(isset($_POST['re']))
{
    if(empty($_POST['naam']) && empty($_POST['mensen']) && empty($_POST['datum']) )
    {
        echo"<script>alert('vul u reserveren in ')</script>"; 
    }else
    {
        $stmt = $con->prepare("INSERT INTO reserveren (naam, mensen, datum) VALUES (:naam, :mensen, :datum)");
        $stmt->bindParam(':naam', $_POST['naam']);
        $stmt->bindParam(':mensen', $_POST['mensen']);
        $stmt->bindParam(':datum', $_POST['datum']);
        $stmt->execute();  
    }


}


?>
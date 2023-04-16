<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/re1.css">
    <title>Reserveren</title>
</head>
<body>
<header>
        <nav>
            <h2>Hethalvehert.nl</h2>
            <ul>
                <li><a href="admin.php">Admin pagina</a></li>
            </ul>
        </nav>
    </header>

<section>
 <?php
    include('config.php'); 
    $vragen = $con->query("SELECT * FROM reserveren");
    while($row = $vragen->fetch(PDO::FETCH_ASSOC)){
        echo"
        <div class='reserveren'>
        <h2>$row[naam]</h2>
        <h2>$row[mensen]</h2>
        <h2>$row[datum]</h2>
        <a id='wei' href='weigeren.php? reid={$row['id']}'>Weigeren</a>
        <button id='acc' onclick='changeText(this)'>Accepteren</button>
    </div>
        ";
    }
    if ($vragen->rowCount() == 0) {
        echo "<center>
        <h2 style='color:black'>Geen gereserveerde tafels.</h2>
              </center>";
    }
    ?>
<script>
    function changeText(button) {
     button.textContent = "Gereserveerd";  
     let weigeren = document.getElementById('wei');
     weigeren.style.display = "none";
     document.cookie = "weigeren_visibility=hidden; expires=Thu, 01 Jan 2099 00:00:00 UTC; path=/;";
}

///
if (document.cookie.indexOf("weigeren_visibility=hidden") !== -1) {
  const weigeren = document.getElementById('wei');
  weigeren.style.display = "none";
}
</script>
    
</section>
</body>
</html>
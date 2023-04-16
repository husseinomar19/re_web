<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hethalvehert</title>
</head>
<body>
<main class="main">
    <!--Hier komt de header en de nav en zit in alle links naar andere paginas -->
    <header>
        <nav>
            <h2>Hethalvehert.nl</h2>
            <ul>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="#overteam">Over ons</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="re.php">Reserveren</a></li>
            </ul>
            <a id="mandje" href="naarmand.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <a id="inloggen" href="/html/inloggen.php">Inloggen</a>
        </nav>
    </header>
    <!--Hier komt stuke tekst over het resuatrant en een knop om te bestellen-->
    <div class="intromain">
        <div class="intro">
            <h2>Welkom bij ons steak restaurant, waar u kunt genieten van de beste kwaliteit steaks die perfect bereid zijn om uw smaakpapillen te prikkelen.</h2>
            <i class="fa-solid fa-burger"></i>
        </div>
    </div>

    <i id="up" class="fa-sharp fa-solid fa-arrow-up"></i>
</main>
<section class="overonscontact">
     <div class="overons">
        <div class="over">
        <i class="fa-solid fa-burger"></i>
        <ul>
            <li><h2>Diner</h2></li>
            <li> <p>Gezellig, betaalbaar en lekker dineren? Kom dan naar Hethalvehert in Venray. Vanaf 17:00u kun je genieten van onze heerlijk diner gerechten!</p></li>
        </ul>
        </div>
        <div class="over">
        <i class="fa-solid fa-bacon"></i>
        <ul>
            <li><h2>Lunch</h2></li>
            <li><p>Kom je ook lunchen bij Hethalvehert in Venray? Vanaf 11:00u tot 16:30u kun je genieten van de lekkerste lunch gerechten!</p></li>
        </ul>
        </div>
     </div>
</section>

<section class="overteam" id="overteam"> 
   <div class="teamtekst">
    <h2 id="overonstit">Over Ons</h2>
     <h2>Het team van Hethalvehert heet u van harte welkom!</h2>
     <p>Lekker & betaalbaar uiteten, prijs/kwaliteit, u laten genieten van onze vers en met liefde bereide gerechten en top service, dat is waar we voor staan bij Steaks.

    Onze naam zegt het al… STEAKS. Ons restaurants is voornamelijk gericht op vlees. Lekker vlees begint bij het beste rund! Ons rundvlees is van de beste kwaliteit en komt uit eigen omgeving. Bij ons kunt u dan ook zelf bepalen hoeveel gram het mag zijn, hoe u het graag gebakken heeft en wat voor saus u daar het liefst bij neemt.

    And More…? Iedereen is welkom! Onze menukaart is breed dus of u nu een vlees of een viseter bent, een grote of een kleine eter, wij hebben voor ieder wat wils.</p>
   </div>
   <div class="teamimg">
    <img src="/img/restuarantfoto.jpg" alt="restuarant img">
   </div>
</section>

<section class="aandacht-vlees">
       <div class="vleesimg">
         <img src="/img/overimg.png" alt="Steak afbeelding">
       </div>
       <div class="vlessbeschrijving">
        <h2>Hethalvehert</h2>
        <h3>Aandacht Voor Ons Vlees</h3>
        <p>Bij Hethalvehert besteden wij natuurlijk veel aandacht aan ons vlees. Alleen met de beste kwaliteit nemen onze koks genoegen. Bij Steaks and More serveren wij het vlees van de Belgische – Wit Blauwe runderen, deze runderen zijn ronduit indrukwekkend te noemen. Dit komt mede door hun volume, ronde vormen en sierlijke lijnen. Het vlees is mals dankzij de fijne musculaire structuur en een laag vetpercentage.</p>
        <br>
        <p>Niet alleen de tournedos, entrecôte en rib eye zijn van zeer goede kwaliteit, maar ook het vlees van onze heerlijke 100%  rundvlees hamburgers die ieder maar liefst 200 gram wegen! Het gehakt dat gebruikt wordt voor de smaakvolle hamburgers is afkomstig van een rund uit de Ardennen, genaamd Boeuf d’Ennal. De vrouwelijke runderen leven in de Ardennen, onder ideale omstandigheden, gecombineerd met voeding dat enkel bestaat uit vers gras en hooi, zorgt dit ervoor dat het donkerrode vlees zeer smaakvol en uniek is. Vanwege de uitstekende kwaliteit van het vlees serveren wij onze burgers graag medium, mocht u anders wensen dan horen wij dit graag!</p>
       </div>
</section>

<section class="contactform">
       <form action="" method="post">
       <div class="container">
            <input class="input" name="naam" type="text" required="">
             <label class="label">Naam</label>
        </div>
        <div class="container">
            <input class="input" name="email" type="text" required="">
             <label class="label">Email</label>
        </div>

        <textarea name="sms" cols="30" rows="10"></textarea>
        <button name="verzenden">Verzenden</button>
       </form>

</section>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require_once 'src/Exception.php';
require_once 'src/PHPMailer.php';
require_once 'src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'batoaster@gmail.com';              // SMTP username
    $mail->Password   = 'yucyhplgjjqjudjz';              // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($_POST['email'], $_POST['naam']);                 // Set the sender email address and name
    $mail->addAddress('batoaster@gmail.com', $_POST['email']);         // Add a recipient email address and name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Feedback from ' . $_POST['naam'] .$_POST['email'];
    $mail->Body    = $_POST['sms'];

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>



<footer id="contact">
    <div class="halfheeftlogo">
    <h2>Hethalvehert.nl</h2> 
    </div>
    <div class="contact">
        <h2>Openingstijden Keuken</h2>
     <table>
        <tbody>
            <tr>
                <td>Maandag</td>
                <td>11:00 - 21:00</td>
            </tr>
            <tr>
                <td>Dinsdag</td>
                <td>11:00 - 21:00</td>
            </tr>
            <tr>
                <td>Wonsdag</td>
                <td>11:00 - 21:00</td>
            </tr>
            <tr>
                <td>Donderdag</td>
                <td>11:00 - 21:00</td>
            </tr>
            <tr>
                <td>Vrijdag</td>
                <td>11:00 - 21:00</td>
            </tr>
            <tr>
                <td>Zaterdag</td>
                <td>11:00 - 21:00</td>
            </tr>
            <tr>
                <td>Zondag</td>
                <td>Gesloten</td>
            </tr>
        </tbody>
    
    </table>
    </div>
    <div class="contact">
        <h2>Contact</h2>
        <table>
        <tbody>
            <tr>
                <td>Halfheerftplein 24</td>
            </tr>
            <tr>
                <td>4557 BA Venray</td>
            </tr>
            <tr>
                <td>T: 0488-553 681</td>
            </tr>
            <tr>
                <td>E: info@halfheert.nl</td>
            </tr>
        </tbody>
    </table>
    <div class="media">
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-instagram"></i>
    </div>
    </div>
</footer>

 
    
    <script src="/javascript/main.js"></script>
</body>
</html>

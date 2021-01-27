<?php  
    include '../database.php';
    $db = new database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>FlowerPower</title>
</head>
<body>
    <div id="wrapper">
        <header>
            <div class="logo">
            <a href="../index.php"><img src="../img/logo.png" alt=""></a>
            </div>
            <div class="title">
                <span>FlowerPower</span>
            </div>
        </header>
        <div id="main">
            <nav>
            <ul>
                <li><a href="../pages/loginEmployee.php">Inloggen Medewerkers</a></li>
                <li><a href="../pages/loginEmployee.php">Inloggen Klanten</a></li>
                <li><a href="#">Registreren</a></li>
                <li><a href="../pages/contact.php">Contact pagina</a></li>
            </ul>
            </nav>
            <div id="content" class="contactContent">
                <div class="ctrow">
                    <div class="ctblk">
                        <span class="ctTitle">Ons adres</span><br /><br />
                        <span class="ctInfo">De Gildeplein 22</span><br />
                        <span class="ctInfo">1446 BB Purmerend</span>
                    </div>
                </div>
                <div class="ctrow">
                    <div class="ctblk">
                        <span class="ctTitle">U kunt ons bereiken op</span><br /><br />
                        <span class="ctInfo">Tel: 0299 - 123 456</span><br />
                        <span class="ctInfo">Email: info@flowerpower.nl</span>
                    </div>
                </div>
                <div class="ctrow">
                    <span class="ctTitle">Openings Tijden</span><br /><br />
                    <div class="ctdblk">
                        <div  class="optimes">
                            <span class="ctInfo">Maandag</span><br /><br />
                            <span class="ctInfo">Dinsdag</span><br /><br />
                            <span class="ctInfo">Woensdag</span><br /><br />
                            <span class="ctInfo">Donderdag</span><br /><br />
                            <span class="ctInfo">Vrijdag</span><br /><br />
                            <span class="ctInfo">Zaterdag</span><br /><br />
                            <span class="ctInfo">Zondag</span><br /><br />
                        </div>
                        <div  class="optimes">
                            <span class="ctInfo">09:00 - 18:00</span><br /><br />
                            <span class="ctInfo">09:00 - 18:00</span><br /><br />
                            <span class="ctInfo">09:00 - 18:00</span><br /><br />
                            <span class="ctInfo">09:00 - 18:00</span><br /><br />
                            <span class="ctInfo">09:00 - 18:00</span><br /><br />
                            <span class="ctInfo">09:00 - 18:00</span><br /><br />
                            <span class="ctInfo">Gesloten</span><br /><br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
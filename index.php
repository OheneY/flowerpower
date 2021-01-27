<?php  
    include 'database.php';
    $db = new database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>FlowerPower</title>
</head>
<body>
    <div id="wrapper">
        <header>
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="title">
                <span>FlowerPower</span>
            </div>
        </header>
        <div id="main">
            <nav>
            <ul>
                <li><a href="pages/loginEmployee.php">Inloggen Medewerkers</a></li>
                <li><a href="pages/loginEmployee.php">Inloggen Klanten</a></li>
                <li><a href="#">Registreren</a></li>
                <li><a href="pages/contact.php">Contact pagina</a></li>
            </ul>
            </nav>
            <div id="content">
                <div class="fpimg">
                    <img src="img/boeket.jpg" alt="">
                </div>
                <div class="fpimg">
                    <img src="img/winkel.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

</body>
</html>
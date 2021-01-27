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
    <link rel="stylesheet" href="../styles/loginForm.css">
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
                <li><a href="../pages/loginCustomer.php">Inloggen Klanten</a></li>
                <li><a href="#">Registreren</a></li>
                <li><a href="../pages/contact.php">Contact pagina</a></li>
            </ul>
            </nav>
            <div id="content">
            <div class="form">
                    <div class="formTitle">
                        <span>Login Klanten</span>
                    </div>
                    <form action="">
                        <div class="fmrow">
                            <div class="fmblk">
                                <label for="">Gebruikersnaam:</label>
                            </div>
                            <div class="fmblk">
                                <input type="text">
                            </div>
                        </div>
                        <div class="fmrow">
                            <div class="fmblk">
                                <label for="">Wachtwoord:</label>
                            </div>
                            <div class="fmblk">
                                <input type="password">
                            </div>
                        </div>
                        <div class="fmrow">
                            <input class="loginBtn" value="Login" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
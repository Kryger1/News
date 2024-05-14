<?php
require "settings/init.php";


$abonnems = $db->sql("SELECT * FROM abonnem");
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Abonnement</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@700&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<header class="app-header">
    <div class="text-center">
        <a href="index.php">
            <img class="logo" src="images/Logo.png" alt="Logo">
        </a>
    </div>
</header>
<br>
<div class="text-center">
    <h1 class="">Tilmeld dig </h1>
</div>
<br>
<div class="info container-fluid">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="abonnement.php" method="post">
                <div class="mb-4">
                    <label for="webName" class="form-label">Mellems grupper <span class="required-field">*</span></label>
                    <select class="form-select" id="webName">
                        <option value="" disabled selected hidden></option>
                        <?php
                        foreach ($abonnems as $abonnem) {
                            echo '<option value="'.$abonnem->abonnemPris.'">'.$abonnem->abonnemName.'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="navn" class="form-label">Navn <span class="required-field">*</span></label>
                    <input type="text" class="form-control" id="navn" placeholder="Indtast dit navn">
                </div>
                <div class="mb-4">
                    <input type="radio" id="privatperson" name="abonnementstype" value="privatperson" checked>
                    <label for="privatperson">Privatperson</label>
                    <input type="radio" id="firma" name="abonnementstype" value="firma">
                    <label for="firma">Firma/organisation</label>
                </div>
                <div class="mb-4">
                    <label for="adresse" class="form-label">Adresse <span class="required-field">*</span></label>
                    <textarea class="form-control" id="adresse" placeholder="Gadeadresse, postnummer, by"></textarea>
                </div>
                <div class="mb-4">
                    <label for="telefonnummer" class="form-label">Telefonnummer <span class="required-field">*</span></label>
                    <input type="text" class="form-control" id="telefonnummer" placeholder="Indtast dit telefonnummer">
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">E-mail <span class="required-field">*</span></label>
                    <input type="email" class="form-control" id="email" placeholder="Indtast din e-mail">
                </div>
                <div class="mb-4">
                    <label for="adgangskode" class="form-label">Adgangskode <span class="required-field">*</span></label>
                    <input type="password" class="form-control" id="adgangskode" placeholder="Indtast en adgangskode">
                </div>
                <div class="mb-4">
                    <label for="gentag-adgangskode" class="form-label">Gentag adgangskode <span class="required-field">*</span></label>
                    <input type="password" class="form-control" id="gentag-adgangskode" placeholder="Gentag adgangskoden">
                </div>
                <div class="mb-4">
                    <label for="betalingsmetode" class="form-label">Betalingsmetode <span class="required-field">*</span></label>
                    <select class="form-control" id="betalingsmetode">
                        <option value="kreditkort">Kreditkort</option>
                        <option value="paypal">PayPal</option>
                        <option value="bankoverførsel">Bankoverførsel</option>
                    </select>
                    <div class="mb-4">
                        <label for="pris" class="form-label">Abonnementspris</label>
                        <input type="text" class="form-control" id="pris" value="

                        <?php echo number_format($abonnems->abonnemPris) . ' DKK'; ?>" readonly>

                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="vilkår" required>
                        <label class="form-check-label" for="vilkår">Jeg accepterer <a href="#">vilkårene</a></label>
                    </div>
                    <br>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary">Tilmeld</button>
                    </div>
            </form>
        </div>
        <br>
        <div class="container text-center">
            <div class="home">
                <a href="index.php">
                    <img class="home img" src="images/home.png" alt="home" style="width: 40px; height: auto;">
                </a>
            </div>
        </div>
        <br>
        <br>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>



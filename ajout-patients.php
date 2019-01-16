<?php
include 'model/patients.php';
include 'controler/ajout-patientsCtrl.php';
?>
    <!doctype HTML>
    <html lang="fr">
        <head>
            <meta charset ="utf-8"/>
            <title>JBHospital</title>
            <!-- Library -->
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
            <!-- CSS -->
            <link rel="stylesheet" type="text/css" href="assets/style.css">
            <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
            <!--FavIcon -->
            <link rel="icon" type="image/png" href="assets/img/heal.png"/>
        </head>
        <?php
        include 'header.php';
        var_dump($_POST, $formError);
        ?>
        <?php
        if ($isSuccess){?>
        <p class="text-success">Bravo!</p>
            <?php 
        }
        ?>
        <div class="backG">
            <div class="container">
                <h1>Ajout d'un patient</h1>
                <hr class="underLine">
                <form method="POST" action="">
                    <div class="row">
                        <div class="col-sm">
                            <p>Votre Prénom</p>
                            <input type="text" name="firstname" placeholder="Prenom" required/>
                        </div>
                        <div class="col-sm">
                            <p>Votre Nom</p>
                            <input type="text" name="lastname" placeholder="Nom" required/>
                        </div>
                        <div class="col-sm">
                            <p>Votre date de naissance</p>
                            <input type="date" name="birthdate" placeholder="Date de Naissance" required/>
                        </div>
                    </div>       
                    <hr>
                    <div class="row">
                        <div class="col-sm">
                            <p>Votre Email</p>
                            <input type="email" name="mail" placeholder="Mail" required/>
                        </div>

                        <div class="col-sm">
                            <p>Votre numéro de téléphone</p>
                            <input type="tel" name="phone" placeholder="Téléphone" required/>
                        </div>
                    </div>                       
                    <hr>
                    <input type="submit" value="submit" name="submit" class="btn btn-dark"/>
                </form>
        </div>             
    </div>
        <?php
        include 'footer.php';
        ?>
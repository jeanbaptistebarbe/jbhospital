<?php
include 'model/patients.php';
include 'controler/updatePatientsCtrl.php';
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
        <link rel="stylesheet" type="text/css" href="assets/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/> 
        <!--FavIcon -->
        <link rel="icon" type="image/png" href="assets/img/heal.png"/>
    </head>
    <?php
    include 'header.php';
    ?>
    <body>
        <?php
        if ($isPatient) {
            ?>
            <div class="jbh">
                <p>Nom :<?= $patients->lastname ?></p>
                <p>Prenom :<?= $patients->firstname ?></p>
                <p>Date de naissance :<?= $patients->birthdate ?></p>
                <p>Email :<?= $patients->mail ?></p>
                <p>Téléphone :<?= $patients->phone ?></p>
            </div>
            <div class="jbh">
                <form method="POST" action="profil.php?id=<?= $patients->id ?>">
                    <input type="text" name="lastname" placeholder="<?= $patients->lastname ?>" value="<?= $patients->lastname ?>"/>
                    <input type="text" name="firstname" placeholder="<?= $patients->firstname ?>" value="<?= $patients->firstname ?>"/>
                    <input type="date" name="birthdate" placeholder="<?= $patients->birthdate ?>" value="<?= $patients->birthdate ?>"/>
                    <input type="text" name="mail" placeholder="<?= $patients->mail ?>" value="<?= $patients->mail ?>"/>
                    <input type="text" name="phone" placeholder="<?= $patients->phone ?>" value="<?= $patients->phone ?>"/>
                    <div class="modifPro">
                        <input type="submit" value="Valider" name="submit" class="btn btn-dark"/>
                    </div>
                </form>
            </div>
            <?php
        } else {
            ?>
        <div class="jbh">Le patient n'a pas été trouvé!</div>
        <?php
            
        }
            ?>
        </body>
    <?php
    include 'footer.php';
    ?>
</html>

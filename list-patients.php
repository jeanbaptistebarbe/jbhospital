<?php
include 'model/patients.php';
include 'controler/list-patientsCtrl.php';
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
    ?>
    <body>
<?php foreach ($patients as $patients) { ?>         
        <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Detail</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td><a href="profil.php?id=<?= $patients->id ?>">Détail</a></td>
      <td><?= $patients->lastname ?></td>
      <td><?= $patients->firstname ?></td>
      <td><?= $patients->birthdate ?></td>
      <td><?= $patients->mail ?></td>
      <td><?= $patients->phone ?></td>
    </tr>
  </tbody>
</table>
        <?php } ?> 
    </body>
</body>        
<footer class="pageDown">
    <!-- creation du footer -->
    <div class="row">
        <div class="pageDown col-sm-12 col-md-4 col-xl-4">
            <div><img src="assets/img/heal.png" alt="logoHeal" height="50" width="50"></div>
        </div>
    </div>
    <div class="row">
        <div class="pageDown col-sm-12 col-md-4 col-xl-4">
            <div class="">
                <div>conditions d'utilisations</div>
                <div>confidentialité</div>
                <div>cookies</div>
            </div>
        </div>
        <div class="pageDown col-sm-12 col-md-4 col-xl-4">
            <div>derniers articles</div>
            <a href="ajout-patients.php">ajouter un patient</a> 
        </div>
        <div class="pageDown col-sm-12 col-md-4 col-xl-4">
            <div class="">JBHospital</div>
            <div>A propos</div>
            <a href="#"><div>Nous contacter</div></a>                
        </div>
    </div>
</div>
<div class="pageDown placeCopy col-sm-12 col-md-12 col-xl-12">
    <div class="">© 2018-2019 JBHospital</div>
    <div>Barbé Jean-Baptiste</div>
</div>
</footer>
</html>
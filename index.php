
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
    <header>
        <!-- NavBar -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4c77c0;">
            <a class="navbar-brand" href="index.php"><img src="assets/img/heal.png" width="50px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link titleNavBar" href="index.php">accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link titleNavBar" href="ajout-patients.php">Ajouter un membre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link titleNavBar" href="list-patients.php">Consulter les membres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link titleNavBar" href="ajout-rendezvous.php">Prendre un RDV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link titleNavBar" href="#">Consulter les RDV</a>
                    </li>
                </ul>
            </div>
            <div  class="titleNavBar">JBHospital</div>
        </nav>          
    </header>
    <body>                                      
<!-- carousel -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/h1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/h2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/h3.jpg" alt="Third slide">
    </div>
  </div>
</div>
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

<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Lisio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">      
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Solution
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">La solution Lisio</a></li>
                <li><a class="dropdown-item" href="#">Une offre exclusive</a></li>
                <li><a class="dropdown-item" href="#">Pour un web RSE</a></li>
                <li><a class="dropdown-item" href="#">Nos projet de plantation</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nos valeurs
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Pour un web engagé</a></li>
                <li><a class="dropdown-item" href="#">Notre raison d'être</a></li>
                <li><hr class="dropdow-divider"></li>
                <li><a class="dropdown-item" href="#">Nos projet de plantation</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Acteurs engagés
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Références</a></li>
                <li><a class="dropdown-item" href="#">Témoignages</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Trophées et partenaires</a></li>
                <li><a class="dropdown-item" href="#">Actualités</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <form class="container-fluid justify-content-start">
              <button type="button" class="btn btn-outline-success">Une démo ?</button>
              <button type="button" class="btn btn-outline-primary">Un devis ?</button>
            </form>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <br>
  <!--nav-blog-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="nav-blog">
                    <button type="button" class="btn active btn-primary btn-block" data-tabs="all">Tous les sujets</button>
                    <button type="button" class="btn btn-primary btn-block" data-tabs="accessibility">Accessibilité</button>
                    <button type="button" class="btn btn-primary btn-block" data-tabs="environment">Environnement</button>

                    <a href="/administration.php" class="btn btn-primary btn-block" data-tabs="environment">Administration</a>
                </div>    
            </div>
        </div>
    </div>
    <br>
    <!--Principale-->
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="item_wrap accessibility card mb-2">
                    <img src="img/accessibilite/malvoyance2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Malvoyance</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="malvoyance.html" class="card-link">En savoir plus...</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="item_wrap accessibility card mb-2">
                    <img src="img/accessibilite/dyslexie.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Dyslexie</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">En savoir plus...</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="item_wrap accessibility card mb-2">
                    <img src="img/accessibilite/daltonisme.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Daltonisme</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">En savoir plus...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="item_wrap accessibility card mb-2">
                    <img src="img/accessibilite/epilepsie.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Epilepsie</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">En savoir plus...</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="item_wrap accessibility card mb-2">
                    <img src="img/accessibilite/diff-mouvement.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Mouvement difficile</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">En savoir plus...</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="item_wrap accessibility card mb-2">
                    <img src="img/accessibilite/parkinson.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Geste imprecis</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">En savoir plus...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md" id="op">
                <div class="item_wrap environment card mb-2">
                  <img src="img/Environnement/green-computer.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Optimiser son site web</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">En savoir plus...</a>
                  </div>
                </div>
            </div>
            <div class="col-md" id="dc">
                <div class="item_wrap accessibility card mb-2">
                    <img src="img/accessibilite/trouble-concentration.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Difficulté à la concentration</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">En savoir plus...</a>
                    </div>
                </div>
            </div>
            <div class="col-md" id="lazy">
                <div class="item_wrap environment card mb-2">
                  <img src="img/Environnement/lazy-load.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Lazy Load</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">En savoir plus...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md"></div>
            <div class="col-md" id="mve">
                <div class="item_wrap environment card mb-2">
                <img src="img/Environnement/ecologie-quotidien.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Mode de vie écologique</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">En savoir plus...</a>
                    <a href="#" class="card-link">Card link</a>
                    </div>
                </div>
            </div>
          <div class="col-md"></div>  
        </div>
    </div>


  <!-- javascript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
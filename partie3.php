<!DOCTYPE HTML>
<html lang="fr">
<head>
    <title>P3</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
<header>
    <?php include("navbar.php")?>
</header>
<main>
    <div class="container-fluid">
        <div class="row">

            <div class="d-none d-sm-block col bg-dark text-center text-light"><div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="trackers.jpg" class="d-block w-100" alt="LOGICIEL DE TRACKER" title="Logiciel de tracker">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="synthetiseur.jpg" class="d-block w-100" alt="LOGICIEL DE SYNTHETISEUR" title="Synthétiseur">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="notation.jpg" class="d-block w-100" alt="LOGICIEL DE NOTATION" title="Logiciel de notation">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="apprentissage.jpg" class="d-block w-100" alt="LOGICIEL D'APPRENTISSAGE" title="Logiciel d'apprentissage">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>

            <div class="col bg-dark text-center text-light border-right border-light"><h4 class="text-justify">Dans la catégorie des logiciels de MAO, il existe 6 types de logiciels différents. Nous allons les lister ici :</h4>
                <ul>
                    <li class="text-justify pt-2">Les licenses :
                    </li>

                    <li class="text-justify pt-2">Les packs de samples :
                    </li>

                    <li class="text-justify pt-2">Un peu de droit :
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="container-fluid pt-5 bg-dark">
        <div class="bg-dark text-light">

        </div>
    </div>
</main>
<?php include("footer.php")?>
</body>

</html>
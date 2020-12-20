<!DOCTYPE HTML>
<html lang="fr">
<head>
    <title>PTUT</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?php include("head.php") ?>
        <main class="bg-dark">
            <section>
                <br>
                <div class="box">
                    <img src="img/head.png" class="img-fluid rounded mx-auto d-block" alt="Image accueil">
                </div>
            </section>

            <section class="text-light">
                <div class="ml-3">
                    <h2>Introduction</h2>
                </div>
                <div class="ml-5">
                    <p>
                        Avec l’évolution de la technologie, la création musicale a changé et se
                        fait maintenant majoritairement à l’aide de logiciels de Musique Assistée par
                        Ordinateur (abrégés logiciels MAO par la suite). Les logiciels MAO peuvent se
                        définir comme l’ensemble des logiciels permettant de créer ou apprendre la
                        musique de manière numérique.
                    </p>
                    <p>
                        Nous avons choisi ce sujet car nous avons trouvé intéressant la manière dont
                        la MAO s’est démocratisée dans le monde de la conception musicale et nous
                        avons voulu en savoir plus sur leur fonctionnement.
                    </p>
                    <p>
                        Pour illustrer ça plus facilement, nous avons développé un site web montrant
                        différents types de logiciels et un regard du public envers ces logiciels (au
                        travers d’un sondage réalisé sur le département informatique) avec un zoom
                        sur les aspects juridique et économique de ces logiciels rarement gratuits.
                    </p>
                    <p>
                        Nous allons donc nous intéresser à ces logiciels permettant à tout le monde
                        de créer une oeuvre musicale. Tout d’abord nous vous proposerons une
                        présentation des différents types de MAO, de leur fonctionnement et du
                        regard économique et légal de ces logiciels, puis dans un second temps une
                        partie dédiée à l’explication du développement de notre site web et pour finir
                        une partie sur la gestion du travail de groupe au cours du projet.
                    </p>
                </div>

                    <br>
                    <div class="container-fluid">
                    <div class="row">

                        <div class="col bg-dark text-center text-light  rounded-left"><a href="partie1.php"><img src="img/Ableton.jpg" class="img-responsive img-thumbnail"><div class="legende2">Partie 1</div></img></a></div>

                        <div class="d-none d-sm-block col bg-dark text-center text-light"><a href="partie2.php"><img src="img/partie2.png" class="img-responsive img-thumbnail"><div class="legende2">Partie 2</div></img></a></div>

                        <div class="d-md-none d-lg-block d-none d-sm-block col bg-dark text-center text-light rounded-right mr-5"><a href="partie3.php"><img src="img/graphe2.png" class="img-responsive img-thumbnail"><div class="legende2">Partie 3</div></img></a></div>

                    </div>
                    </div>

                <nav>
                    <div>
                        <br>
                        <div class="text-center pt-5">
                            <a href="conclusion.php"  class="btn btn-outline-primary btn-lg">Voir conclusion</a>
                        </div>
                    </div>
                </nav>
            </section>
            <br>
        </main>
    <?php include("footer.php") ?>

</body>

</html>

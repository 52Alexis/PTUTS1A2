<!DOCTYPE HTML>
<html lang="fr">
<head>
    <title>P1</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    
<?php include("navbar.php")?>
    
    <main>

    <div class="container-fluid">
        <div class="row">
                
            <div class="col bg-dark text-center text-light border-right border-light"><h4 class="text-justify">Dans la catégorie des logiciels de MAO, il existe 6 types de logiciels différents. Nous allons les lister ici :</h4>
            <ul>
                <li class="text-justify pt-2">Les séquenceurs : les logiciels les plus utilisés pour composer de la musique sur ordinateur. Ils permettent une énorme palette de possibilité de sons, instruments virtuels et effets modulant les samples et instruments à loisir. De plus, il est possible d’acheter et d’installer des instruments et des packs de samples supplémentaires pour augmenter encore plus la banque dans laquelle vous piocher pour créer votre musique.
                </li>

                <li class="text-justify pt-2">Les trackers : encore dans la catégorie des logiciels de composition, les trackers se démarquent des séquenceurs par le fait qu’on ne peut utiliser que des samples pour composer. La banque de samples peut être agrandie, mais on ne peut pas rajouter d’instrument. La musique est entièrement composée de ces samples agrémentés d’effets.
                </li>
                
                <li class="text-justify pt-2">Les instruments de musique virtuels et les synthétiseurs logiciels : ces deux types de logiciels sont intimement liés car en effet, le synthétiseur étant un instrument il rentre dans la catégorie des instruments virtuels. Les instruments de musique virtuels sont conformes à leur appellation : ce sont des instruments de musique qu’on a virtualisé pour pouvoir en jouer sur un ordinateur. L’avantage de ces logiciels est le gain de place conséquent qu’ils peuvent apporter dans un studio de musique. Il serait difficile d’avoir 20 instruments différents dans 15 m², alors qu’un ordinateur portable assez puissant permet de tous les avoir à portée de main.
                </li>
                
                <li class="text-justify pt-2">Les logiciels de notation musicale : ces logiciels permettent d’écrire des partitions qui sont destinées à un musicien. Certains permettent aussi de faire une pré-écoute du morceau qu’on est en train d’écrire.
                </li>
                
                <li class="text-justify pt-2">Les outils éducatifs : ces logiciels permettent d’apprendre différentes facettes de la musique comme le solfège ou directement un instrument. Ils se sont beaucoup répandus à l’arrivé des smartphones et tablettes, et il en existe pour tous les niveaux, y compris pour l’éveil musical (initiation à la musique pour les jeunes enfants)
                </li>
            </ul>
            </div>
                
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
</div></div>
        </div>
    </div>
        <div class="container-fluid pt-5 bg-dark">
            <div class="bg-dark text-light">
            
            </div>
        </div>
    </main>
    <footer class="footer">
    <?php include("footer.php")?>
    </footer>

</body>

</html>
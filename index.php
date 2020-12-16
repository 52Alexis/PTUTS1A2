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
                <div class="box">
                    <img src="noir.png" class="img-fluid" alt="Image accueil">
                            
                    <nav>
                        <a href="decouvrir.php" class="legende2 text-light"><h6 class="text-light">Découvrir : L'aide des logiciels de Musique assistée par ordinateur dans la conception musicale</h6></a>
                    </nav>
                </div>
            </section>
                    
            <section class="text-light">
                <div class="ml-3">
                    <h2>Introduction</h2>
                </div>
                <div class="ml-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                </div>   
                <div class="d-flex justify-content-around pt-5">
                    <nav>
                        <a href="partie1.php"><img  class="mr-4 rounded mb-4" src="imagedepartie.png" alt="partie1"></a>
                        <a href="partie2.php"><img  class="mr-4 rounded mb-4" src="imagedepartie.png" alt="partie2"></a>
                        <a href="partie3.php"><img  class="mr-4 rounded mb-4" src="imagedepartie.png" alt="partie3"></a>
                    </nav>
                </div>
                <nav>
                    <div>
                        <br>
                        <div class="text-center pt-5">
                            <a href="conclusion.php" type="button" class="btn btn-outline-primary btn-lg">Voir conclusion</a>
                        </div>
                    </div>  
                </nav>
            </section>
            <br>
        </main>
    <?php include("footer.php") ?>

</body>

</html>
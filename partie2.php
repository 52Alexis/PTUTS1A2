<!DOCTYPE HTML>
<html lang="fr">
<head>
    <title>P2</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <header>
        <?php include("navbar.php")?>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">

                <div class="col bg-dark text-center text-light border-right border-light"><h4 class="text-justify">Les logiciels de MAO fonctionnent pour la plupart grâce à la norme midi. </h1>
                        <h5 class="text-justify ml-5"> Voici une explication de ce qu'est cette norme, et de son fonctionnement :</h5>
                        <ul class="text-justify" >
                            <li class="text-justify pt-2">
                                La norme MIDI est un langage universel qui permet aux différents
                                instruments de musique électronique de se connecter entre eux ou avec un
                                ordinateur et d’échanger des informations. Il transmet plusieurs
                                informations, comme la note jouée, l’intensité avec laquelle vous appuyez
                                sur cette note, la durée, la vélocité et plus encore.
                            </li>

                            <li class="text-justify pt-2">
                                Le format MIDI diffère du format audio. Sur ce dernier, le son est déjà
                                enregistré, et il n’est pas aisé de le modifier. Il ne sera par exemple pas
                                possible de faire des modifications majeures comme changer les notes d’une piste en particulier, tandis que le MIDI est un langage informatique, il ne
                                produit aucun son par lui même. Il a besoin d’un support, comme un
                                instrument de musique électronique ou encore un séquenceur afin
                                d’interpréter les données, qui ne sont pas encore à l’état de « son ». C’est
                                pourquoi on peut modifier ces données, que ce soit les notes, leur hauteur,
                                les rythmes… On peut interpréter le MIDI comme les partitions qui vont
                                donner les informations essentielles pour produire la musique, c’est-à-dire
                                l’audio.
                            </li>

                            <li class="text-justify pt-2">
                                Plus concrètement, le MIDI sert à plusieurs choses :
                                <li class="text-justify pt-2 ml-5">
                                    Tout d’abord il nous
                                    permet relier des instruments avec un ordinateur, sans cette possibilité, on
                                    ne peut pas faire de musique assistée par ordinateur, ou alors de façon très
                                    limitée.
                                </li>
                                <li class="text-justify pt-2 ml-5">
                                    Il permet également de connecter deux instruments électroniques
                                    entre eux. Par exemple, on peut relier un synthétiseur avec une batterie
                                    électronique, et affecter les sons de la batterie sur le synthétiseur de manière
                                    à ce que lorsque l’on appuie sur une touche du clavier du synthétiseur, un
                                    son de batterie sort. Cette fonctionnalité décuple énormément les
                                    possibilités en termes de composition.
                                </li>
                                <li class="text-justify pt-2 ml-5">
                                    Ensuite, grâce à l’informatique, on
                                    pourra reproduire virtuellement n’importe quel son. Il suffira de brancher un
                                    clavier, et on aura accès à tous les instruments qui seront jouables sur notre
                                    clavier. Pour finir, comme les pistes MIDI ne correspondent qu’à des
                                    données, cela va nous permettre plusieurs actions. À titre d’exemple, si on a
                                    enregistré une piste à l’aide d’un piano, grâce à un ordinateur on peut la
                                    jouer avec un autre instrument, comme un saxophone. De plus on peut
                                    prendre une partie de notre morceau, et le « copier-coller » si on veut répéter
                                    cette partie plusieurs fois. Ou encore, si on se trompe de note ou de rythme,
                                    il est aisé de corriger ça sur ordinateur à l’aide d’un séquenceur.
                                </li>
                            </li>

                            <li class="text-justify pt-2">
                                Pour se connecter en MIDI, il faut que nos deux appareils électroniques
                                soient branchés physiquement, et pour ça, deux solutions sont possibles :
                                Premièrement on peut utiliser une connexion USB. Prévue entre un
                                instrument électronique et un ordinateur, l’instrument est relié à l’ordinateur
                                par un câble USB de type B. Cette technique est plus répandue car elle est plus simple.
                                Sinon, on peut également se connecter à l’aide d’un câble MIDI.
                                Les choses se compliquent un peu. Pour connecter un instrument à son
                                ordinateur, on va avoir besoin de réaliser une configuration MIDI sur notre
                                ordinateur. Cependant la connexion MIDI permet d’échanger aussi entre
                                deux instruments électroniques. Il existe 3 types de connecteurs MIDI :
                                <li class="text-justify pt-2 ml-5">
                                    Le port OUT
                                </li>
                                <li class="text-justify pt-2 ml-5">
                                    Le port IN
                                </li>
                                <li class="text-justify pt-2 ml-5">
                                    Le port THRU
                                </li>
                                Le port OUT est l’« émetteur » tandis que le port IN est le « récepteur »
                                du signal. Il faut donc brancher le câble en partant du port MIDI OUT du
                                premier appareil afin d’arriver sur le port MIDI IN du second pour établir la
                                connexion. Le port THRU, lui sert à faire transiter les informations MIDI à
                                travers une autre machine.
                                Le port OUT est l’« émetteur » tandis que le port IN est le « récepteur »
                                du signal. Il faut donc brancher le câble en partant du port MIDI OUT du
                                premier appareil afin d’arriver sur le port MIDI IN du second pour établir la
                                connexion. Le port THRU, lui sert à faire transiter les informations MIDI à
                                travers une autre machine.

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
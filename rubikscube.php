<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/logo_site.png">
    <title>&ltPortfolio&gt - Rubik's Cube</title>
    <?php require_once 'includes/allLib.php'; ?>
</head>

<body>
    <div class="container">
        <header>
            <?php require_once 'includes/navBar.php'; ?>
        </header>

        <section class="sectionRB">
            <h2><span class="caractereh2">&lt</span>Présentation<span class="caractereh2">&gt</span></h2>

            <br>

            <div class="row">
                <div class="col">
                    <article class="articleRB" style="text-align: justify;">

                        Durant ma première semaine de stage, j’ai réalisé un projet permettant de s’entraîner à la mémorisation des algorithmes d’un Rubik’s Cube.

                        Le projet n’est pas terminé puisque je dois encore m’occuper du design mais aussi de rajouter le reste des algorithmes.

                        Le projet se compose d’une première interface vide avec un en-tête et 2 boutons.

                    </article>
                </div>
                <div class="col">
                    <aside class="asideRB">
                        <img src="./img/img_rb1.png">
                    </aside>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col">
                    <aside class="asideRB">
                        <img src="./img/img_rb2.png">
                    </aside>
                </div>
                <div class="col">
                    <article class="articleRB" style="text-align: justify;">

                        Le bouton « Cours » permet d’afficher un tableau à 2 dimensions composé d’une image d’un rubik’s cube avec son algorithme qui lui correspond.

                    </article>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col">
                    <article class="articleRB" style="text-align: justify;">

                        Le bouton “Entrainement” permet de générer une image du tableau au hasard. Il faut alors entrer l’algorithme qui correspond à cette image. Si l’algorithme correspond, une alerte s’affiche en disant “Bonne réponse”. A l’inverse, si la réponse est fausse alors l’alerte affichera “Mauvaise réponse”.

                    </article>
                </div>
                <div class="col">
                    <aside class="asideRB">
                        <img src="./img/img_rb3.png">
                    </aside>
                </div>
            </div>

            <br>

            <h2 style="clear: both;"><span class="caractereh2">&lt/</span>Présentation</span>&gt</h2>

        </section>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/logo_site.png">
    <title>&ltPortfolio&gt - Moi</title>
    <?php require_once 'includes/allLib.php'; ?>
</head>

<body>
    <div class="container">
        <header>
            <?php require_once 'includes/navBar.php'; ?>
        </header>

        <section>
            <h2><span class="caractereh2">&lt</span>Présentation<span class="caractereh2">&gt</span></h2>

            <article id="articleMoi">

                <br>

                <!-- la balise <pre> n'était pas adéquate ici -->
                <p>Originaire de Haute-Savoie, j’étudie l’informatique en BTS SIO (Services Informatiques aux Organisations) option SLAM (Solutions Logicielles et Applications Métiers) au lycée Carriat de Bourg-en-Bresse depuis la rentrée 2020. </p>
                <p>Agé de 21 ans, je suis quelqu'un d'appliqué, créatif, motivé, dynamique et surtout passionné. </p>
                <p>Le développement de l’intelligence artificielle me passionne tout comme la programmation informatique. Je compte de ce fait poursuivre mes études dans cette voie et ainsi en faire mon futur métier. </p>
                <p>Vous pouvez également télécharger mon CV via ce bouton :</p>

                <button type="button">
                    <a href="./pdf_files/Emeric_CV.pdf" download>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                        </svg>
                        Télécharger CV
                    </a>
                </button>

            </article>

            <aside id="asideMoi">
                <canvas id="canvas1"></canvas>
            </aside>

            <br>

            <h2 style="clear: both;"><span class="caractereh2">&lt/</span>Présentation</span>&gt</h2>

            <!-- 
            <div id="scrollEffect">
                <div id="mousey">
                    <div id="scroller">
                    </div>
                </div>
            </div>
            -->

        </section>

        <br>

        <section>
            <h2><span class="caractereh2">&lt</span>Compétences Techniques<span class="caractereh2">&gt</span></h2>

            <br>

            <article id="articleCT">
                <div id="cwJS">
                    <div class="main">
                        <?php require_once 'includes/cwJS.html' ?>
                    </div>
                </div>

                <div id='cwHTML'>
                    <div class="main">
                        <?php require_once 'includes/cwHTML.html' ?>
                    </div>
                </div>

                <div id='cwPHP'>
                    <div class="main">
                        <?php require_once 'includes/cwPHP.html' ?>
                    </div>
                </div>

                <div id='cwSQL'>
                    <div class="main">
                        <?php require_once 'includes/cwSQL.html' ?>
                    </div>
                </div>

            </article>

            <aside id="asideCT">
                <ul>
                    <li><button type="button" id="btnJS"><img src="https://img.icons8.com/color/48/000000/javascript--v1.png" /></button></li>
                    <li><button type="button" id="btnCsharp"><img width="48" height="48" src="https://static.cdnlogo.com/logos/c/27/c.svg"></button></li>
                    <li><button type="button" id="btnHTML"><img src="https://img.icons8.com/color/48/000000/html-5--v1.png" /></button></li>
                    <li><button type="button" id="btnPHP"><img width="65" height="40" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png"></button></li>
                    <li><button type="button" id="btnSQL"><img width="48" height="48" src="https://img.icons8.com/external-others-phat-plus/64/000000/external-connection-browser-and-interface-blue-others-phat-plus-6.png" /></button></li>
                    <li><button type="button" id="btnCSS"><img src="https://img.icons8.com/color/48/000000/css3.png" /></button></li>
                    <li><button type="button" id="btnPYTHON"><img src="https://img.icons8.com/color/48/000000/python--v1.png" /></button></li>
                    <li><button type="button" id="btnANGULAR"><img width="48" height="48" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/1200px-Angular_full_color_logo.svg.png"></button></li>
                    <li><button type="button" id="btnJQUERY"><img width="48" height="48" src="https://blog.artegrafico.net/wp-content/uploads/2019/02/jQuery-logo.png"></button></li>
                    <li><button type="button" id="btnVScode"><img src="https://img.icons8.com/color/48/000000/visual-studio-code-2019.png" /></button></li>
                    <li><button type="button" id="btnVS"><img src="https://img.icons8.com/color/48/000000/visual-studio-2019.png" /></button></li>
                    <li><button type="button" id="btnPhpMyAdmin"><img width="65" height="48" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/PhpMyAdmin_logo_2010_hidef.svg/1200px-PhpMyAdmin_logo_2010_hidef.svg.png"></button></li>
                    <li><button type="button" id="btnNETbeans"><img width="42" height="48" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Apache_NetBeans_Logo.svg/1776px-Apache_NetBeans_Logo.svg.png"></button></li>
                </ul>
            </aside>

            <br>

            <h2 style="clear: both"><span class="caractereh2">&lt/</span>Compétences Techniques<span class="caractereh2">&gt</span></h2>
        </section>

        <br>
        <br>

        <section>
            <h2><span class="caractereh2">&lt</span>Compétences Professionnelles<span class="caractereh2">&gt</span></h2>

            <br>

            <article id="articlePRO">
                <!-- animation css circulaire (bulles de compétences qui font une rotation 360°) -->
                <div id="rotation">
                    <div class="circle un">Créatif</div>
                    <div class="circle deux">Motivé</div>
                    <div class="circle trois">Passionné</div>
                    <div class="circle quatre">S'adapte</div>
                    <div class="circle cinq">Dynamique</div>
                    <div class="circle six">Curieux</div>
                    <div class="circle sept">Appliqué</div>
                    <div class="circle huit">Sérieux</div>
                    <div class="circle neuf">Pointilleux</div>
                    <div class="circle dix">Ambicieux</div>
                    <div class="circle onze">Appliqué</div>
                    <div class="circle douze">Modèste</div>
                </div>

            </article>

            <br>

            <h2><span class="caractereh2">&lt/</span>Compétences Professionnelles<span class="caractereh2">&gt</span></h2>
        </section>

    </div>

    <button class="menuIcon">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
    </button>

</body>

</html>
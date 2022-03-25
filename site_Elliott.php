<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/logo_site.png">
    <title>&ltPortfolio&gt - Site Pro</title>
    <?php require_once 'includes/allLib.php'; ?>
</head>

<body>
    <div class="container">
        <header>
            <?php require_once 'includes/navBar.php'; ?>
        </header>

        <section>
            <h2><span class="caractereh2">&lt</span>Présentation<span class="caractereh2">&gt</span></h2>

            <br>

            <article id="" style="text-align: justify;">

                Durant mon stage de première année, j’ai réalisé le site web pour un professionnel.

                La page d’accueil est constituée de différentes rubriques. Tout d’abord la rubrique “A propos de moi” pour présenter le profil du professionnel.
                Ensuite les rubriques permettant de présenter en quelques lignes les services proposés avec la possibilité d’en savoir plus.
                Enfin, on retrouve en bas de page la rubrique “Me contacter” avec un formulaire, le numéro de téléphone et l’adresse mail.
                <br>
                Le site possède également une page “Été” et “Hiver”.

                La page Été donne plus d’informations sur les services proposés et la possibilité de prendre rendez-vous directement sur le site.

                La page Hiver comprend plusieurs catégories. Chaque catégorie renvoie sur une page spécifique avec les prix et les horaires correspondants à cette catégorie.
                Il y a également la possibilité de réserver en ligne.
            </article>

            <aside id="">

            </aside>

            <br>


            <!-- slideshow from w3school -->
            <style>
                .mySlides {
                    display: none;
                }

                img {
                    vertical-align: middle;
                }

                /* Slideshow container */
                .slideshow-container {
                    max-width: 1000px;
                    position: relative;
                }

                /* Caption text */
                .text {
                    color: #f2f2f2;
                    font-size: 15px;
                    padding: 8px 12px;
                    position: absolute;
                    bottom: 8px;
                    width: 100%;
                    text-align: center;
                }

                /* Number text (1/3 etc) */
                .numbertext {
                    color: #f2f2f2;
                    font-size: 12px;
                    padding: 8px 12px;
                    position: absolute;
                    top: 0;
                }

                /* The dots/bullets/indicators */
                .dot {
                    height: 15px;
                    width: 15px;
                    margin: 0 2px;
                    background-color: #bbb;
                    border-radius: 50%;
                    display: inline-block;
                    transition: background-color 0.6s ease;
                }

                .active {
                    background-color: #717171;
                }

                /* Fading animation */
                .fade {
                    -webkit-animation-name: fade;
                    -webkit-animation-duration: 3.5s;
                    animation-name: fade;
                    animation-duration: 3.5s;
                }

                @-webkit-keyframes fade {
                    from {
                        opacity: .4
                    }

                    to {
                        opacity: 1
                    }
                }

                @keyframes fade {
                    from {
                        opacity: .4
                    }

                    to {
                        opacity: 1
                    }
                }

                /* On smaller screens, decrease text size */
                @media only screen and (max-width: 300px) {
                    .text {
                        font-size: 11px
                    }
                }
            </style>
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="img/sitelliott1.png" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="img/sitelliott5.png" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="img/sitelliott3.png" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

            <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {
                        slideIndex = 1
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                    setTimeout(showSlides, 3000); // Change image every 2 seconds
                }
            </script>

            <h2 style="clear: both;"><span class="caractereh2">&lt/</span>Présentation</span>&gt</h2>

        </section>
    </div>

</body>

</html>
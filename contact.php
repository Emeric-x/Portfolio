<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/logo_site.png">
    <title>&ltPortfolio&gt - Contact</title>
</head>

<body>
    <div class="container">
        <header>
            <?php require_once 'includes/navBar.php'; ?>
        </header>

        <section>

            <h2><span class="caractereh2">&lt</span>form<span class="caractereh2">&gt</span></h2>

            <br>
            <br>

            <form method="POST">
                <div class="row">
                    <div class="col">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Votre nom..." required>
                    </div>
                    <div class="col">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" name="prenom" placeholder="Votre prénom..." required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="mail">Mail</label>
                        <input type="email" name="mail" class="form-control" placeholder="Votre mail..." required>
                    </div>
                    <div class="col">
                        <label for="sujet">Sujet</label>
                        <input type="text" name="sujet" class="form-control" placeholder="Le sujet..." required>
                    </div>
                </div>

                <label for="message">Message</label>
                <textarea name="message" class="form-control" placeholder="Votre message..." rows="5" required></textarea>

                <br>

                <button type="submit" id="envoyerForm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                        <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                    </svg>
                    Envoyer
                </button>
            </form>

            <br>
            <br>

            <h2><span class="caractereh2">&lt/</span>form<span class="caractereh2">&gt</span></h2>

            <?php

            if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['message']) && isset($_POST['sujet'])) {

                if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['message']) && !empty($_POST['sujet'])) {

                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $message = $_POST['message'];
                    $mail = $_POST['mail'];
                    $subject = $_POST['sujet'];

                    $content = "De: $nom \n Email: $prenom \n Message: $message"; //le contenu envoyé
                    $recipient = "emeric.daumarie00@gmail.com"; //l'e-mail qui reçoit
                    $mailheader = "From: $mail \r\n"; //en-tete de l'email

                    mail($recipient, $subject, $content, $mailheader) or die("Erreur!");
                    echo "Email envoyé!";
                } else {
                    echo "Veuillez remplir tous les champs !";
                }
            }
            ?>
        </section>
    </div>

    <button class="menuIcon">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
    </button>
</body>

</html>
<?php
$pageActive = 'about';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speedometer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require('parts/topbar.php')  ?>
    <main>
        <div class="wrapper">
            <div class="about">
                <div class="content">
                    <h1>A propos</h1>
                    <div class="rules">
                        <div class="content">
                            <p>Dans un fichier PHP, crée une classe Personne avec pour Attributs :<br>
                            <ul>
                                <li>Nom</li>
                                <li>Prénom</li>
                                <li>Adresse</li>
                                <li>Date de naissance</li>
                            </ul><br>
                            <p>
                            <ul>
                                <li>Créer une méthode pour afficher les infos de ‘Personne’ et une autre pour modifier l’adresse.</li>
                                <li>Crée une méthode qui calcule l’âge à partir de la date de naissance.</li>
                                <li>Pour soumettre ta solution, uploade le fichier dans un gist, puis poste le lien du gist.</li>
                            </ul>
                            </p>

                            <p>
                                <u>Critères de validation</u>
                            <ul>
                                <li>La classe contient trois méthodes</li>
                                <li>Un nouvel objet est créé et s’affiche</li>
                                <li>l’âge s’affiche</li>
                            </ul>
                            </p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require('parts/footer.php') ?>
</body>

</html>
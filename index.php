<?php

require 'src/Person.php';

$john = new Person('doe', 'john', '8 street 3309 Miami Beach (Floride)', new DateTime('1998-07-08'));
$pageActive = 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premières classes en PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require('parts/topbar.php')  ?>
    <main>
        <div class="wrapper">
            <h1>Challenge 7 :<br>Premières classes en PHP</h1>
            <div class="container-cards">
                <div class="card">
                    <div class="card-header">
                        <span>Classe Person</span>
                    </div>
                    <div class="card-body">
                        <div class="content">
                            <span>$john = new Person('doe', 'john','8 street 3309 Miami Beach (Floride)', new DateTime('1998-07-08')')</span><br>
                            <hr>
                            <span>$john->showPerson();</span><br>
                            <?php $john->showPerson(); ?>
                            <hr>
                            <span>$john->setAddress('1600 Pennsylvania Ave NW, Washington');</span><br>
                            <?php $john->setAddress('1600 Pennsylvania Ave NW, Washington') ?>
                            <span>$john->showPerson();<span><br>
                            <?php $john->showPerson(); ?>
                            <hr>
                            <span>J'ai <?= $john->calculateAge();?> ans.</span><br>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span>Classe Person</span>
                    </div>
                </div>
            </div>
    </main>
    <?php require('parts/footer.php') ?>
</body>

</html>
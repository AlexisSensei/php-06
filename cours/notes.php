<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require "menu.php"; ?>
    <h1>
        Notes
    </h1>
<?php 

    $matieres = [
       "HTML / CSS / Responsive",
       "Algo", 
       "Javascript",
       "PHP / MySQL",
       "Réseaux",     
    ];

    $unites = [
        "Culture digitale 1",
        "MÉTIER ANIMATION 3D",
        "MÉTIER COMMUNICATION DIGITALE & E-BUSINESS 1",
        "MÉTIER CRÉATION & DESIGN 1",
        "MÉTIER DÉVELOPPEMENT WEB 1",
        "MÉTIER JEUX VIDÉO 1"
    ];
?>
    <h1><?php echo $unites[4]; ?></h1>
    <ul>
        <?php foreach($matieres as $cours) {
            echo "<li>$cours</li>";
        } ?>
    </ul>

</body>
</html>
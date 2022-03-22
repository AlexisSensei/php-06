<?php 
$nom = $_GET['prenom'];
?>
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
        <?php echo "Bonjour $nom"; ?>
    </h1>
    <h2>Connectez-vous</h2>
    <form action="index.php" method="GET">
        <input type="text" name="prenom" id="">
        <input type="password" name="pass" id="">
        <input type="submit" value="Envoyer">
    </form>


    


</body>
</html>
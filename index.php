<?php
$gender = 18;
settype($gender, "string");
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 5 Partie 2</title>
</head>
<body>
    <h1>Exercice 5 Partie 2</h1>

    <p><?php
    if($gender != 'Homme')
    {
        echo 'C\'est une développeuse !!!';
    }
    else 
    {
        echo 'C\'est une développeur !!!';
    }
    ?></p>
</body>
</html>
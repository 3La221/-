<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo5</title>
</head>
<body>
    <h1>Resultat de l'Exo 5 (POST)</h1>
    <?php
        $valeurA = $_POST['valeurA'];
        $valeurB = $_POST['valeurB'];
        $valeurC = $_POST['valeurC'];
        $valeurD = $_POST['valeurD'];

        $resultat = ($valeurA + $valeurB) * $valeurC / $valeurD;

        echo "<p> ((ValA + ValB)*ValC / ValD) : $resultat</p>";
    
    ?>
</body>
</html>

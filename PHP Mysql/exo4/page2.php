<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo4</title>
</head>
<body>
    <h1>Resultat de l'Exo 4 (GET)</h1>
    <?php
        $valeur1 = $_GET['valeurA'];
        $valeur2 = $_GET['valeurB'];
        $valeur3 = $_GET['valeurC'];

        $somme = $valeur1 + $valeur2 + $valeur3;

        echo "<p> ValA + ValB + ValC : $somme</p>";
    
    ?>
</body>
</html>

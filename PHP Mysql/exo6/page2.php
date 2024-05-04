<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat de l'exercice 6</title>
</head>
<body>
    <h1>Résultat de l'exercice 6</h1>
    <?php
        $nom = $_POST['nom'];
        $bio = $_POST['bio'];
        $genre = $_POST['genre'];
        $voiture =  isset($_POST['choix1'] )  ? $_POST['choix1'] : "";
        $moto =  isset($_POST['choix2'] )  ? ",".$_POST['choix2'] : "";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
        $velo =  isset($_POST['choix3'] )  ? ",".$_POST['choix3'] : "";

        echo "<p>Nom : $nom</p>";
        echo "<p>Bio : $bio</p>";
        echo "<p>Genre : $genre</p>";


        echo"<p>Vehcules : [$voiture  $moto  $velo]</p>";
        
        if(isset($_POST['choix1'])){
            $option = $_POST['option'];

            echo "<p>Cars : $option</p>";

        }
    
    ?>
</body>
</html>

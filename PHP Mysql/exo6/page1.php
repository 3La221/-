<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo6</title>
    <script>
        function toggleOption() {
            var checkbox = document.getElementById("choix1");
            var optionDropdown = document.getElementById("option");
            if (checkbox.checked) {
                optionDropdown.disabled = false;
            } else {
                optionDropdown.disabled = true;
            }
        }
    </script>
</head>
<body>
    <h1>Bienvenue sur Exo6</h1>
    <form action="page2.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="bio">Bio :</label><br>
        <textarea id="bio" name="bio" rows="4" cols="50" required></textarea><br><br>
        
        <input type="radio" id="homme" name="genre" value="homme" required>
        <label for="homme">Homme</label><br>
        <input type="radio" id="femme" name="genre" value="femme" required>
        <label for="femme">Femme</label><br><br>
        
        <input type="checkbox" id="choix1" name="choix1" value="voiture" onchange="toggleOption()">
        <label for="choix1">J'ai une voiture</label><br>
        <input type="checkbox" id="choix2" name="choix2" value="moto">
        <label for="choix2">J'ai une moto</label><br>
        <input type="checkbox" id="choix3" name="choix3" value="velo">
        <label for="choix3">J'ai un vélo</label><br><br>
        
        <select id="option" name="option" disabled>
            <option value="Renault">Renault</option>
            <option value="BMW">BMW</option>
            <option value="Toyota">Toyota</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    setcookie("name",$_POST['nom']);
    setcookie("pays",$_POST['pays']);
    setcookie("genre",$_POST['genre']);

}



?>
    <a href="page2.php">page2</a>
    <a href="page3.php">page3</a> <br> <br>
    

<form method="POST" action="page.php">

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>
        <label for="nom">Pays :</label>
        <input type="text" id="pays" name="pays" required><br><br>
        <input type="radio" id="homme" name="genre" value="homme" required>
        <label for="homme">Homme</label><br>
        <input type="radio" id="femme" name="genre" value="femme" required>
        <label for="femme">Femme</label><br><br>
        <input type="Submit" value="submit" >
        
</form>
        


</body>
</html>
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['pays'] = $_POST['pays'];
    $_SESSION['genre'] = $_POST['genre'];

    header("Location: page2.php");

}




$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Principale</title>
</head>
<body>
    <h2>Bienvenue <?php echo $username; ?></h2>

    <form method="POST" action="page1.php">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="nom">Pays :</label>
        <input type="text" id="pays" name="pays" required><br><br>
        <input type="radio" id="homme" name="genre" value="homme" required>
        <label for="homme">Homme</label><br>
        <input type="radio" id="femme" name="genre" value="femme" required>
        <label for="femme">Femme</label><br><br>
        <input type="Submit" value="submit" >

        
</form>
    <a href="logout.php">Déconnexion</a>
</body>
</html>

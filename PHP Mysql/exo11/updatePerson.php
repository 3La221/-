<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
   

    


</style>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username,$password);



mysqli_query($conn , "USE db_persons");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $points = $_POST['points'];

    mysqli_query($conn,"UPDATE `db_persons`.`person` SET `nom` = '$nom', `prenom` = '$prenom', `points` = '$points' WHERE `person`.`id` = '$id'; "); 

} 



?>
    <form method="POST" action="updatePerson.php">
    <label for="nom">id</label>
    <input type="number" id="id" name="id" required> <br> <br>
    <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required> <br> <br>
        
        <label for="prenom">Prenom</label>
        <input type="txt" id="prenom" name="prenom" required> <br> <br>
        
        <label for="points">Points :</label>
        <input type="number" id="points" name="points" required> <br> <br>
        
        <input type="submit" value="ajouter" />

    </form>
</body>
</html>
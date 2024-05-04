<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username,$password);



mysqli_query($conn , "USE db_persons");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = $_POST['id'];
    
    


    

    mysqli_query($conn,"DELETE FROM `db_persons`.`person` WHERE `person`.`id` = '$id';"); 

}   
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id = $_GET['id'];

mysqli_query($conn,"DELETE FROM `db_persons`.`person` WHERE `person`.`id` = '$id';"); 

}   

?>

    <form method="POST" action="deletePerson.php">
    <label for="nom">id</label>
        <input type="number" id="id" name="id"  required><br><br>
        
        <input type="submit" value="suprimer" />

    </form>
</body>
</html>
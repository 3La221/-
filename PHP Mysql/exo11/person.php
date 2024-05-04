<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiants</title>

    <style>
        body{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            font-family:sans-serif;
        }
        table{
            border-collapse: collapse;
            width:100%;

        }
        th {
		background-color: #6662d8;
        color:white
	}
        th,td{
            border : 1px solid black;
            padding: 10px;


        }

        button {
            padding:10px;
            color:white;
            border-radius:10px ;
            cursor: pointer;
            border : none ; 
            margin:5px
        
        }
        a {
            text-decoration:none;
        }

        .btns{
            margin-top:10px;
        }

        .add{
            background-color:green;
            
        }
        .upd{
            background-color : blue;
        }
        .del{
            background-color:red;
        }

        form {
            width:100%;
        }
        

    </style>
</head>

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
// se connecter
$conn = mysqli_connect($servername, $username,
$password, "test");
// vérifier si connexion établie
if (!$conn) {
die("echec connexion: " . mysqli_connect_error());
}
// echo "connexion reusie";



mysqli_query($conn , "USE db_persons");
$result = mysqli_query($conn,"SELECT * FROM person");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['idselected'] ;

    header("Location: updatePerson.php");

    

}

// mysqli_close($conn);

?>

<body>
<form method="get" action="select.php">

    <table>

    <tr>
        <th>
            Id
        </th>
        <th>
            Nom
        </th>
        <th>
            Prenom
        </th>
        <th>
            Note
        </th>
        <th>
            Select
        </th>
    </tr>
        <?php
        while($row = mysqli_fetch_assoc($result)) { ?>

            <tr>
                <td>
                    <?= $row["id"] ?>
                </td>
                <td>
                <?= $row["nom"] ?>
                </td>
                <td>
                <?= $row["prenom"] ?>
                </td>
                <td>
                <?= $row["points"] ?>
                </td>
                <td>
                <input type="radio"  name="idselected" value=<?= $row["id"]?> required>
                </td>
            </tr>
    <?php } ?>

    

        


    </table>
            <div class="btns">
            <a href="updatePerson.php">
            <button type="submit" class="upd" name="upd" >Modifier</button>
            </a>
            <a href="deletePerson.php">
            <button type="submit" class="del" name="del" >Suprimer</button>
            </a>
            </div>
    </form>
    <a href="formAdd.php">
        <button type="submit" class="add" name="add" >Ajouter</button>
    </a> 
    
    
</body>
</html>
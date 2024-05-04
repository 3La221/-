<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Étudiants</title>
    <style>
        .admissible {
            background-color: green;
        }
        .non-admissible {
            background-color: red;
        }
    </style>
</head>
<body>
    <table border=1>
        <tr>
            <th>Etudiant</th>
            <th>Note</th>
        </tr>
        <?php
        $etudiantsNote = array(
            "JOHN" => 9,
            "BOB" => 15.5,
            "RAYANE" => 7,
            "ROSIE" => 13
        );
        function estAdmissible ($note) { 

            return $note>= 10 ? TRUE : FALSE ;


        }
        foreach ($etudiantsNote as $nom => $note) {
            $classe = estAdmissible($note) ? 'admissible' : 'non-admissible';
            echo "<tr>";
            echo "<td>$nom</td>";
            echo "<td class='$classe'>$note</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

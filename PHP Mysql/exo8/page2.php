
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<?php 

session_start();

?>

<body>
    
    <h1> Name <?php echo $_SESSION['name'] ?> </h1>
    <h1> Pays <?php echo $_SESSION['pays'] ?> </h1>
    <h1> Genre <?php echo $_SESSION['genre'] ?> </>

</body>
</html>
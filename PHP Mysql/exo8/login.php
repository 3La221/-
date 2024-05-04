

<body>
<?php
session_start();

$users = array(
    'alaa21' => 'alaa1234',
    'salah' => 'liverpool1234'
);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$username]) && $users[$username] === $password) 
    {
        $_SESSION['username'] = $username;
        echo "VALID" ;
        header("Location: page1.php");
    }
}
?>

<form method="post" action="login.php">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="LOGIN">
</form>

</body>

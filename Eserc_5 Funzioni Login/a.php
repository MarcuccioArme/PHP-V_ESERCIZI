<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controllo Login</title>
</head>
<body>

    <h1>Login nel portale</h1>

    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="POST">

        <p>Inserire l'username e la password</p>
        <input type="text" id="username" name="username" required placeholder="Username"><br><br>
        <input type="password" id="password" name="password" required placeholder="Password"><br><br>

        <input type="submit" name="submit" value="Login"><br><br>
    
    </form>
    
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $log = $_POST["username"];
        $pass = $_POST["password"];

        controllo_login($log, $pass);
    }

    function controllo_login($log, $pass) {

        $login = "admin";
        $password = "nimda";
        
        if ($log == $login && $pass == $password) {
            echo "Login e Password OK!";
        } elseif ($log != $login && $pass == $password) {
            echo "Login sbagliato!";
        } elseif ($log == $login && $pass != $password) {
            echo "Password errata!";
        } else {
            echo "Login e Password errati!";
        }

    }
?>
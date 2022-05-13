<?php

session_start();



?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style1.css" />
</head>

<body>


    <div id="container">
        <form action="zaloguj.php" method="post">
            Login
            <input type="text" name="login" />

            <br /><br />

            Hasło
            <input type="password" name="haslo" />

            <br /><br />

            <input type="submit" value="Zaloguj się">

        </form>
        <?php
        if (isset($_SESSION['blad']))
            echo $_SESSION['blad'];
        ?>
    </div>

</body>

</html>
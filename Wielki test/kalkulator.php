<?php
session_start();
require_once "connect.php";

if ((!isset($_SESSION["zalogowany"])) && ($_SESSION["zalogowany"] !== true)) {
    header("location: kalkulator.php");
    exit();
}
?>
<div style="color: lightgreen; text-align: center; font-size: 48px; font-weight: 600;">
    <?PHP
    require_once "connect.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    $login = $_SESSION['user'];

    if (isset($_POST['promien'])) {
        $result = $_POST['wynik'];
        $polaczenie->query("UPDATE uzytkownicy SET Wynik = $result WHERE user = '$login'");
        echo "Pomyślnie przesłano wynik!";
    }
    ?>
</div>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">



    <script src="script.js" type="text/javascript">
    </script>




    <style>
        /* Navbar container */
        .navbar {
            overflow: hidden;
            background-color: #444;
            font-family: Arial;
        }

        /* Links inside the navbar */
        .navbar a {
            float: left;
            font-size: 24px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* The dropdown container */
        .dropdown {
            float: left;
            overflow: hidden;
        }

        /* Dropdown button */
        .dropdown .dropbtn {
            font-size: 24px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            /* Important for vertical align on mobile phones */
            margin: 0;
            /* Important for vertical align on mobile phones */
        }

        /* Add a red background color to navbar links on hover */
        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: red;
        }

        input[type=submit] {
            width: 120px;
            background-color: #36b03c;
            font-size: 24px;
            color: white;
            padding: 15px 10px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            letter-spacing: 2px;
            outline: none;
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }


        /* Add a grey background color to dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        #menu {
            text-align: right;
            font-size: 35px;
            font-weight: 700px;
            padding-right: 20px;
            color: lightgray;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="kalkulator.php">Kalkulator</a>
        <div class="dropdown">
            <button class="dropbtn">Podstrony
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="strona1.php">Kotki</a>
                <a href="strona2.php">Samochody</a>
                <a href="strona3.php">Pieski</a>
            </div>
        </div>
    </div>
    <div class="kalk">
        <h2>Objętość Kuli</h2>
        <p class="parag">Uzupełnij pole.</p>
        <?php
        echo "<p>Witaj " . $_SESSION['user']  . '!' ?>

        <center><img src="img/images.png"></center>
        <div class="form-group">
            <form action="" method="POST">


                <label>Podaj promień Kuli</label>
                <input type="number" id="promien" name="promien" class="form-control" onchange=calc()>
                <span class="invalid-feedback"></span>



                <input style="margin-top:10px" placeholder="Wynik:" type="text" id="wynik" name="wynik" class="form-control" readonly>
        </div>
        <div class="form-group">

            <input type="submit" class="btn btn-secondary ml-2" id="zapisz" value="Zapisz">
            <?php echo '[<a href="logout.php">Wyloguj się!</a>]</p>';
            ?>

        </div>


        </form>

    </div>


</body>
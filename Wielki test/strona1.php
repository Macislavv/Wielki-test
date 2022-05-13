<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style2.css" />


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

        .koty {
            margin-top: 30px;
            border: 4px solid red;
            width: 740px;
            height: 444px;
            margin-left: auto;
            margin-right: auto;
        }

        .napis {
            font-size: 50px;
            text-align: center;
            margin-top: 40px;
            color: #003333;
        }

        #pudelko {
            background-color: #CC9999;
            width: 1800px;
            margin-left: auto;
            margin-right: auto;
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
    <div id="pudelko">
        <div class="koty">
            <center><img src="img/kotki.jpg"></center>
        </div>
        <div class=napis>Kotki
        </div>
    </div>

</body>

</html>
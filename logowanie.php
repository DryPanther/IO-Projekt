<?php

    session_start();

    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: zalogowany.php');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="pl">

<head>

    <meta name="description" content="Nowa innowacyjna strona do wypo¿yczania filmów i ksi¹¿ek. Wszystkie ulubione filmy i ksi¹¿ki w zasiêgu twojej rêki! " />
    <meta name="keywords" content="Ksi¹¿ki, ksi¹¿ki, Filmy, filmy, e-book, wypo¿yczalnia, kup, za darmo, book-pass" />
    <title>Wszystkie ulubione filmy i ksi¹¿ki w zasiêgu twojej rêki!</title>
    <link rel="stylesheet" href="logowanie.css" type="text/css" />
    <link href="https://fonts.google.com/specimen/Trykker?query=trykker#standard-styles" rel="stylesheet">
</head>

<body>
    <div id="container ">
        <div id="nawigacja">
            <ul>
                <li><a href="rejestracja.html">Utwórz konto</a></li>
                <li><a href="#Karta_podarunkowa">Karta podarunkowa</a></li>
                <li><a href="#Szukaj">Szukaj</a></li>
                <li><a href="#Kategorie">Kategorie</a></li>
                <li><a href="logowanie.html">Zaloguj</a></li>
            </ul>
        </div>
        <div id="formularzLogowania">
          

            <form action="zaloguj.php" method="post">
                <input placeholder="Login" size="32" maxlength="32">
                <input type="password" placeholder="Has³o" size="16" maxlength="16">
                <input type="submit" value="Zaloguj siê">
            </form>
            <div id="rejestracja">
                <a href="rejestracja.html">Zarejestruj siê</a>
                <a href="przypomnienie.html">Zapomnia³eœ has³a?</a>
            </div>
        </div>
    </div>
    <?php
    if(isset($_SESSION['blad']))    echo $_SESSION['blad'];
?>
</body>

</html>

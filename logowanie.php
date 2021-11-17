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

    <meta name="description" content="Nowa innowacyjna strona do wypo�yczania film�w i ksi��ek. Wszystkie ulubione filmy i ksi��ki w zasi�gu twojej r�ki! " />
    <meta name="keywords" content="Ksi��ki, ksi��ki, Filmy, filmy, e-book, wypo�yczalnia, kup, za darmo, book-pass" />
    <title>Wszystkie ulubione filmy i ksi��ki w zasi�gu twojej r�ki!</title>
    <link rel="stylesheet" href="logowanie.css" type="text/css" />
    <link href="https://fonts.google.com/specimen/Trykker?query=trykker#standard-styles" rel="stylesheet">
</head>

<body>
    <div id="container ">
        <div id="nawigacja">
            <ul>
                <li><a href="rejestracja.html">Utw�rz konto</a></li>
                <li><a href="#Karta_podarunkowa">Karta podarunkowa</a></li>
                <li><a href="#Szukaj">Szukaj</a></li>
                <li><a href="#Kategorie">Kategorie</a></li>
                <li><a href="logowanie.html">Zaloguj</a></li>
            </ul>
        </div>
        <div id="formularzLogowania">
          

            <form action="zaloguj.php" method="post">
                <input placeholder="Login" size="32" maxlength="32">
                <input type="password" placeholder="Has�o" size="16" maxlength="16">
                <input type="submit" value="Zaloguj si�">
            </form>
            <div id="rejestracja">
                <a href="rejestracja.html">Zarejestruj si�</a>
                <a href="przypomnienie.html">Zapomnia�e� has�a?</a>
            </div>
        </div>
    </div>
    <?php
    if(isset($_SESSION['blad']))    echo $_SESSION['blad'];
?>
</body>

</html>

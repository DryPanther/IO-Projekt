<!DOCTYPE html>
<html lang="pl">

<head>

    <meta name="description" content="Nowa innowacyjna strona do wypo�yczania film�w i ksi��ek. Wszystkie ulubione filmy i ksi��ki w zasi�gu twojej r�ki! " />
    <meta name="keywords" content="Ksi��ki, ksi��ki, Filmy, filmy, e-book, wypo�yczalnia, kup, za darmo, book-pass" />
    <title>Wszystkie ulubione filmy i ksi��ki w zasi�gu twojej r�ki!</title>
    <link rel="stylesheet" href="Znajomi.css" type="text/css" />
    <link href="https://fonts.google.com/specimen/Trykker?query=trykker#standard-styles" rel="stylesheet">
</head>
<body>
    <div id="container ">
        <div id="nawigacja">
            <ul>
                <li><a href="rejestracja.html">Utw�rz konto</a></li>
                <li><a href="#Karta_podarunkowa">Karta podarunkowa</a></li>
                <li><a href="Strona_glowna.html">Strona g�owna</a></li>
                <li><a href="#Kategorie">Kategorie</a></li>
                <li><a href="logowanie.html">Zaloguj</a></li>
            </ul>
            <?php
       $kod = $_POST['kod'];
       echo "<h2>Wys�ano zaproszenie do u�ytkownika o kodzie: $kod</h2>";
       ?>
        </div>
      
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">

<head>

    <meta name="description" content="Nowa innowacyjna strona do wypo¿yczania filmów i ksi¹¿ek. Wszystkie ulubione filmy i ksi¹¿ki w zasiêgu twojej rêki! " />
    <meta name="keywords" content="Ksi¹¿ki, ksi¹¿ki, Filmy, filmy, e-book, wypo¿yczalnia, kup, za darmo, book-pass" />
    <title>Wszystkie ulubione filmy i ksi¹¿ki w zasiêgu twojej rêki!</title>
    <link rel="stylesheet" href="Znajomi.css" type="text/css" />
    <link href="https://fonts.google.com/specimen/Trykker?query=trykker#standard-styles" rel="stylesheet">
</head>
<body>
    <div id="container ">
        <div id="nawigacja">
            <ul>
                <li><a href="rejestracja.html">Utwórz konto</a></li>
                <li><a href="#Karta_podarunkowa">Karta podarunkowa</a></li>
                <li><a href="Strona_glowna.html">Strona g³owna</a></li>
                <li><a href="#Kategorie">Kategorie</a></li>
                <li><a href="logowanie.html">Zaloguj</a></li>
            </ul>
            <?php
       $kod = $_POST['kod'];
       echo "<h2>Wys³ano zaproszenie do u¿ytkownika o kodzie: $kod</h2>";
       ?>
        </div>
      
    </div>
</body>
</html>
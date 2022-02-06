# Wypożyczalnia ksiązek i filmów
## Spis treści
1. Wprowadzenie
    * Cel
    * Zakres
    * Definicje
2. Opis ogólny
    * Diagramy przypadków użycia
    * Scenariusz przypadków użycia
    * Założenia i zależności
3. Wymagania systemowe
    * Wymagania funkcjonalne
    * Wymagania niefunkcjonalne
## 1.Wprowadzenie
Dokument ten został stworzony na potrzeby projektu z Inżynierii OprogramowaniaSystem. Prezentuje  wynik fazy analizy i przedstawia specyfikacje wymagań.
### Cel
Dokument ten ma za zadanie przedstawienie wymagań na stronę internetową w formie zwięzłej, sformalizowanej i dla każdego przystępnej.
### Zakres
Dokument ten obejmuje czynniki, których wymagamy od sporządzanego systemu. Czynniki te obejmują zaplanowane platformy, liczbę
użytkowników, które muszą być obsługiwane oraz wszystko to, co ogranicza projekt.
### Definicje
## 2.Opis ogólny
Celem projektu jest utworzenie wypożyczalni książek i filmów w której klienci za uiszczeniem opłaty będą mogli wypożyczyć książki lub filmy na określony okres 
czasu lub wykupić na stałe. Serwis będzie posiadać system kont dla użytkowników co pozwoli im na śledzenie ilości wypożyczonych książek i filmów
oraz na otrzymywanie spersonalizowanych propozycji i promocji. Użytkownicy będą mieli również możliwość przedłużenia czasu wypożyczenia przy dodatkowej
opłacie. Dostępne będzie również wykupienie abonamentu pozwalającego np. na wypożyczanie bez obowiązku płacenia za każdym wypożyczeniem.
Dodatkowo każdy użytkownik będzie mógł stworzyć grupę swoich znajomych i porównywać się z nimi w ilości przeczytanych książek, lub obejrzanych
filmów w formie rywalizacji. Na stronie zostanie umieszczony ranking przeczytanych książek oraz obejrzanych filmów wraz z ilością zamieszczonych recenzji.
Platforma umożliwi przeglądanie profilu użytkownika, przeczytane książki oraz umieszczone komentarze. Administratorzy będą mieli również możliwość aktualizowania bazy 
filmów i książek o nowe pozycje.
### Diagramy przypadków użycia
![diagram](https://user-images.githubusercontent.com/92635745/152690733-850a63ca-6b69-4b39-8df1-4493cee41f4d.png)
![Diagram2](https://user-images.githubusercontent.com/92635745/152690738-7988a59f-c445-44ca-a99c-f96cdffcbe15.jpg)
### Scenariusz przypadków użycia
#### Główny scenariusz:
1. Użytkownik chce wypożyczyć film bądź książkę. 
2. Użytkownik rejestruje się na stronie wypożyczalni. 
3. Użytkownik wybiera interesujący go film bądź książkę. 
4. Użytkownik wykupuje możliwość wypożyczenia danego filmu bądź książki poprzez przelew. 
5. Użytkownik otrzymuje wiadomość e-mail, z kodem odblokowującym możliwość wypożyczenia danego filmu bądź książki na czas określony. 
6. Użytkownik po wpisaniu kodu na stronie wypożyczalni, odblokowuje możliwość wypożyczenia danego filmu bądź książki na czas określony. 
7. Użytkownik wypożycza dany film bądź książkę na czas określony. 
#### Rozszerzenia:
2. Użytkownik nie może zarejestrować się na stronę.
* Strona sprawdza, czy dane podane przez użytkownika nie znajdują się już w bazie danych strony. Jeśli dane znajdują się już w bazie danych strony, strona wyświetla komunikat informujący użytkownika o zaistniałej sytuacji.
4. Karta lub przelew został odrzucony.
* Strona sprawdza, czy dane karty podane przez użytkownika, są poprawne. Jeżeli nie, użytkownik strona wyświetla komunikat informujący użytkownika o błędzie.
* Strona wyświetla komunikat z prośbą o sprawdzenie przez użytkownika, aby ten sprawdzić, czy środki na koncie są wystarczające do wypożyczenia filmu bądź książki.
* Strona wyświetla komunikat z prośbą o sprawdzenie przez użytkownika czy limit kwoty przelewu jest wyższy niż zakup przeprowadzany przez użytkownika.
* Strona wyświetla komunikat z prośbą o sprawdzenie przez użytkownika czy dzienny limit przelewów pozwala na zakup filmu bądź książki.
5. E-mail nie dociera na skrzynkę pocztową użytkownika.
* Strona wyświetla komunikat z zapytaniem, czy e-mail dotarł na podany przez użytkownika adres e-mail. Po potwierdzeniu, że użytkownik nie otrzymał kodu na podany adres e-mail, strona wyświetli zapytanie czy kod ma zostać wysłany ponownie na podany przez użytkownika e-mail.
* Strona wyświetla komunikat z zapytaniem, czy e-mail dotarł na podany przez użytkownika adres e-mail. Po potwierdzeniu, że użytkownik nie otrzymał kodu na podany adres e-mail, strona wyświetli zapytanie czy kod ma zostać wysłany ponownie na podany przez użytkownika e-mail. Jeżeli użytkownik wybierze opcje zmiany e-mail 'u, strona wyświetli komunikat z prośbą o wpisanie nowego e-mail 'u. 
6. Kod nie działa.
* Strona wyświetla komunikat z prośbą o ponowne wpisanie kodu. 
### Założenia i zależności
* Vue.js- to front-endowa platforma JavaScript typu model-widok-widok typu open source do tworzenia interfejsów użytkownika i aplikacji jednostronicowych.
* Node.js-wieloplatformowe środowisko uruchomieniowe o otwartym kodzie do tworzenia aplikacji typu server-side napisanych w języku JavaScript.
* Redis-otwartoźródłowe oprogramowanie działające jako nierelacyjna baza danych przechowująca dane w strukturze klucz-wartość w pamięci operacyjnej serwera, przeznaczona do działania jako klasyczna baza danych, miejsce przechowywania pamięci podręcznej oraz broker wiadomości.
* MongoDB-otwarty, nierelacyjny system zarządzania bazą danych napisany w języku C++. Charakteryzuje się brakiem ściśle zdefiniowanej struktury obsługiwanych baz danych. Zamiast tego dane składowane są jako dokumenty w stylu JSON.
## 3.Wymagania systemowe
### Wymagania funkcjonalne
![wymaganie1](https://user-images.githubusercontent.com/77339484/139115423-d323060f-f0c9-400a-8c45-cd9dd5ebe07a.png)
![wymaganie2](https://user-images.githubusercontent.com/77339484/139115936-99ebacfa-1cf1-4fba-b8d4-1d07dec928ce.png)

### Wymagania niefunkcjonalne
![wymaganie10](https://user-images.githubusercontent.com/77339484/139117793-3fd7304c-93c8-4630-a080-c058cc717a86.png)
![wymaganie12](https://user-images.githubusercontent.com/77339484/139117829-7614d1f6-4cfa-4030-b513-f97c968c732b.png)

## 4.Log
* Manuel Hływa
Logowanie, Rejestracja, JWT, Utworzenie bazy danych, Backend
* Michał Cader
Logowanie, Rejestracja, Frondend
* Artur Bąk
Frontend
* Jakub Błachut
Frontend

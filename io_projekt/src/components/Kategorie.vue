<template>
<div id="strona">
<div id="nawigacja">
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/#/home">IO_Projekt</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/#/home">Strona Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#/login">Zaloguj</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#/register">Zarejestruj</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Szukaj" aria-label="Szukaj">
        <button class="btn btn-light" type="submit">Szukaj</button>
      </form>
    </div>
  </div>
</nav>
</div>
  <div id="Rodzaj">
  Filmy
  </div>
  <div id="Filmy">
        <a href="/#/FilmyAkcji"><img src="https://media.discordapp.net/attachments/517731107341336577/919597840056082512/akcji.png"></a>
        <a href="/#/FilmyPrzygodowe"><img src="https://media.discordapp.net/attachments/517731107341336577/919597849279348767/Przygodowe.png"></a>
        <a href="/#/FilmyDlaDzieci"><img src="https://media.discordapp.net/attachments/517731107341336577/919597856007016478/dladzieci.png"></a>

  </div>
    <div id="Rodzaj">
  Książki
  </div>
  <div id="Książki">
        <a href="/#/KsiążkiAkcji"><img src="https://media.discordapp.net/attachments/517731107341336577/919597840056082512/akcji.png"></a>
        <a href="/#/KsiążkiPrzygodowe"><img src="https://media.discordapp.net/attachments/517731107341336577/919597849279348767/Przygodowe.png"></a>
        <a href="/#/KsiążkiDlaDzieci"><img src="https://media.discordapp.net/attachments/517731107341336577/919597856007016478/dladzieci.png"></a>

  </div>
  <div id="footer">
.
</div>
</div>
</template>

<script>
</script>

<style scoped>  
#nawigacja{
    z-index: 9999;
    margin-top:-60px;
    background:#59320A;
    position:fixed;
    width:100%;
}
#Filmy {
     margin-top:5%;
  display:flex;
  padding:30px;
  justify-content:space-evenly;

}
#Książki {
     margin-top:5%;
  display:flex;
  padding:30px;
  justify-content:space-evenly;
}
#Rodzaj {
    position:absolute;
    width: 100%;
    height: 100%;
    font-size:40px;  
}
#footer{
  background:#59320A;
  position:absolute;
  width:100%;
  margin-top:4%;
}
#strona{background:#F2E3D6;height:100%;position:fixed;width:100%;}
</style>


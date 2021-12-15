<template>
<div >
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
          <a class="nav-link" href="/#/kategorie">Kategorie</a>
        </li>
              <li class="nav-item">
                <a class="nav-link" href="/#/login">Zaloguj</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#/register">Zarejestruj</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#/Karta">Karta podarunkowa</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="/#/Friends">Znajomi</a>
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
  <div id="strona">
          <div id="main">
            <h1>Idealne na prezent</h1>
              <br><br>
            <p>Bliska Ci osoba jest molem książkowym? Zbliżają się jej urodziny
            i nie wiesz co kupić jej na prezent?</p>
              <br>
            <h3>Kup jej bon na książke i problem z głowy!</h3>
              <br>
            <button @click="error" class="btn btn-dark">KUP</button>
              <br><br>
            <h5>Lub zrealizuj kod</h5>
              <form action="">
              <br>
                <input type="text" name="text" placeholder="KOD" value="">
                  <br><br>
                <input type="reset" class="btn btn-dark">
                <input type="submit" class="btn btn-dark" value="Zrealizuj" > 
              </form>
              <br>
    </div> 
</div>
</div>
</template>

<script>

export default {
  data () {
    
    return {
      myStyle:{
            backgroundColor:"#16a085" 
            }
    }
  },
  methods: {
    error(){
      alert('Proszę się najpierw zalogować!')
    }
  }

}
</script>

<style scoped>

#nawigacja{
    z-index: 9999;
    margin-top:-60px;
    background:#59320A;
    position:fixed;
    width:100%;
}
#strona{background:#F2E3D6;height:100%;position:absolute;width:100%;margin-top:-6px;}

#main{
   margin-top: 5%;

}
</style>


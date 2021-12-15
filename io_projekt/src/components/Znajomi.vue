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
                <a class="nav-link" href="/#/login">Zaloguj</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#/register">Zarejestruj</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#/Karta">Karta podarunkowa</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="/#/Znajomi">Znajomi</a>
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
  <div id="mainpage">
      <div id="main">
            <h1>Zdrowa konkrecja, zawdze podkręca atmosfere!</h1>
              <br><br>
            <h4>Sprawdź się ze swoim znajomym, kto wiecęj przeczytał książek!</h4>
              <br>
              <br>
            <h3>Zaloguj się poniżej, a następnie dodaj znajomych!</h3>
              <br>
              <br>
            <button @click="error" class="btn btn-dark">Zaloguj</button>
              <br><br>
          
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
#mainpage{background:#F2E3D6;height:100%;position:absolute;width:100%;margin-top:-6px;}

#main{
   margin-top: 5%;

}
</style>


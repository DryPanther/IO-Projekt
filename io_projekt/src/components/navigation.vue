<template>
<div >
<div id="nawigacja">
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">IO_Projekt</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Strona Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Zaloguj</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Zarejestruj</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kategorie">Kategorie</a>
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

</div>
</template>

<script>

export default {
  data () {
    
    return {
     
    }
  },
 

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


</style>


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
          <a class="nav-link active" aria-current="page" href="/home">Strona Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/karta">Karta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/znajomi">Znajomi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kategorie">Kategorie</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="/user">Profil</a>
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
 <div id="Informacje">
<form>
  <div id="dane" class="mb-3">
    <input type="email" class="form-control" id="ID" placeholder="ID">
  </div>
</form>
<form>
  <div id="dane" class="mb-3">
    <input type="email" class="form-control" id="Name" placeholder="Name">
  </div>
</form>
<form>
  <div id="dane" class="mb-3">
    <input type="email" class="form-control" id="Email" placeholder="Email">
  </div>
</form>
</div>
</div>
</template>
<script>
</script>
<style scoped>
#Informacje{
margin-top:5%;
}
#dane{
    margin-top:3%;
    margin-left:35%;
    margin-right:35%;
}
#nawigacja{
    z-index: 9999;
    margin-top:-60px;
    background:#59320A;
    position:fixed;
    width:100%;
    
}
#strona{background:#F2E3D6;height:100%;position:absolute;width:100%;margin-top:-6px;}
</style>

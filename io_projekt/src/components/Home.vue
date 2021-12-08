<template>
  <div>

  <div id="nawigacja">
<nav class="navbar navbar-expand-lg navbar-dark ">
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
<div id="kontent">

   <div id="naglowek">TYSIĄCE HISTORII W ZASIĘGU TWOJEJ RĘKI</div> 
      <div id="tekstReklamy">
        Poznaj nas i naszą nową wypożyczalnię filmów i książek online, dzięki której możesz trzymać
        wszystkie swoje ulubione filmy i książki w jednym miejscu.
        <img src="https://image.freepik.com/darmowe-zdjecie/portret-pieknej-usmiechnietej-dziewczyny-ubranej-w-biala-pizame-i-sluchajacej-muzyki-w-sluchawkach-beztroska-kobieta-siedzi-na-krzesle-miekkiej-torby_158538-16881.jpg" class="img-fluid" >
      </div>
  <div id="cards">
  <div class="card" style="width: 18rem;">
  <img src="https://a.allegroimg.com/original/0cc28a/7b47c56e42f7bcce6e06f22be5f1" class="card-img-top" alt="hobbit" width="560" height="359">
  <div class="card-body">
    <h5 class="card-title">Igrzyska Śmierci</h5>
    <p class="card-text">A może ty zostaniesz zwycięzcą?</p>
    <a href="#" class="btn btn-primary">Kup</a>
  </div>
</div>
   <div class="card" style="width: 18rem;">
  <img src="https://image.ceneostatic.pl/data/products/47356886/i-hobbit-bitwa-pieciu-armii-dvd.jpg" class="card-img-top" alt="hobbit" width="560" height="359">
  <div class="card-body">
    <h5 class="card-title">Hobbit</h5>
    <p class="card-text">Pomóż nam ocalić śródziemie.</p>
    <a href="#" class="btn btn-primary">Kup</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://stephenking.pl/wp-content/uploads/2017/07/To-1-720x1024.jpg" class="card-img-top" alt="hobbit" width="560" height="359">
  <div class="card-body">
    <h5 class="card-title">To</h5>
    <p class="card-text">Nigdy nie podążaj za balonikiem...</p>
    <a href="#" class="btn btn-primary">Kup</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://www.mediarodzina.pl/mrcore/uploads/2020/02/harry_potter_kolorowe_kamien_gryffindor_800.jpg" class="card-img-top" alt="hobbit" width="560" height="359">
  <div class="card-body">
    <h5 class="card-title">Harry Potter</h5>
    <p class="card-text">Ten którego imienia nie wolno wymawiać.</p>
    <a href="#" class="btn btn-primary">Kup</a>
  </div>
</div>
  </div>
 
<div id="poznajNas">
        <div><img src="https://image.flaticon.com/icons/png/512/49/49243.png" class="img-fluid" width="255" height="247" ></div>
        <div id="dzieki">
        Dzięki naszemu systemowi dodawania znajomych możecie ze sobą rywalizować w ilości przczytanych książek lub obejrzanych filmów.
        </div>
        <div><img src="https://image.flaticon.com/icons/png/512/49/49243.png" class="img-fluid" width="255" height="247" ></div>
</div>
<div id="footer">
.
</div>

</div>

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
#kontent{
  background:#F2E3D6;
  top:0px;
  width:100%;
  height:100%;
}
#naglowek {
  margin-left:10%;
  width: 600px;
    font-size: 40px;
    line-height: 50px;
}
#tekstReklamy {

    font-size: 25px;
    line-height: 31px;
    display: flex;
    align-items: center;
    
}
img{
  border-radius:40px;
}
.card{
  background:#59320A;
  color:white;
  
}
#cards{
  margin-top:5%;
  display:flex;
  padding:30px;
  justify-content:space-evenly;
}
#poznajNas{
  margin-top:5%;
  align-items:center;
  display:flex;
  margin-left:23%;
}
#dzieki{
width:300px;
font-size:20px;
}
#footer{
  background:#59320A;
  margin-top:10%;
}




</style>

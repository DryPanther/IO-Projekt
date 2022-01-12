<template>
  <div>

<navigation />
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
 <a href="https://www.facebook.com/"><img src="https://media.discordapp.net/attachments/353905865667117057/930818562254336020/fa.png"></a>
 <a href="https://www.twitter.com/"><img src="https://media.discordapp.net/attachments/353905865667117057/930820944602214460/t.png"></a>
 e-mail: IO_Projekt@poczta.com Kontakt: 123456789
</div>

</div>

  </div>  
 
</template>

<script>

import nawigacja from '@/components/navigation.vue'
export default {
  components: {
    navigation: nawigacja
    
  },
}
</script>

<style scoped>

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
  text-align:left;
  padding:6px;
  word-spacing:10px;
  color:white;
}

</style>

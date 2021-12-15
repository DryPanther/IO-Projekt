<template>
<div id="strona">
<navigation />
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

import nawigacja from '@/components/navigation.vue'
export default {
  components: {
    navigation: nawigacja
    
  },
}
</script>

<style scoped>  

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


<template>
<div >
<navigation />
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
import nawigacja from '@/components/navigation.vue'

export default {

  components: {
    navigation: nawigacja
    
  },
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


#mainpage{background:#CDF7F2;height:100%;position:absolute;width:100%;margin-top:-6px;}

#main{
   margin-top: 5%;

}
</style>


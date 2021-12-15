<template>
<div >
<navigation />
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


#strona{background:#F2E3D6;height:100%;position:absolute;width:100%;margin-top:-6px;}

#main{
   margin-top: 5%;

}
</style>


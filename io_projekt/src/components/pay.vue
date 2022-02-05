<template>

    
        <div id="strona"> 
            <navigation />
            <br>
            <h1>Proszę podać dane do formularza:</h1>
            <form action="">
              <br>
                <input type="text" name="text" placeholder="imię" value="">
                 <input type="text" name="text" placeholder="nazwisko" value="">
                <br><br>
                 <input type="email"  placeholder="adres e-mail" value="">
                 <br><br>
                 <p>Wybierz sposób płatności</p>
                 
                 <select>
                     <option>Blik</option>
                     <option>PayPal</option>
                     <option>Visa</option>
                 </select>
                 <br>
                 <br>
                 <input type="text" name="text" placeholder="kod" value="">
                <br><br>

                <input type="reset" class="btn btn-dark">
                <input type="submit" class="btn btn-dark" value="Zrealizuj" > 
              </form>
              <br>

           
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


#strona{background:#CDF7F2;height:100%;position:absolute;width:100%}

#main{
   margin-top: 5%;

}
</style>


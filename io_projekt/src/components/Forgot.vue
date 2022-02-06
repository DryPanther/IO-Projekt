<template>
  <div id="strona">
<navigation />
<div id="formularz">
   <h1>Przypomnij hasło</h1>

   <form>
  <div id="email" class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="email">
    <div id="emailHelp" class="form-text">Wiadomość z instrukcjami dotyczącymi zmiany hasła zostanie wysłana na podany adres e-mail.</div>
  </div>
  <button type="submit" class="btn btn-dark">Nie pamiętam hasła</button>
</form>
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
#email{
    margin-left:35%;
    margin-right:35%;
}
#haslo{
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
#strona{
  background:#CDF7F2;
  height:100%;
  position:absolute;
  width:100%;
  }
h1{
  margin-top:7%;
}
#email{
margin-top:3%;
}
button{
margin-top:3%;
}
</style>

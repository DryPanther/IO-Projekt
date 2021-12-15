<template>
<div id="strona">
<navigation />
  <div id="formularz">
   <h1>Logowanie</h1>

   <form>
  <div id="email" class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Twój email nie zostanie udostępniony.</div>
  </div>
  <div id="haslo" class="mb-3">
    <label for="exampleInputPassword1" clabss="form-label">Hasło</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div id="check" class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-dark">Zaloguj</button>
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
#check{
    margin:45%;
    margin-top:0%;
}

#strona{background:#F2E3D6;height:100%;position:absolute;width:100%;}
h1{
  margin-top:7%;
}
#email{
margin-top:3%;
}
</style>


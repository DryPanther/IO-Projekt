<template>
  <div id="strona">

<navigation />
<div id="formularz">
   <h1>Zarejestruj</h1>

   <form>
  <div id="email" class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="email">
    <div id="emailHelp" class="form-text">Twój email nie zostanie udostępniony.</div>
  </div>
  <div id="haslo" class="mb-3">
    <label for="exampleInputPassword1" clabss="form-label">Hasło</label>
    <input type="password" class="form-control" id="exampleInputPassword1" v-model="password">
  </div>
  <button type="submit" class="btn btn-dark">Zarejestruj</button>
</form>
  </div>
</div>
</template>

<script>
import AuthenticationService from '@/services/AuthenticationService'
import nawigacja from '@/components/navigation.vue'

export default {
  components: {
    navigation: nawigacja
    
  },
  data () {
    return {
      email: '',
      password: ''
    }
  },
  methods: {
    async register() {
      await AuthenticationService.register({
        email: this.email,
        password: this.password
      })
    }

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

#strona{background:#F2E3D6;height:100%;position:absolute;width:100%;}
h1{
  margin-top:7%;
}
#email{
margin-top:3%;
}
</style>

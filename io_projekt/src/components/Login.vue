<template>
<div id="strona">
<navigation />
  <div id="formularz">
   <h1>Logowanie</h1>

   <form @submit.prevent="handleSubmit">
  <div id="email" class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="email">
    <div id="emailHelp" class="form-text">Twój email nie zostanie udostępniony.</div>
  </div>
  <div id="haslo" class="mb-3">
    <label for="exampleInputPassword1" clabss="form-label">Hasło</label>
    <input type="password" class="form-control" id="exampleInputPassword1" v-model="password">
  </div>
  <a class="nav-link" href="/forgot">Nie pamiętam hasła</a>
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
import axios from 'axios'
export default {
  name: 'Login',
  components: {
    navigation: nawigacja
  },
  data(){
    return{
      email:'',
      password:''
    }
  },
  methods:{
    async handleSubmit(){
      const response = await axios.post('http://localhost:3000/auth/login',{
        email:this.email,
        password:this.password
      });
      localStorage.setItem('token',response.data.token);
    }
  }
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

#strona{background:#CDF7F2;height:100%;position:absolute;width:100%;}
h1{
  margin-top:7%;
}
#email{
margin-top:3%;
}
</style>


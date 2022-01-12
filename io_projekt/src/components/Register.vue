<template>
  <div id="strona">

<navigation />
<div id="formularz">
   <h1>Zarejestruj</h1>

   <form @submit.prevent="handleSubmit">
  <div id="email" class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="email">
    <div id="emailHelp" class="form-text">Twój email nie zostanie udostępniony.</div>
  </div>
  <div id="haslo" class="mb-3">
    <label for="exampleInputPassword1" clabss="form-label">Hasło</label>
    <input type="password" class="form-control" id="exampleInputPassword1" v-model="haslo">
  </div>
  <button type="submit" class="btn btn-dark">Zarejestruj</button>
</form>
  </div>
</div>
</template>

<script>
import nawigacja from '@/components/navigation.vue'
import axios from 'axios'
export default {
  name:'register',
  components: {
    navigation: nawigacja
  },
  data(){
    return{
      email:'',
      haslo:''
    }
  },
methods:{
async handleSubmit(){
      const response = await axios.post('register',{
        email:this.email,
        haslo:this.haslo
      });
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

#strona{background:#F2E3D6;height:100%;position:absolute;width:100%;}
h1{
  margin-top:7%;
}
#email{
margin-top:3%;
}
</style>

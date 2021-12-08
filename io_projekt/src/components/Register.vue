<template>
  <div id="strona">
  <div id="nawigacja">
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/#/home">IO_Projekt</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/#/home">Strona Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#/login">Zaloguj</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#/register">Zarejestruj</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Szukaj" aria-label="Szukaj">
        <button class="btn btn-light" type="submit">Szukaj</button>
      </form>
    </div>
  </div>
</nav>
</div>
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
export default {
  
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
#nawigacja{
    z-index: 9999;
    margin-top:-60px;
    background:#59320A;
    position:fixed;
    width:100%;
}
#strona{background:#F2E3D6;height:100%;position:absolute;width:100%;}
</style>

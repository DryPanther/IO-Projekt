<template>

<div>

<h1>Idealne na prezent</h1>
<br><br>
<p>Twoja mama jest molem książkowym, zbliżają się jej urodziny
i nie wiesz co kupić jej na prezent?</p>
<br>
<h3>Kup jej bon na książke i problem z głowy!</h3>
<br>
<button @click="error" class="btn btn-dark">KUP</button>
<br>
<br>
<h5>Lub zrealizuj kod</h5>
<form action="">
  <br>
<input type="text" name="text" placeholder="KOD" value="">
<br>
<br>

<input type="reset" class="btn btn-dark">
<input type="submit" class="btn btn-dark" value="Zrealizuj" > 
</form>
<br>
</div>

</template>

<script>

export default {
  data () {
    
    return {
     
    }
  },
  methods: {
    error(){
      alert('Proszę się najpierw zalogować!')
    }
  }

}
</script>


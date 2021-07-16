<template>
  <div>
      
      <h1>Questi sono i risultati della ricerca</h1>
      <router-link class="nav-link" :to="{name: 'advsearch'}">Advanced Search</router-link>
      <router-link class="nav-link" :to="{name: 'house'}">House</router-link>
      <ul>
        <li>
          risultato
        </li>
        <li>
          risultato
        </li>
        <li>
          risultato
        </li>
        <li>
          risultato
        </li>
        <li>
          risultato
        </li>
      </ul>
      

  </div>
</template>

<script>
export default {
    name: 'Results'
}
</script>

<style>

</style>
<template>
  <div>
      
      <h1>Questi sono i risultati della ricerca</h1>
      <router-link class="nav-link" :to="{name: 'advsearch'}">Advanced Search</router-link>
      <router-link class="nav-link" :to="{name: 'house'}">House</router-link>



  </div>
</template>

<script>
export default {
    name: 'Search'
}
</script>

<style>

</style>
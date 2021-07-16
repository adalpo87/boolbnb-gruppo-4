<template>
    <header class="text-center">
        <h1>Questo è l header</h1>
        <router-link class="nav-link" :to="{name: 'home'}">Torna alla home</router-link>
    </header>
</template>

<script>
export default {
    name: 'Header'
}
</script>

<style lang="scss" scoped>
 header{
     height: 100px;
     background-color: aquamarine;
 }
</style>
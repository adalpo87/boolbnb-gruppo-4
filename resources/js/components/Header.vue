<template>
    <header class="text-center">
        <h1>Questo è l header</h1>
        <router-link class="nav-link" :to="{name: 'home'}">Torna alla home</router-link>
        <a href="http://localhost:8000/user">Login</a>
        <a href="http://localhost:8000/register">Register</a>
    </header>
</template>

<script>
export default {
    name: 'Header'
}
</script>

<style lang="scss" scoped>
 header{
     height: 150px;
     background-color: aquamarine;
 }
</style>
<template>
  <nav class="navbar navbar-expand navbar-light bg-light">
    <a class="navbar-brand" href="#">Boolpress</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item" v-for="menuItem in menuItems" :key="menuItem.routeName">
                <router-link class="nav-link" :to="{name: menuItem.routeName}">{{menuItem.label}}</router-link>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="/admin">Accesso Admin</a>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: 'Header',
    data() {
        return {
            menuItems: [
                {
                    routeName: 'home',
                    label: 'Home'
                },
                {
                    routeName: 'about',
                    label: 'Chi Siamo'
                },
                {
                    routeName: 'contact',
                    label: 'Contatti'
                },
                {
                    routeName: 'blog',
                    label: 'Blog'
                },
            ]
        }
    }
}
</script>

<style>
    .router-link-exact-active {
        font-weight: bold;
        text-transform: uppercase;
    }
</style>

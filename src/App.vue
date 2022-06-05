<template>

  <MyNavbar />

  <MyHome />

  <MyServices />

  <img alt="Vue logo" src="./assets/logo.png">
  <HelloWorld msg="Welcome to Your Vue.js App"/>
</template>

<script>
import MyNavbar from './components/MyNavbar.vue'
import MyHome from './components/MyHome.vue'
import MyServices from './components/MyServices.vue'
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    MyNavbar,
    HelloWorld,
    MyHome,
    MyServices,
}
}
</script>

<style>
* {
  margin: 0px;
  padding: 0px;
}
</style>

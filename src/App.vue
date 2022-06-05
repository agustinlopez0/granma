<template>

  <MyNavbar />

  <img alt="Vue logo" src="./assets/logo.png">
  <HelloWorld msg="Welcome to Your Vue.js App"/>
</template>

<script>
import MyNavbar from './components/MyNavbar.vue'
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    MyNavbar,
    HelloWorld,
  }
}
</script>

<style>
* {
  margin: 0px;
  padding: 0px;
}
</style>

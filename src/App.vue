<template>

  <MyNavbar />

  <MyHome />

  
  <MyServices />
  <MyClients />
  <AboutUs />
  

  <img alt="Vue logo" src="./assets/logo.png">
  <HelloWorld msg="Welcome to Your Vue.js App"/>

  <MyFooter />
</template>

<script>
import MyNavbar from './components/shared/MyNavbar.vue'
import MyFooter from './components/shared/MyFooter.vue'
import MyHome from './components/MyHome.vue'
import MyServices from './components/MyServices.vue'
import MyClients from './components/MyClients.vue'
import HelloWorld from './components/HelloWorld.vue'
import AboutUs from './components/AboutUs.vue'

export default {
  name: 'App',
  components: {
    MyNavbar,
    HelloWorld,
    MyHome,
    MyServices,
    MyClients,
    MyFooter,
    AboutUs
}
}
</script>

<style>
  * {
    margin: 0px;
    padding: 0px;
  }
  h3{
    font-size: 40px;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    margin: 15px 0;
    font-weight: 500;
  }
  .line{
    height: 1px;
    background-color: rgba(0,0,0,.1);
  }
  .line-2{
    height: 1px;
    background-color: rgba(255, 255, 255, 0.39);
    width: 80%;
    margin: auto;
  }
</style>

<template>
  <header :class="{headerHeigth: !isOpen}" >
    <div class="nav-container">
      <a class="navbar-logo" @click="closeNav()" href="#" title="Granma-Ingeniería Eléctrica">
        <img src="@/assets/granma-white.png" height="65" class="navbar-img" alt="Electricista matriculado Rosario">
      </a>

      <div id="burguer-container">
        <div id="nav-burguer" @click="toggleNav()" :class="{open: isOpen}">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <nav>
        <ul>
          <li class="nav-item"> <a class="nav-link" href="#servicios">Servicios</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#quienes-somos">Nosotros</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#clientes">Clientes</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#contacto">Contacto</a> </li>
        </ul>
      </nav>
    </div>
    <nav id="nav-collapse" :class="{disnone: !isOpen}">
      <ul>
          <li class="nav-item" @click="closeNav()"> <a class="nav-link" href="#servicios">Servicios</a> </li>
          <li class="nav-item" @click="closeNav()"> <a class="nav-link" href="#quienes-somos">Nosotros</a> </li>
          <li class="nav-item" @click="closeNav()"> <a class="nav-link" href="#clientes">Clientes</a> </li>
          <li class="nav-item" @click="closeNav()"> <a class="nav-link" href="#contacto">Contacto</a> </li>
        </ul>
    </nav>
  </header>
</template>

<script>
export default {
  name: 'MyNavbar',
  data: () => ({
    isOpen: false
  }), 
  methods: {
    toggleNav(){
      this.isOpen = !this.isOpen
    },
    closeNav(){
      this.isOpen = false
    }
  }
}
</script>

<style scoped>
  #burguer-container{
    display: none;
  }

  #nav-burguer {
    width: 30px;
    height: 20px;
    position: relative;
    margin: 50px auto;
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transition: .5s ease-in-out;
    -moz-transition: .5s ease-in-out;
    -o-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
    cursor: pointer;
  }

  #nav-burguer span{
    display: block;
    position: absolute;
    height: 5px;
    width: 100%;
    background: #ffffff;
    border-radius: 9px;
    opacity: 1;
    left: 0;
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transition: .25s ease-in-out;
    -moz-transition: .25s ease-in-out;
    -o-transition: .25s ease-in-out;
    transition: .25s ease-in-out;
  }

  #nav-burguer span:nth-child(1) {
    top: -10px;
  }

  #nav-burguer span:nth-child(2) {
    top: 0px;
  }

  #nav-burguer span:nth-child(3) {
    top: 10px;
  }

  #nav-burguer.open span:nth-child(1) {
    top: 0px;
    -webkit-transform: rotate(135deg);
    -moz-transform: rotate(135deg);
    -o-transform: rotate(135deg);
    transform: rotate(135deg);
  }

  #nav-burguer.open span:nth-child(2) {
    opacity: 0;
    left: -60px;
  }

  #nav-burguer.open span:nth-child(3) {
    top: 0px;
    -webkit-transform: rotate(-135deg);
    -moz-transform: rotate(-135deg);
    -o-transform: rotate(-135deg);
    transform: rotate(-135deg);
  }


  a{
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    color: #fff;
    transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);
  }

  .nav-link:hover{
    background-color: #040738;
  }

  header{
    width: 100vw;
    background-color: #30336b;    
    position: fixed;
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
  }

  .navbar-logo{
    display: flex;
    align-items: center;
    padding: 30px 0;
  }

  .navbar-img{
    height: 50px;
  }

  .nav-container{
    width: 80%;
    margin: auto;
    display: flex;
    justify-content: space-between;
  }

  .navbar-toggler{
    display: none;
  }

  nav ul{
    height: 100%;
    list-style: none;
    display: flex;
    align-items: center;
  }

  .nav-link{
    font-size: 16px;
    padding: 43.5px;
    height: 100%;
    margin: 0;
  }

  #nav-collapse {
    display: none;
  }



  @media screen and (max-width: 1000px) {
    .navbar-img{
      height: 35px;
    }
    .nav-item:nth-last-child(1) a {
      background: none;
    }
    .nav-link{
      padding: 10px 43.5px;
    }
    .aux{
      display: block;
    }
    nav{
      transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);
      display: none;
    }
    .headerHeigth{
      transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);
      height: 110px;
    }
    #nav-collapse{
      display: block;
    }
    #nav-collapse ul{
      display: flex;
      flex-direction: column;
    }
    #nav-collapse ul li {
      width: 100vw;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #nav-collapse ul li a{
      width: 100vw;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 20px;
      padding: 20px;
      width: 100vw;
    }

    #burguer-container{
      display: flex;
      justify-content: flex-end;
    }
  }
  
  .disnone{
    display: none!important;;
  }
</style>

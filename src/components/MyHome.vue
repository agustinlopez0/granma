<template>
  <section id="home">
    <div id="home-container">
      <div class="home-1">
        <div class="p1">
          <h1> Consultora en Ingeniería Eléctrica,<br>Seguridad e Higiene y Gas.</h1>
          <address>
            Rosario, Santa Fe.
          </address>
        </div>
      </div>

      <div class="home-2">
        <h2>De Nelson López e hijos.</h2>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'MyHome',
}
</script>

<style scoped>
  #home{
    padding-top: 110px;
    height: calc(100vh - 110px);  
    /* background: url('@/assets/fondo1.jpg') fixed; */
    background: url('@/assets/fondo1.jpg');
    background-size: cover;
  }

  h1, h2, address{
    font-family: 'Poppins', sans-serif;
  }

  #home-container{
    height: 100%;
    width: 80%;
    margin: auto;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  h1{
    font-size: 40px;
  }
  .home-1{
    width: 700px;
    margin-top: 40px;
    padding: 35px;;
    color: #fff;
    background-color: rgba(0,0,0,.6 );
  }
  .home-2{
    display: flex;
    justify-content: flex-end;
  }
  .home-2 h2{
    padding: 35px 60px;
    margin-bottom: 40px;
    background-color: rgba(0,0,0,.6 );
    color: #fff;
    font-weight: 400;
  }
  .home-1, .home-2 h2{
    border-radius: 5px;
  }

  @media screen and (max-width: 1000px) {
    h1{
      font-size: 25px;
    }
    h2{
      font-size: 20px;
    }
    .home-1{
      padding: 25px;
      width: auto;
    }
    .home-2{
      display: block;
      /* justify-content: center; */
    }
    .home-2 h2{
      padding: 25px;
    }
  }

  @media screen and (max-width: 600px) {
    #home{
      background-image: url('@/assets/fondo1c.jpg');
    }
  }
</style>

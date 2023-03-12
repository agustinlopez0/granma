<template>
    <footer>
        <section id="footer-container">
                <section class="top-footer">
                <section id="img-footer">
                    <img src="@/assets/nelson-lopez.png" alt="">
                </section>
                <section id="horarios">
                    <h3>Horarios</h3>
                    <p> Lunes a viernes:
                        8:00 a 20:00 <br>
                        Sábados: 
                         8:00 a 12:00</p>
                </section>
                <section id="saludo">
                    <h3>Lo estamos esperando</h3>
                    <p>Presupuestos sin costo, su consulta no molesta</p>
                </section>

            </section>

            <div class="line-2"></div>
            <section class="social">
                <i class="fa-solid fa-location-dot"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-whatsapp"></i>
            </section>

            <h2 class="copy">Copyrigth &#169; Granma {{year}}</h2>
        </section>
    </footer>
</template>

<script>
export default {
  name: 'MyFooter',
  data: () => ({
    year: new Date().getFullYear()
  })
}
</script>

<style scoped>
    #footer-container{
        width: 90%;
        margin: auto;
        padding-top: 1rem;
        font-family: 'Poppins', sans-serif;

    }
    footer{
        margin: auto;
        background-color: #30336b;
        font-size: 20px;
        color: white;
        text-shadow: var(--footer-shadow);
    }
    h3{
        margin: 0;
        text-align: left;
    }

    .top-footer{
        display: grid;
        grid-template-columns: 1fr 2fr 2fr;
    }

    .top-footer section{
     padding: 20px;
    }

    #horarios{

    }

    .top-footer section p{
        font-size: 15px;
    }

    .top-footer section h3{
        font-size: 25px;
        font-weight: bolder;
    }

    footer h2{
        font-size: 15px;
        text-align: center;
    }

    #img-footer{
        display: flex;
        justify-content: center;
    }

    #img-footer img{
        padding: 0;
        /* -webkit-filter: drop-shadow(5px 5px 5px rgb(230, 0, 0)); */
        filter: drop-shadow(var(--footer-shadow)); 
        margin-bottom: 10px;
        height: 150px;
    }

    .social{
        text-align: center;
    }

    .social i{
        font-size: 25px;
        padding: 25px;
        transform: scale(1);
        transition: all .2s cubic-bezier(0.39, 0.575, 0.565, 1);
    }

    .social i:hover{
        text-shadow: var(--footer-shadow);
        transform: scale(1.5);
        cursor: pointer;
    }



    .copy{
        padding-bottom: 15px;
    }

    @media screen and (max-width: 900px) {
        .top-footer{
            display: flex;
            flex-direction: column;
        }
        #img-footer img{
            height: 150px;
            margin-bottom: 0px;
            /* animation: latido 2s infinite; */
        }
    }
</style>

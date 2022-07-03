<template>
    <footer>
        <section id="footer-container">
                <section class="top-footer">
                <section id="img-footer">
                    <img src="@/assets/nelson-lopez.png" alt="">
                </section>
                <section>
                    <h3>Horarios</h3>
                    <p>Somos un grupo de alumnos de 6to informática del politécnico cursando la materia de schumi que no me acuerdo como se llama</p>
                </section>
                <section>
                    <h3>¿Qué es Peliculero?</h3>
                    <p>Es un sitio web para la recomendación de peliculas basada en tus gustos y experiencias</p>
                </section>

            </section>

            <div class="line-2"></div>
            <section class="social">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-twitch"></i>
                <i class="fa-brands fa-github"></i>
            </section>

            <h2 class="copy">Copyrigth &#169; Peliculero 2022</h2>
        </section>
    </footer>
</template>

<script>
export default {
  name: 'MyFooter',

}
</script>

<style scoped>
    #footer-container{
        width: 90%;
    }
    footer{
        margin: auto;
        background-color: #30336b;
        font-family: 'Poppins', sans-serif;        
        font-size: 20px;
        color: white;
        text-shadow: var(--footer-shadow);
    }

    .top-footer{
        display: grid;
        grid-template-columns: 1fr 2fr 2fr;
    }

    .top-footer section{
     padding: 20px;
    }

    .top-footer section p,
    .top-footer section h3{
        font-family: "neon";
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
        font-family: "neon";
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

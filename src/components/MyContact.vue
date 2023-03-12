<template>
    <section id="contacto">
        <div id="contact-container">
            <div class="line"></div>
                <h3>Contacto</h3>
            <div class="line"></div>
            
            <article id="container">

                    <form id="form">
                        <div class="elem-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" title="Completa este campo" placeholder="Ej: Juan Pérez" required id="f-nombre">
                        </div>
                        <div class="elem-group">
                            <label for="email">Correo electrónico:</label>
                            <input type="email" title="Completa este campo" placeholder="Ej: juanperez@gmail.com" required id="f-mail">
                        </div>

                        <div class="elem-group">
                            <label for="title">Numero de teléfono:</label>
                            <input type="tel" required id="f-tel" title="Completa este campo" placeholder="Ej: +54 9 341 123-4567">
                        </div>
                        <div class="elem-group">
                            <label for="message">Mensaje:</label>
                            <textarea title="Completa este campo" placeholder="Deje su consulta aquí." required id="f-mens"></textarea>
                        </div>
                        <button class="btn btn-primary" title="Click para enviar"> Enviar</button>
                    </form>

                    <div id="info">
                        <div class="sec-info">
                            <a href="https://api.whatsapp.com/send?phone=5493415116107&text=Hola!%20Quer%C3%ADa%20solicitar%20un%20presupuesto">

                            <i class="fa-brands fa-whatsapp"></i>
                            <article>
                                <h4>
                                    WhatsApp
                                </h4>
                                <p>
                                        +54 9 341 511-6107 
                                    </p>
                            </article>
                            </a>
                        </div>

                        <div class="sec-info">
                            <a href="https://facebook.com/electricistamatriculadoenrosario">
                            <i class="fa-brands fa-facebook"></i>
                            <article>
                                <h4>Facebook</h4>
                                <p>
                                    facebook.com/electricistamatriculadoenrosario
                                </p>
                            </article>
                            </a>
                        </div>
                        <div class="sec-info">
                            <a href="mailto:nelsonolopez@yahoo.com">
                            <i class="fa-solid fa-envelope"></i>                            
                            <article>
                                <h4>Correo Electrónico</h4>
                                <p>nelsonolopez@yahoo.com</p>
                            </article>
                            </a>
                        </div>
                        <div class="sec-info">
                            <a href="https://goo.gl/maps/7tDAxuhztbFfrTuGA">
                                <i class="fa-solid fa-location-dot"></i>
                                <article>
                                    <h4><address>Rosario, Santa Fe, Argentina</address></h4>
                                </article>
                            </a>
                        </div>

                    </div>

            </article>

        </div>
    </section>
</template>

<script>
export default {
  name: 'MyContact',
}
</script>

<style scoped>
    #contacto{
        background-color: #eee;
        font-family: 'Poppins', sans-serif;

    }
    #contact-container{
        width: 80%;
        margin: auto;
        padding: 30px 0 80px;
    }

    #container{
        margin-top: 2rem;
        display: flex;
        justify-content: space-between;
    }

    #form{
        width: 40%;
        border-radius: 12px;
        padding: 40px ;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        background-color: #fcfcfc;
    }
    a{
        text-decoration: none;
        color: #000;
    }
    a:hover p{
        text-decoration: underline;
    }

    label{
        display: block;
        /* text-align: center; */
        font-size: 20px;
        font-weight: 600;
    }
    input, textarea{
        display: block;
        width: 95%;
        font-family: 'Poppins', sans-serif;
        margin: .5rem auto 2rem auto;
        padding: 10px;
        border-radius: 5px;
        border: .1px solid #aaa;
    }
    input:focus, textarea:focus{
        outline: .1px solid #555;
    }
    textarea{
        height: 10rem;
        resize: vertical;
    }
    button{
        background-color: #30336b;
        padding: 15px 40px;
        border: none;
        color: #fff;
        cursor: pointer;
        transition: .2s all;
    }
    button:hover{
        box-shadow: 0 2px 5px rgb(0 0 0)
    }
   
    #info{
        width: 50%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
    }
    .sec-info{
        margin-bottom: 3rem;

    }
    .sec-info i{
        font-size: 60px;
        margin: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    h4{
        text-align: center;
    }

    @media screen and (max-width: 1100px) {
        #container{
            flex-direction: column;
            width: 100%;
        }
        #contact-container{
            width: 90%;
            padding: 0;
        }
        #form{
            width: 90%;
        }
        #info{
            width: 90%;
            margin: auto;
        }
        textarea{
            height: 6rem;
        }
        #form{
            margin: auto;
            padding: 20px 20px;
            margin-bottom: 3rem;
        }
    }
</style>

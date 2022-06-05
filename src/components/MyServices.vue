<template>
    <section id="servicios">
        <div id="services-container">
            <div class="line"></div>
                <h3>Servicios</h3>
            <div class="line"></div>
            <article class = "card">
                <img class="card-img" src="@/assets/servicios/electricidad.jpg" alt="Electricidad" title="Electricidad">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-bolt"></i> Electricidad</h4>
                    <h5 class="card-sub-title">Contamos con personal matriculado y capacitado para:</h5>
                        <dl>
                            <dt>Medición de puesta a tierra:</dt>
                            <dd>
                                La medición de puesta a tierra exigida por las ART, municipalidades y demás organismos de control.
                            </dd>
                        </dl>
                        <dl>
                            <dt>Protocolo de medición de puesta a tierra:</dt>
                            <dd>
                                Confeccionada según la ordenanza de la SRT 900/15.
                            </dd>
                        </dl>
                        <dl>
                            <dt>Informes del correcto funcionamiento de la instalacion eléctrica:</dt>
                            <dd>
                                Se releva con pruebas del buen funcionamiento de la instalación eléctrica y emite informe firmado por matriculado.
                            </dd>
                        </dl>
                        <dl>
                            <dt>Digitalización de planos en CAD 2D</dt>
                        </dl>
                        <dl>
                            <dt>Relevamientos, mediciones de Lux, informes de Lux con instrumento Luxómetro
                                homologado.</dt>
                        </dl>
                        <dl>
                            <dt>Informe de termografía</dt>
                        </dl>
                        <dl>
                            <dt>Proyectos, cálculos luminotécnicos y confección de planos de iluminación:</dt>
                            <dd>Proyectos de iluminación interior y exterior, canchas de deportes y alumbrado público.
                                </dd>
                        </dl>
                        <dl>
                            <dt>Planos de fuerza motriz:</dt>
                        <dd>Se relevan y confeccionan planos de regularización de instalaciones de fuerza motriz para presentaciones municipales.</dd>
                    </dl>
                </div>
            </article>
            <article class = "card">
                <img class="card-img" src="@/assets/servicios/seguridad.jpg" alt="Electricidad" title="Electricidad">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-hard-hat"></i> Seguridad e Higiene</h4>
                    <h5 class="card-sub-title">Contamos con personal matriculado y capacitado para:</h5>

                    <dl>
                        <dt>Confección de planos de evacuación.</dt>
                    </dl>
                    <dl>
                        <dt>Planos de ubicación de matafuegos.</dt>
                    </dl>
                    <dl>
                        <dt>Informes preventivos con propuestas alternativas para depósitos, jardines de infantes, estaciones de servicio, locales comerciales, etc.</dt>
                    </dl>
                    <dl>
                        <dt>Relevamientos, mediciones de Lux, informes de Lux con instrumento Luxómetro homologado.</dt>
                    </dl>
                    <dl>
                        <dt>Capacitaciones sobre riesgo del trabajo y el uso de E.P.P. (elementos de protección personal).</dt>
                    </dl>
                        
                </div>
            </article>
            <article class = "card">
                <img class="card-img" src="@/assets/servicios/gas.jpg" alt="Electricidad" title="Electricidad">
                <div class="card-body">
                    <h4 class="card-title"><i class="fas fa-burn"></i> Gas</h4>
                    <h5 class="card-sub-title">Contamos con personal matriculado y capacitado para:</h5>
                    
                    <dl>
                        <dt>Planos de instalación de gas para la presentación de habilitaciones y renovaciones de comercios e industrias.</dt>
                    </dl>
                    <dl>
                        <dt>Informes de instalación de gas para la presentación de habilitaciones y renovaciones de comercios e industrias.</dt>
                    </dl>
                        
                </div>
            </article>
        </div>
    </section>
</template>

<script>
export default {
  name: 'MyServices',
}
</script>

<style scoped>
    #servicios{
        background-color: #eee;
    }
    #services-container{
        width: 80%;
        margin: auto;
        padding: 30px 0 80px;
    }
    .card{
        background-color: #fff;
        margin: auto;
        margin-top: 40px;
        width: 900px;
        font-family: 'Poppins', sans-serif;
        border-radius: 6px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);

    }
    .card-img{
        width: 100%;
        height: 370px;
        object-fit: cover;
        border-radius: 6px 6px 0 0;
    }
    .card-body{
        padding: 15px;
        padding-bottom: 30px;
    }
    .card-title{
        font-size: 25px;
        text-align: center;
    }
    dl{
        margin-top: 15px;
        font-weight: 300;
    }
    dt{
        font-weight: 800;
    }
    .card-sub-title{
        margin-top: 10px;
        font-weight: 300;
        font-size: 20px;
    }

    @media screen and (max-width: 1200px) {
        .card{
            margin: auto;
            margin-top: 40px;
            width: 100%;
        }
    }
    @media screen and (max-width: 800px) {
        .card-img{
            height: 200px;
        }
    }
</style>

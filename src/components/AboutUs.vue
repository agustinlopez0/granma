<template>
    <section id="quienes-somos">
        <div id="nosotros-container">
            <div class="line"></div>
                <h3>¿Quiénes Somos?</h3>
            <div class="line"></div>
            <section id="cards-container">
                <MyCard 
                    id="card-1"
                    class ="card"
                    name="Nelson López"  
                    description="Técnico Mecánico Electricista - Matriculado en el colegio I.C.P.T. N° 2-2551-7
                        Gasista matriculado en Litoral Gas. Cat. 1ra Matrícula N° 38.202"/>
                <MyCard 
                    id="card-2"
                    class ="card"
                    name="Marcos López"  
                    description="Técnico Mecánico Electricista - Matriculado en el colegio I.C.P.T. N° 2-6514-4"/>
                <MyCard 
                    id="card-3"
                    class="card"
                    name="Maximiliano López"  
                    description="Técnico superior en Seguridad e Higiene en el Trabajo - Matriculado en el colegio I.C.P.T. N° 2-5880-6"/>
            </section>
        </div>
    </section>
</template>

<script>
import MyCard from './shared/MyCard.vue'

export default {
  name: 'AboutUs',
  components:{
    MyCard
  }
}
</script>

<style scoped>
    #quienes-somos{
        /* background-color: #e8e9ff; */
        background-color: #d5d9df;
    }
    #nosotros-container{
        width: 80%;
        margin: auto;
        padding: 30px 0 80px;
    }
    #cards-container{
        display:grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 80px
    }
    .card{
        margin: 80px 0 20px;
    }

    @media screen and (max-width: 1380px){
        #cards-container{
            gap: 20px
        }
    }
    @media screen and (max-width: 1150px){
        #cards-container{
            display:grid;
            grid-template-columns: 1fr;
        }
        .card{
            margin: 20px 0
        }
    }

</style>

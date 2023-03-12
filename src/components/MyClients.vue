<template>
    <section id="clientes">
        <div id="clients-container">
            <div class="line"></div>
                <h3>Clientes destacados</h3>
            <div class="line"></div>
            
            <section id="slider">

                <article v-for="cliente in clientes" :key="cliente" class="card-slider">
                    <img :src="getImgUrl(cliente)" :alt="cliente">
                </article>

            </section>

        </div>
    </section>
</template>

<script>
export default {
  name: 'MyClients',
  data(){
    return{
        // clientes: ["anses", "bbva", "bnacion",  "polimundi", "pozzobon", "seguro", "stafe", "texon"]
        clientes: ["anses", "bbva", "bnacion", "cablevision", "caja", "calandrias", "central", "fcity", "ftown", "gallega", "howard", "metalbo", "micro", "moretti", "paso", "polimundi", "pozzobon", "seguro", "stafe", "texon"]
    }
  },
  methods: {
    getImgUrl(pic) {
        return require('../assets/Clientes/'+pic+'.jpg')
    },
    autoScroll(){
        const wrapper = document.querySelector('#slider')

        let lastScroll = 0
        let flag = true
        
        wrapper.addEventListener("mousedown", ()=>{
            flag = false
        })
        wrapper.addEventListener("mouseup", ()=>{
            flag = true
        })
        setInterval( () => {
            if(flag){
                wrapper.scrollLeft = wrapper.scrollLeft + 1
                if(wrapper.scrollLeft == lastScroll){
                    wrapper.scrollLeft = 0
                    lastScroll = 0
                }
                else
                    lastScroll = wrapper.scrollLeft
            }
            
            console.log("wrapper.scrollLeft " + wrapper.scrollLeft)
            console.log(  "lastScroll "   + lastScroll)
        }, 1)



        let isDown = false;
        let startX;
        let scrollLeft;

        wrapper.addEventListener("mousedown", e => {
            isDown = true;
            wrapper.classList.add("active");
            startX = e.pageX - wrapper.offsetLeft;
            scrollLeft = wrapper.scrollLeft;
        });
        wrapper.addEventListener("mouseleave", () => {
            isDown = false;
            wrapper.classList.remove("active");
        });
        wrapper.addEventListener("mouseup", () => {
            isDown = false;
            wrapper.classList.remove("active");
        });
        wrapper.addEventListener("mousemove", e => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - wrapper.offsetLeft;
            const walk = x - startX;
            wrapper.scrollLeft = scrollLeft - walk;
        });
    }
  },
  mounted() {
    this.autoScroll()

  }
  

  
}
</script>

<style scoped>
    #servicios{
        background-color: #eee;
    }
    #clients-container{
        width: 80%;
        margin: auto;
        padding: 30px 0 80px;
    }
    #slider{
        user-select: none;

        margin-top: 4rem;
        position: relative;
        display: flex;
        overflow-x: scroll;
        cursor: grab;
        scroll-snap-type:mandatory
    }
    #slider:active{
        cursor: grabbing;
    }
    #slider::-webkit-scrollbar{
        display: none;
    }
    .card-slider img{
        pointer-events: none;
        width: 18rem;
        margin: .5rem 2rem;
        border-radius: 20px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        border: 1px solid rgb(156, 156, 156);

    }
    @media screen and (max-width: 1200px) {
        .card-slider img{
            width: 10rem;
            margin: .5rem .5rem;
        }
        #clients-container{
            width: 100%;
            margin: auto;
            padding: 30px 0 80px;
        }
        #slider{
            width: 100vw;
            left: 0;
        }
        .line{
            width: 80%;
            margin: auto;
        }
        h3{
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
    }

</style>

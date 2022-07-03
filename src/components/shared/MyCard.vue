<template>
    <article class="card">
        <h2>
            <i class="fas fa-user white"></i> {{name}}
        </h2>
        <div class="line"></div>
        <p>
            {{description}}        
        </p>
    </article>
</template>

<script>
export default {
    name: 'MyCard',
    props: {
        name: String,
        description: String
    }
}
</script>

<style scoped>
    .card{
        background: linear-gradient(45deg, #30336b, #554390);
        font-family: 'Poppins', sans-serif;
        color: #fff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 5px 5px 15px rgba(0,0,0,.3);
        transition: all .5s cubic-bezier(0.075, 0.82, 0.165, 1);
    }

    .card:hover{
        transform: scale(1.05) translateY(-10px);
        box-shadow: 5px 10px 25px rgba(0,0,0,.3);
        cursor: pointer;
    }

    @media screen and (max-width: 1300px){
        h2{
            font-size: 22px;
        }
    }

    .line{
        margin: 10px 0 25px;
    }
    h2{
        font-weight: 600;
    }
    p{
        font-weight: 300;
    }
    i{
        margin-right: 10px;
    }

</style>

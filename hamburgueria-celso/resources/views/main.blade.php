@include('nav')

    
<div class="music">
    <div class="titulo">
        <h1>Musicas do Spotify</h1>
    </div>
    <div class="cards">
        <div class="card-music">
            <img src="/img/tue.jpg">
            <h3>Hoje está nos top's Hits</h3>
            <p>Matuê o trapper mais escutado da América Látina.</p>
            <button class="oculto"><img src="/img/play.png"></button>
        </div>
        <div class="card-music">
            <img src="/img/tue.jpg">
            <h3>Hoje está nos top's Hits</h3>
            <p>Matuê o trapper mais escutado da América Látina.</p>  
            <button class="oculto"><img src="/img/play.png"></button>
        </div>
        <div class="card-music">
            <img src="/img/tue.jpg">
            <h3>Hoje está nos top's Hits</h3>
            <p>Matuê o trapper mais escutado da América Látina.</p>
            <button class="oculto"><img src="/img/play.png"></button>
        </div>
    </div>
</div>




<style>

.music{
    color: white;
    position: absolute;
    top: 1%;
    left: 25%;
    background-color: rgb(30, 30, 30);
    width: 60rem;
    height:inherit;
    border-radius: 15px;
}

.titulo{
    font-size: 18px;
    padding: 5px;
    margin: 0%;
    color: white;
    width: inherit;
    background-color: rgb(16, 16, 16);
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;

}
.card-music h3{
    font-size: 15px;
    margin-top: 1rem;
    margin-bottom: 3px;
}
.card-music p{
    margin: 3%;
    font-size: 14px;
    color: rgb(134, 134, 134)
}
.cards{
    display: flex;
    flex-direction: row;
}

.card-music{
    width: 13rem;
    height: 19rem;
    background-color: rgb(23, 23, 23);
    border-radius: 10px;
    margin: 1.5%;
    display: flex;
    align-items: center;
    flex-direction: column
    
}

.card-music:hover{
    background-color: rgb(38, 38, 38)
}
.card-music img{
    border-radius: 14px;
    width: 10rem;
    padding: 4%;
}


.oculto {
      display: none; /* Inicia oculto */
      border-radius: 50%;
      border: none;
      background-color: rgb(30, 215, 96);
      width: 3rem;
      height: 3rem;
      margin-left: 8rem;

    }
    
    .card-music:hover .oculto {/* Mostra o botão quando o mouse passa por cima do contêiner */
      display: block;

    }
.oculto img{
    width: 1rem;
    height: 1rem;
    border-radius: 0%;

}



</style>
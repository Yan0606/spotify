<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/nav.css">
    <title>teste</title>
</head>

<body>
    <div class="container1">
        <img src="img/logo-removebg-preview.png">
        <a><img src="img/casa.png" id="menu">&nbsp&nbsp&nbsp Início </a>
        <a><img src="img/lupa.png" id="menu">&nbsp&nbsp&nbsp Buscar </a>

    </div>
    <div class="container2">
        <img src="img/biblioteca.png" id="menu">
        <p>Sua Biblioteca</p>
        <img src="img/plus.png" id="menu">

    </div>
    <div class="container3">
        <h3> Crie sua primeira playlist</h3>
        <p>É fácil vamos te ajudar</p>
        <input type="button" value="Criar playlist">
    </div>
    <div class="container3">
        <h3> Que tal seguir um Podcast?</h3>
        <p>Avisaremos você sobre novos episódios.</p>
        <input type="button" value="Explore podcasts">
    </div>

</body>

</html>

<style>
    body {
    background-color: black;
    height: 100vh;
    margin: 0;
    padding: 4px;
    font-family:Arial, Helvetica, sans-serif
}

a {
    color: white;

}
h3{
    color: white;
    margin:0;
}

.container1 {
    width: 280px;
    height: 160px;
    background-color: rgb(18, 18, 18);
    border-radius: 15px;
    padding: 16px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    margin-bottom: 1rem;
}

.container1 img {
    width: 86px;
    margin-left: 1rem;

}

#menu {
    width: 27px;
}

.container2 {
    width: 17.5rem;
    height: 24.76rem;
    background-color: rgb(18, 18, 18);
    border-radius: 15px;
    padding: 16px;
    display: flex;
    flex-direction: row;
}

.container2 img {
    width: 80px;
    height: 24px;
    margin-left: 1rem;
    margin-right: 1rem;
}

.container2 p {
    margin-top: 3px;
    color: white;
}

.container3 {
    width: 15.625rem;
    height: 7.5rem;
    background-color: rgb(36, 36, 36);
    border-radius: 15px;
    position: relative;
    top: -23rem;/* Ajuste para posicionar sobre a primeira div */
    padding: 10px;
    margin-left: 1rem;
    margin-top: 1rem;
}


.container3 p{
    color: white;
}
.container3 input{
    border-radius: 15px;
    background-color: white;
    color: black;
    border: none;
    width: 7rem;
    height: 2rem;
}
    </style>
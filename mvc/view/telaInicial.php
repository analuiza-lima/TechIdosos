<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&display=swap" rel="stylesheet">
<title>TechIdosos</title>

<style>

    html, body {
    height: 100%;
    }

    body {
        margin: 0;
        font-family: Arial;
        background-color: #e6c7db;
        text-align: center;

         display: flex;
        flex-direction: column;
    }

    .titulo{
    font-family: 'Fredoka', sans-serif; 
    font-weight: 600; 
    margin-bottom: 5px;  
    }
    h1 {
        color: #e75480;
        font-size: 60px;
        margin-top: 20px;
    }

    .subtitulo {
        color: #e75480;
        font-size: 15px;
        margin-top: 0;
        font-family: 'Poppins', sans-serif; 
        font-weight: 300;
    }

    .pergunta {
        margin: 30px 0;
        font-size: 18px;
        text-align: left;
        margin-left: 80px;
    }

    .container {
        display: grid;
        grid-template-columns: repeat(4, 220px);
        justify-content: center;
        gap: 20px;
        flex: 1;
    }

    .card {
        text-decoration: none;
        color: black;
    }

    .card img {
        width: 220px;
        height: 140px;
        object-fit: cover;
        border-radius: 20px;
    }

    .card p {
        margin-top: 8px;
        color: #e75480;
        font-weight: bold;
    }

    footer {
        margin-top: 50px;
        background: #e75480;
        color: black;
        padding: 15px;
        font-size: 12px;
    }
</style>
</head>

<body>

    <h1 class="titulo">TechIdosos</h1>
    <p class="subtitulo">
    O MELHOR GUIA DE TECNOLOGIA <br>
    PARA IDOSOS QUE VOCÊ JÁ VIU!
    </p>
    <hr>
<div class="pergunta">→ Do que você precisa?</div>

<div class="container">

    <a href="<?= APP ?>/idosos" class="card">
        <img src="<?= APP ?>/img/hellokitty-listagem.jpg">
        <p>Listagem de Usuários</p>
    </a>

    <a href="<?= APP ?>/licao" class="card">
        <img src="<?= APP ?>/img/hellokitty-licoes.jpg">
        <p>Lições</p>
    </a>

    <a href="<?= APP ?>/noticias" class="card">
        <img src="<?= APP ?>/img/hellokitty-noticias.jpg">
        <p>Bombando no Zap – Fato ou Fake?</p>
    </a>

    <a href="<?= APP ?>/links" class="card">
        <img src="<?= APP ?>/img/hellokitty-links.jpg">
        <p>Análise de Links</p>
    </a>

</div>

<footer>
© FEITO POR ANA LUIZA TEIXEIRA LIMA, BRUNA PEREIRA TEODOSIO MARTINS, 
FELIPE ESPÍNDOLA E GUILHERME SCARPELLINI
</footer>

</body>
</html>
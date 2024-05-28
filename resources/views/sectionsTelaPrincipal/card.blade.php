<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:wght@100;300;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Days+One&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:wght@100;300;500;700&display=swap');

        body {
            background-color: #2D2D2F;
        }

        * {
            margin: 0;
            padding: 0;
        }

        h1 {
            font-family: 'Days One';
            font-size: 4rem;
            font-weight: 500;
            color: white;
        }

        h1 span {
            color: #F7317D;
        }

        .flex-card {
            display: flex;
            width: 100%;
            gap: 1%;
            justify-content: center;
        }

        .card {
            width: 20%;
        }

        .div-img-card {
            width: 100%;
            height: 25rem;
            overflow: hidden;
            border-radius: .5rem .5rem 0 0;
        }

        .div-img-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .descricao-card {
            background-color: #9A2DCB;
            padding: 1rem 1rem;
            border-radius: 0 0 .5rem .5rem;
        }

        .descricao-card p {
            color: white;
            font-family: 'Montserrat';
        }

        .descricao-card h2 {
            color: white;
            font-family: 'Montserrat';
            font-weight: 700;
            margin-top: .2rem;
        }

        .div-refresh {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <div>
        <h1><span>PROXIMAS</span> RESENHAS</h1>
    </div>
    <div class="flex-card">
        <div class="card">
            <div class="div-img-card">
                <img src="https://araujoviannaoficial.com.br/wp-content/uploads/2022/12/1C8A4F7E-D2DB-434B-A848-A1AD8173B2D1.png"
                    alt="">
            </div>
            <div class="descricao-card">
                <p>Resenha Hoje</p>
                <h2>Saiba Mais</h2>
            </div>
        </div>

        <div class="card">
            <div class="div-img-card">
                <img src="https://www.designi.com.br/images/preview/10312743.jpg" alt="">
            </div>
            <div class="descricao-card">
                <p>Resenha Hoje</p>
                <h2>Saiba Mais</h2>
            </div>
        </div>

        <div class="card">
            <div class="div-img-card">
                <img src="https://www.designi.com.br/images/preview/10163398.jpg" alt="">
            </div>
            <div class="descricao-card">
                <p>Resenha Hoje</p>
                <h2>Saiba Mais</h2>
            </div>
        </div>
    </div>
    <div class="div-refresh">
        <img src="{{ asset('assets/refresh.png') }}">
    </div>
</body>

</html>
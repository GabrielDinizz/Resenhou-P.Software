<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Style Card -->
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
    <main>
        @yield('card')
    </main>
</body>
</html>
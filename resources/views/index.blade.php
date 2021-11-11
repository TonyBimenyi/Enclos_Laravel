<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <style>
          :root {
	--principal:#35475e;
    --succes:#6bf04a;
    --danger:#f53131;
    --secondary: #0497df;

 }
        body{
            background-image: url(images/accueil.jpg);
            background-position: cover;
            font-family: tahoma;

        }
        .logo{
            display: flex;
            justify-content: center;
            height:85px;
            margin-top:50px;
        }
        .title h1{
            font-size:45px;
            text-align: center;
        }
        .title h3{
            text-align: center;
            font-weight: 20px;
        }
        .paragraph p{
            text-align:center;
            margin-left:25%;
            margin-right:25%;

        }
        .button a{
            font-family: tahoma;
            background-color:var(--succes);
            text-decoration: none;
            color:black;
            font-weight: bold;
            padding:10px 20px 10px 20px;
            display: flex;
            justify-content: center;
            margin-left: 42%;
            margin-right: 42%;
            border-radius:5px;
            box-shadow: 0px 0px 10px 0px;
        }
        .button a:hover{
            background-color:var(--principal);
            transition:.5s;
            color:white;
        }
        .bar{
            background-color: grey;
            height: 1px;
            margin-bottom:20px;
            margin-left: 20%;
            margin-right: 20%;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="favicon.ico" alt="">
        </div>
        <div class="title">
            <h1>ECOFO LES ENCLOS DE PIGEONS</h1>
            <h3>Bienvenue sur l'application de gestion</h3>
        </div>
        <div class="paragraph">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis rerum, dolore cupiditate odio minima quae, commodi perferendis reiciendis consequatur magnam assumenda tenetur qui asperiores nisi accusamus libero a aperiam facere.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sint architecto nobis esse perferendis quo iste pariatur autem molestias omnis, assumenda expedita nihil, repellendus maxime. Voluptatum ratione porro facilis maxime.
            </p>
        </div>
        <div class="bar">

        </div>
        <div class="button">
            <a href="login">Se connecter</a>
        </div>
    </div>

</body>
</html>

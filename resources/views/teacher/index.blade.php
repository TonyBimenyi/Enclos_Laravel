@if (Auth::user())
@include('layaouts.app')
<header>
    <style>
        .title h1{
            color:var(--principal);
            margin-left:49%;
            margin-top: 30px;
        }
        h1{
            color:var(--principal);
            margin-left:21%;
            margin-top: -30px;
            font-family: tahoma;
            margin-top:60px;
        }
        .cards{
            margin-top: 60px;
            margin-left:15%;
        }
        .card1 p{
            text-align: center;
            font-size: 60px;
            color:var(--secondary);
        }
        .card1{
            background-color: white;
            box-shadow: 0px 2px 6px 1px;
            padding:20px 120px 20px 120px;
            border-radius: 10px;
        }
        .cardrow1{
            display: flex;
            justify-content: space-around;
        }
        .cardrow2{
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }
        h4{
            font-family: tahoma;
        }
        a{
            text-decoration: none;
            color:black;
        }
        a:hover{
            color:var(--secondary);
            transition:.5s;
        }
    </style>
</header>
<div class="container">
    <div class="title">
        <h1>Enseignants</h1>
    </div>
    <div class="cards">
        <div class="cardrow1">
            <a href="teacher/create">
            <div class="card1">
                <p><i class="fa fa-plus" aria-hidden="true"></i></p>
                <h4>Ajouter Un Enseignat</h4>
            </div>
        </a>
        <a href="list_teacher">
            <div class="card1">
               <p> <i class="fa fa-eye" aria-hidden="true"></i></p>
                <h4>Voir Liste Enseignants</h4>
            </div>
        </a>

        </div>
        <!--
        <h1>MINERVALES
        </h1>
        <div class="cardrow2">
            <a href="">
            <div class="card1">
                <p><i class="fa fa-plus" aria-hidden="true"></i></p>
                <h4>Ajouter le paiement</h4>
            </div>
        </a>
        <a href="">
            <div class="card1">
               <p> <i class="fa fa-list" aria-hidden="true"></i></p>
                <h4>Liste des paiements</h4>
            </div>
        </a>

        </div>
    </div>-->



</div>
@else
{{  header('Location:login') }}
@endif

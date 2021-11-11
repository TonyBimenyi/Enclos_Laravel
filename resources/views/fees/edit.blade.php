@include('layaouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: #e8e8e8;
        }
        .title_add_student{
            display: flex;;
            justify-content: center;
            margin-left:150px;
            margin-top:20px;
            font-family:var(--font);
            color:var(--principal);
        }
        .form{
            display: flex;;
            justify-content: center;
            margin-left:150px;
            margin-top:20px;
            font-family:var(--font);
            color:var(--principal);
        }
        label{
            font-weight: bolder;
            font-size: 13px;
        }
        input{
            width: 350px;
            height:35px;
            border:none;
            outline:none;
        }
        select{
            width: 350px;
            height:35px;
            border:none;
            outline:none;
        }
        button{
            width: 350px;
            height:35px;
            border:none;
            background-color: var(--secondary);
            font-weight: bolder;
        }
        button:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container_create">
        <div class="title_add_student">
            <h1>Modifier le Minerval</h1>
        </div>
        <div class="form">
            <form action="/fees/{{ $minerval->id }}" method="POST">
                @csrf
                @method('PUT')
                <label for="">Nom:</label><br>
                <input type="text" name="nom" value="{{ $minerval->nom }}" autofocus=""><br><br>
                <label for="">Prenom:</label><br>
                <input type="text" name="prenom" value="{{ $minerval->prenom }}"><br><br>
                <label for="">Section</label><br>
               <!-- <input type="text" name="section" placeholder="Entrez la section...">-->
                <select name="section" id="">
                    <option disabled value="">--Selectionner une section--</option>
                    <option value="Fondamental">Fondamental</option>
                    <option >Post Fondamental</option>
                </select>
                <br><br>
                <label for="">Classe:</label><br>
                <input type="number" value="{{ $minerval->classe }}" name="classe" placeholder="Entrez la classe..."><br><br>
                <input type="hidden" name="user" id="" value="{{Auth::User()->email}}" >

                <label for="">Montant:</label><br>
                <input type="number" name="montant" value="{{ $minerval->montant }}" placeholder="Entrez le montant payee..."><br><br>
                <label for="">Trimestre</label><br>
                <select name="trimestre" id="">
                    <option value="1er Trimestre">1er Trimestre</option>
                    <option value="2eme Trimestre">2eme Trimestre</option>
                    <option value="3eme Trimestre">3eme Trimestre</option>
                </select><br><br>
                <label for="">Date de Paiement:</label><br>
                <input type="date" value="{{ $minerval->date_paiement }}" name="date_naissance"><br><br>
                <button type="submit">
                    Modifier
                </button>
            </form>
        </div>
    </div>

</body>
</html>

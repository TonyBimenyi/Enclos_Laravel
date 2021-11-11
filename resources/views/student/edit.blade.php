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
            font-family:tahoma;
            color:var(--principal);
        }
        .form{
            display: flex;;
            justify-content: center;
            margin-left:150px;
            margin-top:20px;
            font-family:tahoma;
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
            <h1>Ajouter un eleve</h1>
        </div>
        <div class="form">
            <form action="/student/{{ $student->id }}" method="POST">
                @csrf
                @method('PUT')
                <label for="">Nom:</label><br>
                <input type="text" name="nom" value="{{ $student->nom }}" ><br><br>
                <label for="">Prenom:</label><br>
                <input type="text" name="prenom" value="{{ $student->prenom }}"><br><br>
                <label for="">Section</label><br>
               <!-- <input type="text" name="section" placeholder="Entrez la section...">-->
                <select name="section" id="" >
                    <option disabled value="">--Selectionner une section--</option>
                    <option value="Fondamental">Fondamental</option>
                    <option value="Post Fondamental">Post Fondamental</option>
                </select>
                <br><br>
                <label for="">Classe:</label><br>
                <input type="number" name="classe" value="{{ $student->classe }}"><br><br>
                <label for="">Date de Naissance:</label><br>
                <input type="date" name="date_naissance" value="{{ $student->date_naissance }}"><br><br>
                <label for="">Lieu de naissance:</label><br>
                <input type="text" name="lieu" value="{{ $student->lieu_naissance }}"><br><br>
                <button type="submit">
                    Modifier
                </button>
            </form>
        </div>
    </div>

</body>
</html>

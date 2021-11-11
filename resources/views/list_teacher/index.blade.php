@include('layaouts.app')
<head>
    <style>
         body{
            background-color: #e8e8e8;
        }
        .title_student{
            text-align: center;
            color: var(--principal);
            font-family: tahoma;
            margin-left: 123px;
        }
        .search_bar{
            display: flex;
            justify-content: center;
            font-family: tahoma;
            margin-top:10px;
            margin-left: 200px;
        }
        input{
            width: 200px;
            height:25px;
            border:none;
            outline:none;
            margin-right:10px;
        }
        select{
            width: 150px;
            height:25px;
            border:none;
            outline:none;
            margin-right:10px;
        }
        button{
            width: 150px;
            height:25px;
            border:none;
            outline:none;
            margin-right:10px;
            background-color: var(--secondary);
            font-weight: bolder;
        }
        button:hover{
            cursor: pointer;
        }
        .barr{
            background-color: var(--secondary);
            height: 90px;
        }
        .table_list_eleve{
            display: flex;
            justify-content: center;
            font-family: tahoma;
            margin-left:100px;
        }
        table{
            border-collapse: collapse;
            margin-left: 110px;
        }
        thead{
            background-color: var(--secondary);
        }
       table  thead th{
            padding:8px 30px 8px 30px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 15px;
        }
        table tr td{
            text-align: center;
            padding:8px 20px 8px 20px;
            border-bottom: 1px solid var(--principal);
            font-size: 14px;
        }
        .mod td {
            background-color: var(--principal);
            cursor: pointer;

        }
        .sup form button{
            padding:none !important;
            background-color: red;
        }

    </style>
</head>
<div class="container_list_student">
    <div class="title_student">
        <h1>Liste des eleves inscrits</h1>
    </div>
    <div class="search_bar">
        <div class="section">
            <select name="" id="">
                <option value="Fondamental">Fondamental</option>
                <option value="Post Fondamental">Post Fondamental</option>
            </select>
        </div>
        <div class="classe">
            <input type="text" name="classe" placeholder="Entrez une classe...">
        </div>
        <div class="NomouPrenom">
            <input placeholder="Entrez nom ou prenom..." type="search" >
        </div>
        <div class="date_inscription">
            <label for="">Date d'inscription</label>
            <input type="date">
        </div>
        <div class="button">
            <button type="submit">
                Rechercher
            </button>
        </div>
        <div class="barr">

        </div>

    </div>
    <div class="table_list_eleve">
        <table>
            <thead>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Classe</th>
                <th>Cours</th>
                <th>Telephone</th>
                <th>Adresse</th>
                <th colspan="2">Actions</th>
            </thead>
            @foreach ($teacher as $stu )
            <tr>
                <td>{{ $stu->nom }}</td>
                <td>{{ $stu->prenom }}</td>
                <td>{{ $stu->classe }} eme</td>
                <td>{{ $stu->cours }}</td>
                <td>{{ $stu->phone }}</td>
                <td>{{ $stu->adresse }}</td>
                <div class="mod">
                    <td><a href="/teacher/{{ $stu->id }}/edit">Modifier</a></td>
                </div>
                <div class="sup">
                    <td>
                        <form action="/teacher/{{ $stu->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </div>
            </tr>
            @endforeach
        </table>
    </div>
</div>

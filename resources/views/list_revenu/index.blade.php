@include('layaouts.app')
<html>
    <head>
        <style>
              a{
                text-decoration: none;
                color: var(--third);
                font-weight: bolder;
            }
            #supprimer{
                background-color: var(--danger);
                padding: 5px;
                border-radius: 3px;
                font-size: 12px;
            }
            #modifier{
                background-color: var(--primaire);
                padding: 5px;
                border-radius: 3px;
                font-size: 12px;
            }








             .container_accueil{
                    margin-left: 200px;
                    position: fixed;
                    width:100%;
                    margin-top: -18px;
                    font-family: tahoma;
                    font-size: 12px;
                }
                .top_bar_buttons{
                    display: flex;
                    justify-content: flex-start;

                    background-color: var(--principal);
                    padding:7px ;
                    border-bottom:5px solid var(--secondary);
                }

                .container_accueil p{
                    margin-left:10px;
                }
                .add_button{
                    text-align: center;
                    padding:10px 20px 10px 20px;
                    background-color: var(--secondary);
                    color:black;
                    border-radius: 5px;

                }
                .add_button:hover{
                    cursor: pointer;
                    color:white;
                    transition:.4s;

                }
                .type_button{
                    text-align: center;
                    padding:10px 20px 10px 20px;
                    background-color: var(--secondary);
                    color:var(--third);
                    margin-left:10px;
                    border-radius: 5px;
                }
                .type_button:hover{
                    cursor: pointer;
                    color:white;
                    transition:.4s;

                }
                .liste_button{
                    text-align: center;
                    padding:10px 20px 10px 20px;
                    background-color: var(--secondary);
                    color:var(--third);
                    margin-left:10px;
                    border-radius: 5px;
                }
                .liste_button:hover{
                    cursor: pointer;
                    color:white;
                    transition:.4s;

                }
                #total{
                    background-color: var(--primaire);
                    color:white;
                }


                .form form{
                margin-top: 110px;
                display: flex;
                justify-content: center;
                flex-direction: row;
                font-weight: bold;
                margin-left:150px;

            }
            form{
                display: flex;
            }
           .form form a{

                border:2px solid var(--primaire);
                font-weight: bold;
                outline:none;
                margin-top:-30px;
                font-family: tahoma;
                background-color: var(--secondary);
                color:white;
                padding: 10px 20px 10px 20px;
            }
            .btn_submit a{
                width: 100px;
                margin-left: 5px;
                background-color: var(--primaire);
                color:white;
                cursor: pointer;
            }
            #total{
                bottom:0;
               width:100%;

            }
            #add{
                background-color: var(--success);
                padding: 5px;
                border-radius: 3px;
                font-size: 12px;
            }
            .print_btn{
                margin-left:40px;
                background-color: var(--primaire);
                padding:5px;
                cursor: pointer;
            }
            @media print{
               a{
                   display: none;
               }
               .recherche_bar{
                   display: none;
               }
               .top_bar_buttons{
                   display: none;
               }
               #action{
                   display: none;
               }
               table{
                   width:98%;
               }
               tbody td{
                   font-size:12px;
                   border-left:1px solid black;
                   padding-top:none;
                   padding-bottom: none;
                   height: 3px;
               }
               thead{
                   height: 3px;
               }
               table thead th{
                   background-color: black;
                   color:white;
               }
               #total td{
                background-color: black;
                   color:white;
                   font-size: 15px;
               }
               h1{
                   display: none;
               }
               .menu_bar{
                   display: none;
               }
               .container_accueil{
                   margin-top: -40px;
               }

            }
            .title_type_depense h1{
                font-family: tahoma;
                color:var(--principal);
                text-align: center;
                margin-left: 150px;
                margin-top:-20px;
                font-size:25px;
            }
            .table{
                margin-left: 200px;
                margin-top:20px;
            }
            table{
                margin: 0 auto;
                border-collapse: collapse;
                font-family: tahoma;

            }
            table thead{
                background-color: var(--secondary);
                margin-left: 157px;
                padding:20px 40px 20px 40px;

            }
            thead tr th{
                padding:10px 45px 10px 45px;
                font-size: 14px;
            }
            tbody td{
                padding:10px 18px 10px 18px;
                border-bottom: 1px solid var(--principal);
                text-align: center;
                font-size: 12px;
            }
            #forr button{
                background-color: var(--danger);
                font-size: 11px;
                margin-left: -30px;
                padding: 4px 5px 4px 5px;
                color:white;
                border:none;
                cursor: pointer;
            }
            #ajouter a{
                background-color: var(--secondary);
                font-size: 11px;
                padding: 4px 5px 4px 5px;
                color:white;
                border:none;
                cursor: pointer;
                margin-left: -30px;
            }
            #a a{
                background-color: var(--secondary);
                font-size: 11px;
                color:white;
                border:none;
                cursor: pointer;
            }



            body{
            background-color: #e8e8e8;
        }

            .search_bar{
            display: flex;
            margin-top:120px;
            font-family: tahoma;
            margin-top:70px;
            margin-left: 250px;
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
        .search_bar button{
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
        td a{
           background-color: var(--succes);
           font-size: 11px;
           padding: 4px 5px 4px 5px;
        }
        .total{
            background-color: var(--secondary);
            font-weight: bolder;
        }
        .total td{
            font-size: 14px;
        }
        .code{
            display: none;
        }
        </style>
    </head>
    <body>]


<div class="container_accueil">
    <div class="top_bar_buttons">
        <a href="{{ route('revenu.create') }}">
            <div class="add_button">
            <h3><i class="fa fa-plus" aria-hidden="true"></i></h3>
            <h3>Ajouter Revenus</h3>
            </div>
        </a>

        <a href="{{ route('list_revenu.index') }}">
        <div class="liste_button">
        <h3><i class="fa fa-list-ul" aria-hidden="true"></i></h3>
           <h3>Liste</h3>
        </div>
        </a>

        <a href="{{ route('types_revenu.index') }}">
            <div class="type_button">
            <h3><i class="fa fa-sort-amount-asc" aria-hidden="true"></i></i></h3>
            <h3>Types</h3>
            </div>
        </a>
        <a href="depenses_tout.php">
            <div class="type_button">
            <h3><i class="fa fa-eye" aria-hidden="true"></i></i></h3>
            <h3>Afficher Tout</h3>
            </div>
        </a>
        <a href="rapport_depenses.php">
            <div class="type_button">
            <h3><i class="fa fa-file-text" aria-hidden="true"></i></i></h3>
            <h3>Rapport</h3>
            </div>
        </a>


    </div>
        </div>
        <div class="code">
            {{   $types = DB::table('type_revenus')->orderBy('id','desc')->get(); }}
            {{ $sum=DB::table("revenus")->get()->sum("montant_revenu") }}
        </div>

  <div class="search_bar">
      <form type="get" action="{{ url('/search') }}">

                    <div class="section">

                        <select name="type" id="">

                            <option value=""></option>
                            @foreach ($types as $ty)
                                <option value="{{ $ty->type_revenu }}">{{ $ty->type_revenu }}
                                </option>
                            @endforeach
                        </select><br><br>
                    </div>
                    <div class="classe">
                        <input type="text" name="classe" placeholder="Entrez la description">
                    </div>
                    <label for="">Du</label>
                    <input type="date" name="yess">

                    <label for="">Au</label>
                    <input type="date" name="date">


                    <div class="button">
                        <button type="submit">
                            Rechercher
                        </button>
                    </div>
                    <div class="barr">

                    </div>
                </form>
                </div>


        <div class="container_types_depenses">
                <div class="add_type_depense_btn">
                   <br>
                   <div class="line">

                   </div>
                </div>


                <div class="liste_type_depense">
                    <div class="title_type_depense">
                        <h1>Liste des revenus</h1>
                    </div>
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Montant</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Enregistre au</th>
                                    <th>Enregistre par</th>
                                    <th colspan="4">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($revenus as $revenu)
                                <tr>
                                <td>{{ $revenu->type_revenu }}</td>
                                <td>{{ number_format($revenu->montant_revenu) }} Fbu</td>
                                <td>{{ $revenu->date_revenu }}</td>
                                <td>{{ $revenu->description_revenu }}</td>
                                <td>{{ $revenu->created_at }}</td>
                                <td>{{ $revenu->user }}</td>
                                <div class="delete">
                                    @if ($revenu->type_revenu!='Minerval')
                                    <td><a href="/revenu/{{ $revenu->id }}/edit">Modifier</a></td>

                                </div>


                                    <div class="delete">
                                        <td>
                                    <form  id="forr" action="/revenu/{{ $revenu->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit">Supprimer</button>
                                </form>
                                </td>
                                @else
                                <div class="delete">
                                    <td id="a"><a href="{{ route('fees.index') }}">Minervals</a></td>
                                </div>
                                <td></td>
                                @endif
                            </div>
                            </tr>
                            @endforeach
                            <tr class="total">
                                <td>TOTAL</td>
                                <td>{{ number_format($sum) }} Fbu</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </body>
</html>

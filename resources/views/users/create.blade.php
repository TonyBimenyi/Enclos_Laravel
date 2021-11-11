@include('layaouts.app')
<html>
    <head>
       <style>
           *{
               font-family:var(--font);
           }

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



            input{
                height: 30px;width: 200px;
                border:2px solid var(--primaire);
                font-weight: bold;
                outline:none;
            }
            .btn_submit input{
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
            .form-title{
                display: flex;
                margin-top:-20px;
                justify-content: center;
                margin-top: 70px;
                font-size:12px;
                margin-left: 200px;
                font-family: tahoma;
                color: var(--principal);
            }
            .form_vrai{
                margin-left:80px;
                margin-top:-20px;
                display:flex;
                justify-content: center;

            }

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
            margin-left:120px;
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
        textarea{
            width: 350px;
            height:85px;
            border:none;
            outline:none;
        }
        .code{
            display: none;
        }
       </style>
    </head>
    <body>]
{{--
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

                <div class="code">
                    {{   $types = DB::table('type_revenus')->orderBy('id','desc')->get(); }}
                </div>

            </div>
        </div>  --}}
        <div class="form-title">
            <h1>CREER UN UTILISATEUR</h1>
        </div>
                <div class="form">

            <div class="form_vrai">
                <form action="/users" method="POST">
                    @csrf
                    {{--  <label for="">Types:</label><br>  --}}
                   {{--  <!-- <input type="text" value="" name="type" ><br><br>-->
                    <select name="type" id="">
                        @foreach ($types as $ty)
                            <option value="{{ $ty->type_revenu }}">{{ $ty->type_revenu  }}</option>
                        @endforeach
                    </select><br><br>  --}}
                    <br><br>
                    <label for="">Nom Et Prenom:</label><br>
                    <input type="text" name="name" placeholder="Entez le nom et prenom..." value=""><br><br>

                    <label for="">Username:</label><br>
                    <input type="name" required="" name="username" placeholder="Entrer un nom d utilisateur.."><br><br>

                    <label for="">Mot de passe:</label><br>
                    <input type="password" required="" name="password" placeholder="Entrer un mot de passe"><br><br>

                    <label for="">Confirme Mot de passe:</label><br>
                    <input type="password" required="" name="confpassword" placeholder="onfirmer un mot de passe"><br><br>

                    {{--  <label for="">Description:</label><br>
                    <textarea name="description" id="" placeholder="Votre texte ici" ></textarea><br><br>  --}}
                    {{--  <input type="hidden" name="user" id="" value="{{Auth::User()->email}}" >
                    <!--<input type="text" name="cours" placeholder="Province,Commune,Quartier"><br><br>
                    <label for="">Numero de telephone :</label><br>
                    <input type="text" name="phone" placeholder="Entrez le numero de telephone..."><br><br>
                    <label for="">Adresse:</label><br>
                    <input type="text" name="adresse" placeholder="Province,Commune,Quartier"><br><br>-->  --}}
                    <button type="submit">
                        Creer
                    </button>
                </form>

            </div>
        </div>
    </body>
</html>

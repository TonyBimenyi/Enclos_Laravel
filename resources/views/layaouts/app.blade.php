@if (Auth::user())

@endif
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enclos</title>
    <style>
         :root {
	--principal:#35475e;
    --succes:#6bf04a;
    --danger:#f53131;
    --secondary: #0497df;
    --font:arial;

 }
*{
    margin:0;
    background-position: fixed;
}
.header {
    position: absolute;
    width: 100%;
    z-index: 3;
    height: 44px;
    background-color: #fff;
    border-bottom: 3px solid #2d3d51;
    display: none;
}
.side-nav {
    position: absolute;
    width: 100%;
    height: 100vh;
    background-color: #35475e;
    z-index: 1;
    display: none;
}
.side-nav ul {
    margin: 0;
    padding: 0;
}
.side-nav ul li {
    padding: 11px 11px;
    border-bottom: 1px solid #3c506a;
    position: relative;
}
.title{
    text-transform: uppercase;
    font-size:16px;
    margin-left:8px;
    color:white;
    font-family: var(--font);
}
.side-nav ul li.active:before {
    content: '';
    position: absolute;
    width: 4px;
    height: 100%;
    top: 0;
    left: 0;
    background-color: #fff;
}
.side-nav ul li a {
    color: #fff;
    display: block;
    text-decoration: none;
}
.side-nav ul li i {
    color: #0497df;
    min-width: 20px;
    text-align: center;
}
.side-nav ul li span:nth-child(2) {
    margin-left: 10px;
    font-size: 14px;
    font-family: var(--font);
    font-weight: 300;
}
/* main content styles */

.dec{
    margin-top:45px;
    font-family: var(--font);

}
.dec li{
    font-weight: bolder;
}
/* set element styles to fit tablet and higher(desktop) */
@media screen and (min-width: 600px) {
    .header {
        background-color: #35475e;
        z-index: 1;

    }
    .header .logo {
        display: none;
    }
    .nav-trigger {
        display: none;
    }
    .nav-trigger span, .nav-trigger span:before, span:after {
        background-color: #fff;
    }
    .side-nav {
        display: block;
        width: 70px;
        z-index: 2;
        position: fixed;
    }
    .side-nav ul li span:nth-child(2) {
        display: none;
    }
    .side-nav .logo i {
        padding-left: 12px;
    }
    .side-nav .logo span {
        display: none;
    }
    .side-nav ul li i {
        font-size: 26px;
    }
    .side-nav ul li a {
        text-align: center;
    }
    .main-content {
        overflow: hidden;
        margin-left: 70px;
    }
}
.logo img{
    height: 50px;
    margin-left:70px;
}
.partie_ecole{
    color:white;
    margin-top:20px;
    font-family: var(--font);
    font-size:10px;
}
.user{
    float: right;
}
.right{
    display: flex;
    justify-content: flex-end;
    padding-right: 20px;
    margin-top: -20px;
    z-index: 1;
    display:none;
}
.name{
    color: #0497df;
    font-weight: bolder;
    font-family: var(--font);
    margin-top:5px;
    margin-left:70px;
}
/* set element styles for desktop */
@media screen and (min-width: 800px) {
    .side-nav {
        width: 200px;
    }
    .side-nav ul li span:nth-child(2) {
        display: inline-block;
    }
    .side-nav ul li i {
        font-size: 16px;
    }
    .side-nav ul li a {
        text-align: left;
    }
    .side-nav .logo i {
        padding-left: 0;
    }
    .side-nav .logo span {
        display: inline-block;
    }
    .main-content {
        margin-left: 200px;
    }
}
@media screen and (max-width: 800px) {
    .partie_ecole{
        display: none;
    }
}
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<script>
    .side-nav.visible {
display: block;
}$(document).ready(function() {
$('.nav-trigger').click(function() {
    $('.side-nav').toggleClass('visible');
});
});
</script>
<body>

<div class="header">
    <div class="logo">
        <i class="fa fa-tachometer"></i>
        <span>Brand</span>
    </div>
    <a href="#" class="nav-trigger"><span></span></a>
</div>
<div class="side-nav">
    <div class="logo">



        <div class="logo">
         <span><img src="../favicon.ico" alt=""> <h2 class="title">Enclos des pigeons</h2></span>
         @if (Auth::user())
         <span class="name">{{Auth::User()->email}}</span>

    </div>
    </div>
    <nav>
        <ul>
            <div class="partie_ecole">
                <h2>PARTIE ECOLE</h2>
            </div>
            <li>
                <a href="{{ route('student.index') }}" >
                    <span><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                    <span>Eleves</span>
                </a>
            </li>
            <li>
                <a href="{{ route('teacher.index') }}">
                    <span><i class="fa fa-male" aria-hidden="true"></i></i></span>
                    <span>Enseignants</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span><i class="fa fa-refresh" aria-hidden="true"></i></span>
                    <span>Vacataires</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                    <span>Administratif</span>
                </a>
            </li>
            <div class="partie_ecole">
                <h2>PARTIE GESTION</h2>
            </div>
            <li>
                <a href="{{ route('depense.index') }}">
                    <span><i class="fa fa-industry" aria-hidden="true"></i></span>
                    <span>Depenses</span>
                </a>
            </li>
            <li>
                <a href="{{ route('revenu.index') }}">
                    <span><i class="fa fa-outdent" aria-hidden="true"></i></span>
                    <span>Revenus</span>
                </a>
            </li>
            <li>
                <a href="{{ route('stat.index') }}">
                    <span><i class="fa fa-credit-card-alt"></i></span>
                    <span>Statistiques</span>
                </a>
            </li>
            <li>
                <a href="{{ route('stat.index') }}">
                    <span><i class="fa fa-credit-card-alt"></i></span>
                    <span>Banque</span>
                </a>
            </li>
            <li>
                <a class="uti" href="{{ route('users.index') }}">
                    <span><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                    <span>Utilisateur</span>
                </a>
            </li>
            <li>

                <a class="dec" href="{{route('logout')}}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();"

                ><i class="fa fa-credit-card-alt"></i><span>{{__('Se deconnecter')}}</span></a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" >
                    {{csrf_field()}}
                </form>

            </li>

        </ul>
    </nav>

</div>

<div class="main-content">
<div class="right">
    <div class="user">
        <p>Tony</p>
    </div>

        <div class="text">
            <p>Deconnexion</p>
        </div>

</div>
 @endif
</div>
</body>
</html>

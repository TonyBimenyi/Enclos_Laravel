

<head>
    <title>Se connecter</title>
    <style>
        body{
            background-image: url(images/back.png);
            background-size: cover;
        }
        .container{
            display:flex;
            justify-content: center;
            margin-top: 50px;
        }
        .card-header{
            color:white;
            font-size:40px;
            font-family: tahoma;
            text-align:center;
        }
        label{
            font-family: tahoma;
            color:white;
            font-size:15px;
            margin-top: 5px;
        }
        .card-body{
            margin-top: 20px;
        }
        input{
            height: 45px;
            width: 320px;
            background-color: white;
            outline: none;
            border:none;
            border-radius:3px;
            box-shadow: 2px 1px 8px 1px;
        }
        button{
            height: 45px;
            width: 320px;
            background-color: #6bf04a;
            outline: none;
            border:none;
            border-radius:3px;
            margin-top: 40px;
            color:white;
            font-family: tahoma;
        }
        h4{
            margin-top:10px;
            margin-right:20px;
            font-size: 12.5px;
            color:red;
            background-color: White;
            padding:11px;
            border-radius: 3px;
            font-family: tahoma;
            text-align: center;
        }
        .form-group label{

        }


    </style>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>


                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Nom d'.' '.'utilisateur') }}<br></label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entrer votre nom d;utilisateur...">

                                <br>

                                @error('email')
                                    <h4 >
                                        <strong>Le nom d'utilisateur ou mot de passe incorrect!</strong>
                                    </h4>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="*****************">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


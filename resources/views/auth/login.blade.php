<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Aldi Duzha" />
    <meta name="description" content="Free Bulma Login Template, part of Awesome Bulma Templates" />
    <meta name="keywords" content="bulma, login, page, website, template, free, awesome" />
    <link rel="canonical" href="https://aldi.github.io/bulma-login-template/" />
    <title>AllGyms</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-social@1/bin/bulma-social.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <div class="box">
                    <p class="subtitle is-4">Inicio sesion</p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <form method="post" action="{{ route('login') }}">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input is-medium" name="email" type="email" placeholder="Correo electronico" />
                                    <span class="icon is-medium is-left">
                                <i class="fas fa-envelope"></i></span>
                                    <span class="icon is-medium is-right"></span>
                                </p>
                            </div>

                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input is-medium" name= "password" type="password" placeholder="Contraseña" />
                                    <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i></span>
                                </p>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="button is-block is-primary is-large is-fullwidth">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>

                                <p class="help is-success">Al identificarte aceptas nuestras Condiciones de uso y venta. Consulta nuestro Aviso de privacidad y nuestras Aviso de Cookies y Aviso sobre publicidad basada en los intereses del usuario.</p>
                            </div>
                        </form>
                </div>

            </div>
        </div>
    </div>
</section>
</body>
</html>

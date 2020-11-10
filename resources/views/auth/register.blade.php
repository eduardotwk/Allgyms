@extends('layouts.app')

@section('content')
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
                        <p class="subtitle is-4">Registrarse</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input id= "name" class="input is-medium" type="nombre" name="name" placeholder="Nombre" />
                                    <span class="icon is-medium is-left">
                                <span class="icon is-medium is-right"></span>
                                <i class="fas fa-user"></i></span>
                                </p>
                            </div>



                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input id= "email" class="input is-medium" name="email" type="email" placeholder="Correo electronico" />
                                    <span class="icon is-medium is-left">
                                <i class="fas fa-envelope"></i></span>
                                    <span class="icon is-medium is-right"></span>
                                </p>
                            </div>

                            <div class="field">
                                <p class="control has-icons-left">
                                    <input id= "password" class="input is-medium" name="password" type="password" placeholder="Contraseña" />
                                    <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i></span>
                                <p class="help is-success">Utiliza ocho caracteres como mínimo con una combinación de letras, números y símbolos</p>
                            </div>

                            <div class="field">
                                <p class="control has-icons-left">
                                    <input id="password-confirm" class="input is-medium" type="confirm_password" name="password_confirmation" placeholder="Confirmar contraseña" />
                                    <span class="icon is-small is-left">
                              <i class="fas fa-lock"></i></span>
                                </p>
                            </div>

                            <div class="field">
                                <label class="checkbox">
                                    <input type="checkbox" />
                                    Recordarme
                                </label>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
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

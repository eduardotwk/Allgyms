@extends('layouts.app')

@section('content')

    <section class="hero is-medium is-lightis-bold">
        <div class="hero-head">
            <nav class="navbar is-transparent is-spaced" role="navigation" aria-label="main navigation">

                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="rent.html">
                            <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma Rent" width="80" height="20">
                        </a>
                        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarTopMain">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                    <div class="navbar-menu" id="navbarTopMain">
                        <div class="navbar-end">
                            <a href="#"
                               class="navbar-item has-text-weight-semibold">
                                <button class="button is-primary is-outlined">Mejores Clasificados</button>
                            </a>
                            <a href="{{ route('gyms.store') }}"
                               class="navbar-item has-text-weight-semibold">
                                <button class="button is-primary is-outlined">Mis gimnasios</button>
                            </a>



                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ route('gyms.create') }}" class="button is-link is-outlined" class="button is-primary">Publicar gimnasio</a>
                                    @else

                                    @endif
                                </div>
                            @endif
                        </div>


                    </div>
                </div>
            </nav>
        </div>
        <div class="hero-body  p-b-30 ">
            <div class="container">


                                <div class="field has-addons has-shadow-field">
                                    <table class="table is-bordered is-striped is-fullwidth">
                                        <thead>
                                        <tr class="is-selected ">
                                            <th >Nombre</th>
                                            <th >Ubicacion</th>
                                            <th >Telefono</th>
                                            <th >Detalles</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($gyms as $gym)
                                            <tr class="text-center">
                                                <td>{{ $gym->nombre }}</td>
                                                <td>{{ $gym->ubicacion }}</td>
                                                <td>{!! $gym->telefono !!}</td>
                                                <td>{!! $gym->detalles !!}</td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

            </div>
        </div>
        <footer class="hero is-small is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <a href="https://bulma.io">
                        <img src="https://bulma.io/images/made-with-bulma.png" alt="Made with Bulma" width="171" height="32">
                    </a>
                    <div class="columns m-t-10">
                        <div class="column">
                            <nav class="has-text-grey-light">
                                <a href="#" class="has-text-primary">Quienes somos</a> &bullet;
                                <a href="#" class="has-text-primary">Nuestra historia</a> &bullet;
                                <a href="#" class="has-text-primary">Contactenos</a> &bullet;
                            </nav>
                        </div>
                    </div>
                    <div class="b-t m-t-30 p-t-30 has-text-grey-light is-size-7">
                        AllGyms 2020 &copy <br> <a href="#" class="has-text-primary">Condiciones de uso</a> y <a class="has-text-primary" href="#">Politica de privacidad</a>.
                    </div>
                </div>
            </div>
        </footer>
    </section>
@endsection

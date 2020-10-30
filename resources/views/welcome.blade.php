<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="Aldi Duzha">
    <meta name="description" content="Search houses and apartments for rent anywhere within the US. View floorplans, pricing, images and more. Find your perfect rental.">
    <meta name="keywords" content="bulma, rent, template, apartments, page, website, free, awesome">
    <link rel="canonical" href="https://aldi.github.io/bulma-rent-template/index.html"/>
    <title>AllGyms</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div id="app">
    <section class="hero is-fullheight is-light" >
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
                                <span>Mejores Clasificados</span>
                                <span class="tag is-success m-l-5">Best</span>
                            </a>
                            <a href="#"
                               class="navbar-item has-text-weight-semibold">Publicar gimnasio</a>
                            <a href="#"
                               class="navbar-item has-text-weight-semibold">En oferta</a>
                            <div class="navbar-item">
                                <a href="{{ route('login') }}" class="button is-primary">
                                    Iniciar sesion
                                </a>
                            </div>
                            <div class="navbar-item">
                                <a href="{{ route('register') }}" class="button is-primary">
                                    Registrarse
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="hero-body  p-b-30 ">
            <div class="container">
                <h2 class="subtitle">
					<span class="has-text-centered is-block">
						Busca, publica y compara precios de gimnasios.
					</span>
                </h2>
                <h1 class="title">
                    <span class="is-size-2 has-text-centered is-block">"Ahorrate dinero de mas"</span>
                </h1>
                <div class="columns is-centered">
                    <div class="column is-7">
                        <div class="search-form">
                            <form>
                                <div class="field has-addons has-shadow-field">
                                    <div class="control has-icons-left is-expanded">
                                        <input type="text" id="mainSearch" defaultvalue="" placeholder="Ingrese nombre de gimnasio..." class="input is-large">
                                        <span class="icon is-small is-left">
											<svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fa" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
												<path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
												</path>
											</svg>
										</span>
                                    </div>
                                    <div class="control">
                                        <button type="button" class="button is-large is-primary">
                                            <span class="has-text-weight-semibold">Buscar Gym</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="has-text-centered">
                    <img class="m-t-50" src="media/1.jpg" alt="Find rentals">
                </div>
            </div>
        </div>
    </section>

    <section>
    <footer>
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
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {
            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {
                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);
                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        }
    });
</script>
</body>
</html>

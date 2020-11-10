@extends('layouts.app')
@section('content')
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
     <section class="section">
         <div class="container">
             Publicar  Gimnasio
             <div>
                 <form action="/action_page.php">
                     <div class="field">
                         <label class="label">Nombre Gym</label>
                         <div class="control">
                             <input class="input" type="text" name="nombre" placeholder="">
                         </div>
                     </div>

                     <div class="field">
                         <label class="label">Descripcion</label>
                         <div class="control">
                             <textarea class="textarea" placeholder=""></textarea>
                         </div>
                     </div>

                     <div class="field">
                         <label class="label">Direccion</label>
                         <div class="control">
                             <input class="input" type="text" name="direccion" placeholder="">
                         </div>
                     </div>

                     <div class="field">
                         <label class="label">Mensualidad</label>
                         <div class="control">
                             <input class="input" type="text" placeholder="$">
                         </div>
                     </div>

                     <div class="field">
                         <div class="control">
                             <label class="checkbox">
                                 <input type="checkbox">
                                 I agree to the <a href="#">terms and conditions</a>
                             </label>
                         </div>
                     </div>

                     <div class="field">
                         <div class="control">
                             <label class="radio">
                                 <input type="radio" name="question">
                                 Yes
                             </label>
                             <label class="radio">
                                 <input type="radio" name="question">
                                 No
                             </label>
                         </div>
                     </div>

                     <div class="field is-grouped">
                         <div class="control">
                             <button class="button is-primary is-outlined">Publicar gimnasio</button>
                         </div>
                         <div class="control">
                             <button class="button is-primary is-outlined">Cancelar</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </section>
     @endsection
     </body>

